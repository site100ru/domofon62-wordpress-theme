<?php
/**
 * Скорость загрузки и микроразметка (schema.org, OpenGraph через Yoast SEO)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ---------- СКОРОСТЬ ---------- */

// Страницы, где нужны скрипты и стили WooCommerce
function domofon62_is_shop_context() {
	if ( ! function_exists( 'is_woocommerce' ) ) {
		return false;
	}
	if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) {
		return true;
	}
	// Шорткоды или блоки товаров в контенте страницы
	if ( is_singular() ) {
		$content = (string) get_post_field( 'post_content', get_queried_object_id() );
		if ( preg_match( '/\[(products|product_|add_to_cart|fibosearch)|wp:woocommerce\//', $content ) ) {
			return true;
		}
	}
	return false;
}

// Отключаем WooCommerce и его плагины на страницах без каталога
add_action( 'wp_enqueue_scripts', 'domofon62_dequeue_shop_assets', 100 );
function domofon62_dequeue_shop_assets() {
	if ( domofon62_is_shop_context() ) {
		return;
	}

	$styles = array(
		'woocommerce-layout',
		'woocommerce-smallscreen',
		'woocommerce-general',
		'wc-blocks-style',
		'brands-styles',
		'dgwt-wcas-style',
		'berocket_lmp_style',
		'font-awesome',
	);
	foreach ( $styles as $handle ) {
		wp_dequeue_style( $handle );
	}

	$scripts = array(
		'wc-add-to-cart',
		'woocommerce',
		'wc-js-cookie',
		'wc-jquery-blockui',
		'jquery-blockui',
		'js-cookie',
		'sourcebuster-js',
		'wc-order-attribution',
		'berocket_lmp_js',
	);
	foreach ( $scripts as $handle ) {
		wp_dequeue_script( $handle );
	}
}

// wc-blocks-style WooCommerce добавляет в обход очереди — убираем сам тег
add_filter( 'style_loader_tag', 'domofon62_drop_wc_blocks_style', 10, 2 );
function domofon62_drop_wc_blocks_style( $tag, $handle ) {
	if ( 'wc-blocks-style' === $handle && ! is_admin() && ! domofon62_is_shop_context() ) {
		return '';
	}
	return $tag;
}

// reCAPTCHA v3: вместо api.js Google — заглушка, настоящий скрипт грузится при работе с формой
add_action( 'wp_enqueue_scripts', 'domofon62_lazy_recaptcha', 21 );
function domofon62_lazy_recaptcha() {
	if ( ! wp_script_is( 'google-recaptcha', 'registered' ) ) {
		return;
	}

	$src = wp_scripts()->registered['google-recaptcha']->src;
	if ( empty( $src ) ) {
		return;
	}
	$src = add_query_arg( 'onload', 'domofon62RecaptchaLoaded', $src );

	wp_deregister_script( 'google-recaptcha' );
	wp_register_script( 'google-recaptcha', false, array(), null, array( 'in_footer' => true ) );

	$js = <<<'JS'
(function () {
	var src = %s;
	var loading = null;
	var cfg = '___grecaptcha_cfg';
	var shim = {
		// Колбэки ready выполнит сам api.js после загрузки
		ready: function (cb) {
			window[cfg] = window[cfg] || {};
			(window[cfg].fns = window[cfg].fns || []).push(cb);
		},
		execute: function (key, opts) {
			return load().then(function (real) { return real.execute(key, opts); });
		}
	};

	function load() {
		if (!loading) {
			loading = new Promise(function (resolve, reject) {
				window.domofon62RecaptchaLoaded = function () {
					// api.js дописывает свои методы в тот же объект, поэтому сравниваем execute, а не сам объект
					if (!window.grecaptcha || window.grecaptcha.execute === shimExecute) { reject(new Error('reCAPTCHA не загрузилась')); return; }
					window.grecaptcha.ready(function () { resolve(window.grecaptcha); });
				};
				var s = document.createElement('script');
				s.src = src;
				s.async = true;
				s.onerror = reject;
				document.head.appendChild(s);
			});
		}
		return loading;
	}

	var shimExecute = shim.execute;
	window.grecaptcha = shim;

	document.addEventListener('focusin', function (e) {
		if (e.target.closest && e.target.closest('.wpcf7-form')) { load(); }
	});
	document.addEventListener('show.bs.modal', function () { load(); });
})();
JS;

	wp_add_inline_script( 'google-recaptcha', sprintf( $js, wp_json_encode( $src ) ) );
}

