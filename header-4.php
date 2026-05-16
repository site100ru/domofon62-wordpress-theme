<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="eba6e1ca90104fe8" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />

	<?php /* Output title Делаем правильные заголовки */?>
	<?php if ( 'uslugi' == get_post_type() ): ?>
	<title>Наши услуги | <?php bloginfo('name'); ?></title>
	<meta property="og:title" content="Наши услуги | <?php bloginfo('name'); ?>" />
	<meta name="description" content="Наши услуги | <?php bloginfo('name'); ?>" />
	<meta property="og:description" content="Наши услуги | <?php bloginfo('name'); ?>" />
	<?php elseif ( 'objekty' == get_post_type() ): ?>
	<title>Наши объекты | <?php echo wp_get_document_title(); ?></title>
	<meta property="og:title" content="Наши объекты | <?php echo wp_get_document_title(); ?>" />
	<meta name="description" content="Наши объекты | <?php echo wp_get_document_title(); ?>" />
	<meta property="og:description" content="Наши объекты | <?php echo wp_get_document_title(); ?>" />
	<?php
		elseif ( 'product' == get_post_type() ):
		// Get parent product category
		function get_category_hierarchy($category_id, $taxonomy = 'product_cat', $exclude_current = true) {
			$hierarchy = array();
			$current_category = get_term($category_id, $taxonomy);
			
			if ($current_category && !is_wp_error($current_category)) {
				/* Добавляем текущую категорию только если не нужно исключать $exclude_current = true */
				if (!$exclude_current) {
					$hierarchy[] = $current_category;
				}
				
				if ($current_category->parent != 0) {
					$parent_hierarchy = get_category_hierarchy($current_category->parent, $taxonomy, false);
					$hierarchy = array_merge($parent_hierarchy, $hierarchy);
				}
			}
			
			return $hierarchy;
		}
			
		// Get current product cat id
		$obj = get_queried_object();
		$cat_id = $obj->term_id;

		// Использование
		$child_category_id = $cat_id; // ID вашей дочерней категории
		$full_hierarchy = get_category_hierarchy($child_category_id);

		// Вывод результата
		$title_and_description = '';
		foreach ( $full_hierarchy as $category ) {
			//echo $category->name . ' | ';
			$title_and_description .= $category->name . ' | ';
		}
	?>
	<title><?php echo $title_and_description . wp_get_document_title(); ?></title>
	<meta property="og:title" content="<?php echo $title_and_description . wp_get_document_title(); ?>" />
	<meta name="description" content="<?php echo $title_and_description . wp_get_document_title(); ?>" />
	<meta property="og:description" content="<?php echo $title_and_description . wp_get_document_title(); ?>" />
	<?php else: ?>
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<meta property="og:title" content="<?php wp_title(' | ', true, 'right'); ?>" />
	<meta name="description" content="<?php wp_title(' | ', true, 'right'); ?>" />
	<meta property="og:description" content="<?php wp_title(' | ', true, 'right'); ?>" />
	<?php endif; ?>

	<meta name="keywords" content="РДК, Рязанская домофонная компания, домофоны, установка домофонов, видеонаблюдение, установка видеонаблюдения, системы контроля доступа, установка систем контроля доступа, СКУД, установка СКУД, шлагбаумы, установка шлагбаумов, автоматические ворота, установка автоматических ворот" />

	<?php wp_head(); ?>

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Новые стили только для новых страниц -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/theme.css'>
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/bootstrap-5-multilevel-menu-2.css'>
	<!--link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/bootstrap-5-multilevel-menu-2.css'-->
	<!-- Messengers button CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/messengers-button.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.svg" id="favicon">
</head>