// URL картинки из uploads → её WebP-копия: рядом в uploads (bg.jpg → bg.webp) или в теме img/webp/bg.webp
function domofon62_webp_url( $url ) {
	if ( ! $url || ! preg_match( '/\.(jpe?g|png)$/i', $url ) ) {
		return $url;
	}
	$uploads = wp_get_upload_dir();
	$path    = str_replace( $uploads['baseurl'], $uploads['basedir'], $url );
	if ( $path === $url ) {
		return $url;
	}
	$webp = preg_replace( '/\.(jpe?g|png)$/i', '.webp', $path );
	if ( file_exists( $webp ) ) {
		return preg_replace( '/\.(jpe?g|png)$/i', '.webp', $url );
	}
	$name = basename( $webp );
	if ( file_exists( get_template_directory() . '/img/webp/' . $name ) ) {
		return get_template_directory_uri() . '/img/webp/' . $name;
	}
	return $url;
}

// Иконка MAX в форме CF7 вшита растром (uploads/2026/05/max-icon.svg, 248 КБ) — подменяем на векторную из темы
add_filter( 'wpcf7_form_elements', 'domofon62_cf7_light_max_icon' );
function domofon62_cf7_light_max_icon( $html ) {
	return preg_replace(
		'#<img src="[^"]*/uploads/2026/05/max-icon\.svg"#',
		'<img src="' . esc_url( get_template_directory_uri() . '/img/max.svg' ) . '" width="40" height="40" loading="lazy"',
		$html
	);
}

// CF7 DTX ставит aria-invalid скрытым полям — по HTML так нельзя (ошибка W3C)
add_filter( 'wpcf7_form_elements', 'domofon62_cf7_hidden_no_aria' );
function domofon62_cf7_hidden_no_aria( $html ) {
	return preg_replace( '#(<input type="hidden"[^>]*?) aria-invalid="false"#', '$1', $html );
}

// Фон первого слайда главной — сразу, без ожидания jQuery
add_action( 'wp_head', 'domofon62_preload_home_banner', 1 );
function domofon62_preload_home_banner() {
	if ( ! is_page_template( 'page-home.php' ) || ! function_exists( 'get_field' ) ) {
		return;
	}
	$desktop = get_field( 'img_pervogo_slajda' );
	$mobile  = get_field( 'img_mobile_slajda' );
	if ( ! empty( $desktop['url'] ) ) {
		$desktop['url'] = domofon62_webp_url( $desktop['url'] );
	}

	if ( ! empty( $desktop['url'] ) ) {
		printf( '<link rel="preload" as="image" href="%s" media="(min-width: 993px)" fetchpriority="high">' . "\n", esc_url( $desktop['url'] ) );
	}
	if ( ! empty( $mobile['url'] ) ) {
		printf( '<link rel="preload" as="image" href="%s" media="(max-width: 992px)" fetchpriority="high">' . "\n", esc_url( $mobile['url'] ) );
	}
	?>
<style>
	@media (min-width: 993px) {
		#services-home { background-image: url(<?php echo esc_url( $desktop['url'] ?? '' ); ?>); }
	}
	@media (max-width: 992px) {
		#services-home { background-color: #002977; background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php echo esc_url( $mobile['url'] ?? '' ); ?>); }
	}
</style>
	<?php
}


/* ---------- ВАЛИДНОСТЬ КОНТЕНТА УСЛУГ ---------- */

// <style> из контента услуги остаётся в контенте: в <head> он оказывается раньше Bootstrap
// и theme.css (они подключены в header-4.php после wp_head) и проигрывает им в каскаде.

add_filter( 'the_content', 'domofon62_uslugi_content_cleanup', 20 );
function domofon62_uslugi_content_cleanup( $content ) {
	if ( ! is_singular( 'uslugi' ) || ! in_the_loop() ) {
		return $content;
	}
	// alt для картинок без него: фоновые — пустой, остальные — название услуги.
	// loading="lazy" всем, кроме первых двух (фон первого экрана: десктоп + мобильный).
	$title = esc_attr( get_the_title() );
	$index = 0;
	return preg_replace_callback(
		'#<img\b([^>]*)>#i',
		function ( $m ) use ( $title, &$index ) {
			$attrs = $m[1];
			if ( ! preg_match( '#\balt=#i', $attrs ) ) {
				$alt   = preg_match( '#class="[^"]*-bg\b#', $attrs ) ? '' : $title;
				$attrs = ' alt="' . $alt . '"' . $attrs;
			}
			if ( $index++ >= 2 && ! preg_match( '#\bloading=#i', $attrs ) ) {
				$attrs = ' loading="lazy"' . $attrs;
			}
			return '<img' . $attrs . '>';
		},
		$content
	);
}


/* ---------- МИКРОРАЗМЕТКА ---------- */

// Данные организации для JSON-LD
function domofon62_org_data() {
	return array(
		'name'      => 'Рязанская домофонная компания',
		'email'     => 'info@domofon62.ru',
		'phones'    => array( '+7-4912-20-25-26', '+7-4912-25-50-46' ),
		'taxID'     => '6234057300',
		'address'   => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => 'ул. Полевая, д. 1',
			'addressLocality' => 'Рязань',
			'addressRegion'   => 'Рязанская область',
			'postalCode'      => '390046',
			'addressCountry'  => 'RU',
		),
		'geo'       => array(
			'@type'     => 'GeoCoordinates',
			'latitude'  => 54.6162055,
			'longitude' => 39.742697,
		),
		'hasMap'    => 'https://yandex.ru/maps/org/1026973892/',
		'priceRange' => 'от 50 ₽',
		'sameAs'    => array(
			'https://vk.com/domofon62',
			'https://t.me/RDK62',
			'https://2gis.ru/ryazan/firm/6192977768630020',
			'https://yandex.ru/profile/1026973892',
		),
	);
}

// Organization от Yoast превращаем в LocalBusiness с адресом, телефонами и часами работы
add_filter( 'wpseo_schema_organization', 'domofon62_schema_organization' );
function domofon62_schema_organization( $data ) {
	$org = domofon62_org_data();

	$data['@type']     = array( 'Organization', 'LocalBusiness' );
	$data['name']      = $org['name'];
	$data['url']       = home_url( '/' );
	$data['email']     = $org['email'];
	$data['telephone'] = $org['phones'][0];
	$data['taxID']     = $org['taxID'];
	$data['address']   = $org['address'];
	$data['geo']        = $org['geo'];
	$data['hasMap']     = $org['hasMap'];
	$data['priceRange'] = $org['priceRange'];
	$data['areaServed'] = domofon62_area_served();
	$data['openingHoursSpecification'] = array(
		array(
			'@type'     => 'OpeningHoursSpecification',
			'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
			'opens'     => '08:30',
			'closes'    => '17:00',
		),
	);
	$data['contactPoint'] = array(
		array(
			'@type'             => 'ContactPoint',
			'contactType'       => 'sales',
			'telephone'         => $org['phones'][0],
			'areaServed'        => 'RU',
			'availableLanguage' => 'Russian',
		),
		array(
			'@type'             => 'ContactPoint',
			'contactType'       => 'customer support',
			'telephone'         => $org['phones'][1],
			'areaServed'        => 'RU',
			'availableLanguage' => 'Russian',
		),
	);

	$same_as        = isset( $data['sameAs'] ) ? (array) $data['sameAs'] : array();
	$data['sameAs'] = array_values( array_unique( array_merge( $same_as, $org['sameAs'] ) ) );

	if ( empty( $data['image'] ) && ! empty( $data['logo'] ) ) {
		$data['image'] = $data['logo'];
	}

	return $data;
}