<body <?php body_class(); ?>>

	<header>
		<nav class="navbar py-0 navbar-expand-lg navbar-dark for-mobile">
			<div class="container-xxl d-flex flex-column flex-lg-row align-items-start" style="background-color: #002977;">

				<div class="mobile-nav-top pe-0">
					<a href="https://domofon62.ru/">
						<img width="150" height="48" src="https://domofon62.ru/wp-content/uploads/2026/05/logo-header-light.svg" class="custom-logo" alt="Логотип" decoding="async" />
					</a>
					<label class="menu-button" aria-hidden="true" data-bs-toggle="collapse" data-bs-target="#new-main-menu">
						<span class="bread bread-top"><span class="ham ham-top"></span></span>
						<span class="bread bread-bottom"><span class="ham ham-bottom"></span></span>
					</label>
				</div>

				<!-- Раскрывающееся меню -->
				<div class="collapse navbar-collapse w-100" id="new-main-menu">
					<nav class="navbar-nav w-100">
						<?php
                    wp_nav_menu([
                        'theme_location'  => 'new-main-menu',
                        'menu'            => '',
                        'container'       => false,
                        'menu_class'      => 'menu navbar-nav me-auto mb-2 mb-lg-0 justify-content-between',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '
                            <ul id="%1$s" class="%2$s">
                                %3$s
                                <li class="menu-item nav-item d-block d-lg-none header-tel header-tel-one">
                                    <p class="chasy pt-2 fw-bold mb-0 lh-1">Отдел продаж:</p>
                                    <p class="chasy pt-1 m-0">Пн-Пт: c 8-30 до 17-00</p>
                                    <p class="tel-header py-1 mb-0">
                                        <a href="tel:84912202526" class="p-0">8 (4912) 20-25-26</a>
                                    </p>
                                    <a href="tg://resolve?domain=RDK62" class="d-flex align-items-center gap-2 lh-1 mb-2 social-links p-0">
                                        <img src="https://domofon62.ru/wp-content/themes/domoftwo/img/ico/telegram-ico.svg" alt="" width="40px" height="40px">
                                        <p class="chasy fw-bold p-0 m-0">@RDK62</p>
                                    </a>
                                </li>
                                <li class="menu-item nav-item d-block d-lg-none header-tel header-tel-two">
                                    <p class="chasy pt-2 fw-bold mb-0 lh-1">Служба поддержки:</p>
                                    <p class="chasy pt-1 m-0">Пн-Пт: c 8-30 до 17-00</p>
                                    <p class="tel-header py-1 mb-0">
                                        <a href="tel:848912255046" class="p-0">8 (4912) 25-50-46</a>
                                    </p>
                                    <a href="tg://resolve?domain=RDK62bot" class="d-flex align-items-center gap-2 lh-1 mb-2 social-links p-0">
                                        <img src="https://domofon62.ru/wp-content/themes/domoftwo/img/ico/telegram-ico.svg" alt="" width="40px" height="40px">
                                        <p class="chasy fw-bold p-0 m-0">@RDK62bot</p>
                                    </a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#dostupModal" class="mt-2 d-inline-block">
                                        <div class="action-btn">Доступ к услугам</div>
                                    </a>
                                    <a href="https://max.ru/id6234057300_bot" class="d-flex align-items-center gap-2 lh-1 mb-2 social-links p-0 mt-3">
                                        <img src="https://domofon62.ru/wp-content/uploads/2026/05/max-icon.svg" alt="" width="40px" height="40px">
                                        <p class="bot-text" style="text-transform:none;">Доступ к услугам<br> через бот</p>
                                    </a>
                                </li>
								<li class="d-none d-lg-inline-block">
									<a href="#" data-bs-toggle="modal" data-bs-target="#dostupModal">
										<div class="action-btn" style="border-radius: 0;">Доступ к услугам</div>
									</a>
								</li>

								<li class="d-none d-lg-inline-block">
									<a href="https://max.ru/id6234057300_bot" target="_blank" class="d-flex align-items-center gap-2 social-links p-0">
										<img src="https://domofon62.ru/wp-content/uploads/2026/05/max-icon.svg" alt="" width="40px" height="40px">
										<p class="bot-text" style="text-transform: none;">Доступ к услугам<br>через бот</p>
									</a>
								</li>
                            </ul>',
                        'depth'  => 0,
                        'walker' => new My_Walker_Nav_Menu()
                    ]);
                    ?>
					</nav>
				</div>

			</div>
		</nav>

		<!-- Белая полоса под синей — только мобильные -->
		<div class="d-block d-lg-none" style="background-color:#fff;">
			<p class="mb-0 text-logo">Рязанская домофонная компания</p>
		</div>

		<!-- ПК шапка с логотипом и контактами -->
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-xl-5">
					<div class="d-none d-lg-flex align-items-center py-md-3">
						<a href="https://domofon62.ru/">
							<img width="185" height="60" src="https://domofon62.ru/wp-content/uploads/2023/02/logo-header.svg" class="custom-logo" alt="Логотип в шапке" decoding="async" />
						</a>
						<p class="string-ryazan">Рязанская<br>домофонная компания</p>
					</div>
				</div>
				<div class="col-md-6 col-xl-7">
					<div class="d-none d-lg-flex align-items-center justify-content-end" style="column-gap: 25px;">
						<div class="text-md-end">
							<p class="chasy pt-2 fw-bold mb-0 lh-1">Отдел продаж:</p>
							<p class="chasy pt-1 m-0">Пн-Пт: c 8-30 до 17-00</p>
							<p class="tel-header pt-1 mb-0">
								<a href="tel:84912202526">8 (4912) 20-25-26</a>
							</p>
							<a href="tg://resolve?domain=RDK62" target="_blank" class="d-flex justify-content-end align-items-center gap-2 lh-1 mb-2 social-links">
								<img src="https://domofon62.ru/wp-content/themes/domoftwo/img/ico/telegram-ico.svg" alt="">
								<p class="chasy fw-bold p-0 m-0">@RDK62</p>
							</a>
						</div>
						<div class="text-md-end">
							<p class="chasy pt-2 fw-bold mb-0 lh-1">Служба поддержки:</p>
							<p class="chasy pt-1 m-0">Пн-Пт: c 8-30 до 17-00</p>
							<p class="tel-header pt-1 mb-0">
								<a href="tel:84912255046">8 (4912) 25-50-46</a>
							</p>
							<div class="header-social">
								<a href="tg://resolve?domain=RDK62bot" target="_blank" class="d-flex align-items-center gap-2 lh-1 mb-2 social-links">
									<img src="https://domofon62.ru/wp-content/themes/domoftwo/img/ico/telegram-ico.svg" alt="" />
									<p class="chasy fw-bold p-0 m-0">@RDK62bot</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="dostupModal" tabindex="-1" aria-labelledby="dostupModalLabel" aria-hidden="true">
			<div class="popups modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="product-modal-title" id="dostupModalLabel">Для получения доступа к услугам заполните форму:</h2>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="text-center"><?php echo do_shortcode('[contact-form-7 id="373" title="Форма получить доступ"]'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</header>