// Service на страницах услуг
add_filter( 'wpseo_schema_graph', 'domofon62_schema_service', 10, 2 );
function domofon62_schema_service( $graph, $context ) {
	if ( ! is_singular( 'uslugi' ) ) {
		return $graph;
	}

	$post_id = get_queried_object_id();
	$url     = get_permalink( $post_id );
	$desc    = get_post_meta( $post_id, '_yoast_wpseo_metadesc', true );
	if ( ! $desc ) {
		$desc = wp_trim_words( wp_strip_all_tags( strip_shortcodes( get_post_field( 'post_content', $post_id ) ) ), 40, '…' );
	}

	$service = array(
		'@type'       => 'Service',
		'@id'         => $url . '#service',
		'name'        => get_the_title( $post_id ),
		'serviceType' => get_the_title( $post_id ),
		'url'         => $url,
		'provider'    => array( '@id' => home_url( '/#organization' ) ),
		'areaServed'  => domofon62_area_served(),
		'mainEntityOfPage' => array( '@id' => $url ),
	);
	if ( $desc ) {
		$service['description'] = $desc;
	}
	if ( has_post_thumbnail( $post_id ) ) {
		$service['image'] = get_the_post_thumbnail_url( $post_id, 'full' );
	}

	// Цена «от» — те же цифры, что на карточках /uslugi/ (archive-uslugi.php)
	$prices = domofon62_service_prices();
	$slug   = get_post_field( 'post_name', $post_id );
	if ( isset( $prices[ $slug ] ) ) {
		$p    = $prices[ $slug ];
		$spec = array(
			'@type'         => 'UnitPriceSpecification',
			'price'         => $p['price'],
			'minPrice'      => $p['price'],
			'priceCurrency' => 'RUB',
		);
		if ( ! empty( $p['monthly'] ) ) {
			$spec['unitCode'] = 'MON';
			$spec['unitText'] = 'месяц';
		}
		$service['offers'] = array(
			'@type'              => 'Offer',
			'price'              => $p['price'],
			'priceCurrency'      => 'RUB',
			'priceSpecification' => $spec,
			'availability'       => 'https://schema.org/InStock',
			'url'                => $url,
		);
	}

	$graph[] = $service;

	// FAQPage из блока вопросов (аккордеон в тексте услуги)
	$faq = domofon62_faq_from_content( get_post_field( 'post_content', $post_id ) );
	if ( $faq ) {
		$graph[] = array(
			'@type'      => 'FAQPage',
			'@id'        => $url . '#faq',
			'url'        => $url,
			'isPartOf'   => array( '@id' => $url ),
			'mainEntity' => $faq,
		);
	}

	return $graph;
}

// Регион работы: Рязань и область
function domofon62_area_served() {
	return array(
		array( '@type' => 'City', 'name' => 'Рязань' ),
		array( '@type' => 'AdministrativeArea', 'name' => 'Рязанская область' ),
	);
}

// Минимальные цены услуг (ключ — ярлык записи). Меняете цену на /uslugi/ — поменяйте и здесь
function domofon62_service_prices() {
	return array(
		'umny-domofon'                => array( 'price' => 69, 'monthly' => true ),
		'ustanovku-videonablyudeniya' => array( 'price' => 109, 'monthly' => true ),
		'vorota-i-shlagbaumy'         => array( 'price' => 50, 'monthly' => true ),
		'ustanovku-sistem-kontrolya-dostupa-i-ucheta-rabochego-vremeni' => array( 'price' => 15000 ),
	);
}

// Вопросы и ответы из bootstrap-аккордеона: .accordion-button — вопрос, .accordion-body — ответ
function domofon62_faq_from_content( $html ) {
	if ( false === strpos( (string) $html, 'accordion-item' ) ) {
		return array();
	}
	$doc = new DOMDocument();
	libxml_use_internal_errors( true );
	$doc->loadHTML( '<?xml encoding="utf-8"?><div>' . $html . '</div>' );
	libxml_clear_errors();
	$xp    = new DOMXPath( $doc );
	$cls   = function ( $c ) {
		return "contains(concat(' ', normalize-space(@class), ' '), ' $c ')";
	};
	$clean = function ( $node ) {
		return $node ? trim( preg_replace( '/\s+/u', ' ', $node->textContent ) ) : '';
	};

	$out = array();
	foreach ( $xp->query( '//*[' . $cls( 'accordion-item' ) . ']' ) as $item ) {
		$q = $clean( $xp->query( './/*[' . $cls( 'accordion-button' ) . ']', $item )->item( 0 ) );
		$a = $clean( $xp->query( './/*[' . $cls( 'accordion-body' ) . ']', $item )->item( 0 ) );
		if ( $q && $a ) {
			$out[] = array(
				'@type'          => 'Question',
				'name'           => $q,
				'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $a ),
			);
		}
	}
	return $out;
}

// Product от WooCommerce: бренд, sku строкой, все фото
add_filter( 'woocommerce_structured_data_product', 'domofon62_schema_product', 10, 2 );
function domofon62_schema_product( $markup, $product ) {
	$markup['sku'] = (string) $markup['sku'];

	$images = array();
	if ( $product->get_image_id() ) {
		$images[] = wp_get_attachment_url( $product->get_image_id() );
	}
	foreach ( $product->get_gallery_image_ids() as $image_id ) {
		$images[] = wp_get_attachment_url( $image_id );
	}
	$images = array_values( array_filter( array_unique( $images ) ) );
	if ( $images ) {
		$markup['image'] = count( $images ) > 1 ? $images : $images[0];
	}

	$brand = domofon62_product_brand( $product );
	if ( $brand ) {
		$markup['brand'] = array( '@type' => 'Brand', 'name' => $brand );
	}

	return $markup;
}

// Бренд ищем в названии товара, затем в названиях его категорий
function domofon62_product_brand( $product ) {
	// Ключ — как встречается в тексте, значение — как выводим
	$brands = array(
		'Dahua'     => 'Dahua',
		'Hikvision' => 'Hikvision',
		'HiWatch'   => 'HiWatch',
		'Tantos'    => 'Tantos',
		'Тантос'    => 'Tantos',
		'Vizit'     => 'Vizit',
		'Визит'     => 'Vizit',
		'Doorhan'   => 'DoorHan',
		'Came'      => 'CAME',
		'Nice'      => 'Nice',
		'Roger'     => 'Roger',
		'Bolid'     => 'Bolid',
		'Болид'     => 'Bolid',
		'Rubetec'   => 'Rubetec',
		'Xvoice'    => 'Xvoice',
		'Beward'    => 'Beward',
		'Optimus'   => 'Optimus',
		'EZ-IP'     => 'EZ-IP',
		'Imou'      => 'Imou',
		'TP-Link'   => 'TP-Link',
		'Mikrotik'  => 'MikroTik',
		'Keenetic'  => 'Keenetic',
		'Seagate'   => 'Seagate',
		'Smartec'   => 'Smartec',
		'PERCo'     => 'PERCo',
		'Sigur'     => 'Sigur',
		'Trassir'   => 'Trassir',
		'Slinex'    => 'Slinex',
		'Цифрал'    => 'Цифрал',
		'Метаком'   => 'Метаком',
		'Элтис'     => 'Элтис',
		'Ласкомекс' => 'Ласкомекс',
		'Радиотех'  => 'Радиотех',
	);

	$haystacks = array( $product->get_name() );
	foreach ( $product->get_category_ids() as $cat_id ) {
		$haystacks[] = get_term_field( 'name', $cat_id, 'product_cat' );
		foreach ( get_ancestors( $cat_id, 'product_cat' ) as $parent_id ) {
			$haystacks[] = get_term_field( 'name', $parent_id, 'product_cat' );
		}
	}

	foreach ( $haystacks as $text ) {
		if ( ! is_string( $text ) ) {
			continue;
		}
		foreach ( $brands as $needle => $name ) {
			if ( preg_match( '/(^|[^\p{L}])' . preg_quote( $needle, '/' ) . '($|[^\p{L}])/iu', $text ) ) {
				return $name;
			}
		}
	}
	return '';
}

// Хлебные крошки размечает Yoast, дубль от WooCommerce не нужен
add_filter( 'woocommerce_structured_data_breadcrumblist', '__return_empty_array' );


/* ---------- OPENGRAPH ---------- */

// og:image, если у страницы нет своей картинки: фото категории или первый слайд главной
// additional_images срабатывает после картинок Yoast, поэтому has_images() здесь корректен
add_action( 'wpseo_add_opengraph_additional_images', 'domofon62_og_images' );
function domofon62_og_images( $container ) {
	if ( $container->has_images() ) {
		return;
	}

	$theme_img = get_template_directory_uri() . '/img/';

	// Категория: своё фото → фото родительской категории → фото первого товара в ней
	if ( is_tax( 'product_cat' ) ) {
		$term_id = get_queried_object_id();
		foreach ( array_merge( array( $term_id ), get_ancestors( $term_id, 'product_cat' ) ) as $id ) {
			$thumb_id = (int) get_term_meta( $id, 'thumbnail_id', true );
			if ( $thumb_id ) {
				$container->add_image_by_id( $thumb_id );
				return;
			}
		}
		$products = get_posts( array(
			'post_type'      => 'product',
			'posts_per_page' => 1,
			'fields'         => 'ids',
			'meta_key'       => '_thumbnail_id',
			'tax_query'      => array( array( 'taxonomy' => 'product_cat', 'terms' => $term_id ) ),
		) );
		if ( $products ) {
			$container->add_image_by_id( (int) get_post_thumbnail_id( $products[0] ) );
			return;
		}
	}

	// Магазин: фото первой категории верхнего уровня
	if ( function_exists( 'is_shop' ) && is_shop() ) {
		$cats = get_terms( array( 'taxonomy' => 'product_cat', 'parent' => 0, 'hide_empty' => true, 'meta_key' => 'thumbnail_id', 'number' => 1 ) );
		if ( ! is_wp_error( $cats ) && $cats ) {
			$container->add_image_by_id( (int) get_term_meta( $cats[0]->term_id, 'thumbnail_id', true ) );
			return;
		}
	}

	// Архив услуг — первая карточка услуг
	if ( is_post_type_archive( 'uslugi' ) ) {
		$container->add_image( array( 'url' => $theme_img . 'uslugi/card-1.webp', 'width' => 670, 'height' => 530, 'type' => 'image/webp' ) );
		return;
	}

	// Архив объектов — фото последнего объекта
	if ( is_post_type_archive( 'objekty' ) ) {
		$last = get_posts( array( 'post_type' => 'objekty', 'posts_per_page' => 1, 'fields' => 'ids', 'meta_key' => '_thumbnail_id' ) );
		if ( $last ) {
			$container->add_image_by_id( (int) get_post_thumbnail_id( $last[0] ) );
			return;
		}
	}

	// Контакты — картинка «связаться с нами» из блока CTA услуг
	if ( is_page( 'kontakty' ) ) {
		$container->add_image( array( 'url' => $theme_img . 'uslugi/cta.webp', 'width' => 1280, 'height' => 720, 'type' => 'image/webp' ) );
		return;
	}

	// Остальные страницы: первая картинка из текста или из полей ACF страницы
	if ( is_singular() && ! is_front_page() ) {
		$img = domofon62_first_page_image( get_queried_object_id() );
		if ( $img ) {
			$container->add_image( $img );
			return;
		}
	}

	$default = domofon62_og_default_image();
	if ( $default ) {
		$container->add_image( $default );
	}
}

// meta description и og:description по умолчанию, если в Yoast не заполнены.
// Yoast перед выводом тега пропускает текст описания через эти фильтры,
// функция получает его в $desc и возвращает то, что попадёт в тег.
add_filter( 'wpseo_metadesc', 'domofon62_default_metadesc' );        // <meta name="description">
add_filter( 'wpseo_opengraph_desc', 'domofon62_default_metadesc' );  // <meta property="og:description">
function domofon62_default_metadesc( $desc ) {
	// Описание заполнено в Yoast (поле «Мета-описание» у страницы) — оно главнее, отдаём как есть
	if ( '' !== trim( (string) $desc ) ) {
		return $desc;
	}
	// Название компании — подставляется в конец описаний ниже
	$company = 'Рязанская домофонная компания';

	// Главная: один фиксированный текст — чем занимается компания, город и телефон
	if ( is_front_page() ) {
		return $company . ': установка и обслуживание домофонов, видеонаблюдения, СКУД, шлагбаумов и автоматических ворот в Рязани. Тел. +7 (4912) 20-25-26.';
	}
	// Карточка товара WooCommerce (function_exists — на случай, если WooCommerce выключен)
	if ( function_exists( 'is_product' ) && is_product() ) {
		// Объект товара по ID текущей страницы
		$product = wc_get_product( get_queried_object_id() );
		if ( $product ) {
			// «Видеорегистратор … — купить в Рязани.»
			$text = $product->get_name() . ' — купить в Рязани.';
			// Цену добавляем, только если она указана (у товаров «под заказ» её нет)
			if ( $product->get_price() ) {
				$text .= ' Цена ' . $product->get_price() . ' руб.';
			}
			// «… Продажа и установка — Рязанская домофонная компания.»
			return $text . ' Продажа и установка — ' . $company . '.';
		}
	}
	// Категория товаров (/product-category/…)
	if ( is_tax( 'product_cat' ) ) {
		// Текущая категория
		$term = get_queried_object();
		// Описание категории из админки (Товары → Категории), очищенное от тегов и обрезанное до 160 символов
		$text = domofon62_plain_text( $term->description );
		// Описание есть — берём его, нет — «Bolid — купить в Рязани с установкой. Каталог: …»
		return $text ? $text : $term->name . ' — купить в Рязани с установкой. Каталог: ' . $company . '.';
	}
	// Любая отдельная страница, запись или услуга (контакты, «О компании», /uslugi/…)
	if ( is_singular() ) {
		// Текущая страница
		$post = get_queried_object();
		// Берём цитату (поле «Отрывок»), если её нет — сам текст страницы; чистим и обрезаем до 160 символов
		$text = domofon62_plain_text( $post->post_excerpt ? $post->post_excerpt : $post->post_content );
		// Текст есть — отдаём его, страница пустая — «Контакты — Рязанская домофонная компания.»
		return $text ? $text : get_the_title( $post ) . ' — ' . $company . '.';
	}
	// Остальные страницы (например, /shop/ — архив товаров) не трогаем: остаётся пустое описание
	return $desc;
}

// Текст без разметки, не длиннее 160 символов по границе слова
function domofon62_plain_text( $html ) {
	// Вырезаем блоки <style> и <script> целиком вместе с содержимым, иначе CSS/JS попадут в описание
	$text = preg_replace( '#<(style|script)[^>]*>.*?</\1>#is', ' ', (string) $html );
	// Убираем шорткоды [..], затем HTML-теги, все пробелы/переносы склеиваем в один пробел, обрезаем края
	$text = trim( preg_replace( '/\s+/u', ' ', wp_strip_all_tags( strip_shortcodes( $text ) ) ) );
	// Короче 160 символов — возвращаем целиком (160 — примерно столько поисковик показывает в сниппете)
	if ( mb_strlen( $text ) <= 160 ) {
		return $text;
	}
	// Длиннее — берём первые 160 символов…
	$text = mb_substr( $text, 0, 160 );
	// …отрезаем по последнему пробелу, чтобы не рвать слово, и ставим многоточие
	return mb_substr( $text, 0, mb_strrpos( $text, ' ' ) ) . '…';
}

// Первая фотография страницы (jpg/png/webp, не иконка): сначала текст, потом поля ACF
function domofon62_first_page_image( $post_id ) {
	$is_photo = function ( $url ) {
		return $url && preg_match( '/\.(jpe?g|png|webp)(\?|$)/i', $url ) && ! preg_match( '/(ico|icon|logo)[-_.]/i', basename( $url ) );
	};

	$from_html = function ( $html ) use ( $is_photo ) {
		if ( is_string( $html ) && preg_match_all( '/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $m ) ) {
			foreach ( $m[1] as $url ) {
				if ( $is_photo( $url ) ) {
					return array( 'url' => $url );
				}
			}
		}
		return null;
	};

	$img = $from_html( get_post_field( 'post_content', $post_id ) );
	if ( $img ) {
		return $img;
	}

	if ( function_exists( 'get_fields' ) ) {
		$stack = array( (array) get_fields( $post_id ) );
		while ( $stack ) {
			foreach ( array_pop( $stack ) as $value ) {
				$img = $from_html( $value );
				if ( $img ) {
					return $img;
				}
				if ( is_array( $value ) && isset( $value['url'], $value['mime_type'] ) && 0 === strpos( $value['mime_type'], 'image/' ) && $is_photo( $value['url'] ) ) {
					return array(
						'url'    => $value['url'],
						'width'  => isset( $value['width'] ) ? $value['width'] : null,
						'height' => isset( $value['height'] ) ? $value['height'] : null,
						'type'   => $value['mime_type'],
					);
				}
				if ( is_array( $value ) ) {
					$stack[] = $value;
				}
			}
		}
	}
	return null;
}

function domofon62_og_default_image() {
	$front_id = (int) get_option( 'page_on_front' );
	if ( ! $front_id || ! function_exists( 'get_field' ) ) {
		return null;
	}
	$img = get_field( 'img_pervogo_slajda', $front_id );
	if ( empty( $img['url'] ) ) {
		return null;
	}
	return array(
		'url'    => $img['url'],
		'width'  => isset( $img['width'] ) ? $img['width'] : null,
		'height' => isset( $img['height'] ) ? $img['height'] : null,
		'type'   => isset( $img['mime_type'] ) ? $img['mime_type'] : null,
		'alt'    => isset( $img['alt'] ) ? $img['alt'] : '',
	);
}

/**
 * Чистим <head>: без версий WordPress/WooCommerce и служебных ссылок,
 * которые сайту не нужны (RSD, REST API, oEmbed, shortlink).
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );
remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
add_filter( 'the_generator', '__return_empty_string' );
add_action( 'get_header', function () {
	remove_action( 'wp_head', 'wc_generator_tag' );
} );

// ?ver=<версия WordPress> у скриптов и стилей тоже выдаёт версию — убираем только её
function domofon62_strip_wp_version( $src ) {
	if ( $src && strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) !== false ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'domofon62_strip_wp_version', 9999 );
add_filter( 'script_loader_src', 'domofon62_strip_wp_version', 9999 );
