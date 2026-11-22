<?php

/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (! function_exists('wc_get_gallery_image_html')) {
    return;
}

global $product;

$columns           = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
    'woocommerce_single_product_image_gallery_classes',
    array(
        'woocommerce-product-gallery',
        'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
        'woocommerce-product-gallery--columns-' . absint($columns),
        'images',
    )
);
?>
<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>" data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
    <figure class="woocommerce-product-gallery__wrapper">
        <?php
        if ($post_thumbnail_id) {
            $html = wc_get_gallery_image_html($post_thumbnail_id, true);
        } else {
            $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
            $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
            $html .= '</div>';
        }

        echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

        do_action('woocommerce_product_thumbnails');
        ?>
    </figure>
</div>

<!-- Modal Gallery for Product Images -->
<div id="productGalleryModal" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0px; left: 0; height: 100%; width: 100%; z-index: 9999; background-color: rgba(0, 0, 0, 0.95);">
    <!-- Close Button -->
    <button type="button" class="btn-close btn-close-white" id="closeGalleryModal" aria-label="Закрыть" style="position: absolute; top: 20px; right: 20px; z-index: 10000; opacity: 0.8;"></button>

    <!-- Carousel Indicators -->
    <div class="carousel-indicators" id="galleryIndicators">
        <!-- Indicators will be inserted here dynamically -->
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner h-100" id="galleryCarouselInner">
        <!-- Images will be inserted here dynamically -->
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#productGalleryModal" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productGalleryModal" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>
</div>

<script>
    jQuery(document).ready(function($) {
        // Собираем ВСЕ изображения из галереи WooCommerce (включая главное)
        var galleryImages = [];

        $('.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image').each(function(index) {
            var $link = $(this).find('a');
            var imgSrc = $link.attr('href');
            var imgAlt = $(this).find('img').attr('alt') || 'Изображение товара';

            if (imgSrc) {
                galleryImages.push({
                    src: imgSrc,
                    alt: imgAlt,
                    index: index
                });
            }
        });

        // Функция для создания галереи
        function createGallery(startIndex) {
            var modal = $('#productGalleryModal');
            var indicatorsHtml = '';
            var carouselHtml = '';

            // Создаем индикаторы и слайды
            galleryImages.forEach(function(img, index) {
                var activeClass = index === startIndex ? 'active' : '';
                var ariaCurrent = index === startIndex ? 'aria-current="true"' : '';

                // Индикатор (только если больше одного изображения)
                if (galleryImages.length > 1) {
                    indicatorsHtml += `
					<button type="button" data-bs-target="#productGalleryModal" data-bs-slide-to="${index}" aria-label="Slide ${index + 1}" class="${activeClass}" ${ariaCurrent}></button>
				`;
                }

                // Слайд
                carouselHtml += `
				<div class="carousel-item h-100 ${activeClass}" data-bs-interval="999999999">
					<div class="row align-items-center h-100">
						<div class="col text-center">
							<img data-gallery-index="${index}" class="img-fluid" style="max-width: 75vw; max-height: 75vh;">
						</div>
					</div>
				</div>
			`;
            });

            // Вставляем HTML
            $('#galleryIndicators').html(indicatorsHtml);
            $('#galleryCarouselInner').html(carouselHtml);
            // src/alt ставим через attr: в HTML-коде страницы не должно быть src="${…}" — роботы и браузер принимают его за адрес картинки
            $('#galleryCarouselInner img[data-gallery-index]').each(function() {
                var img = galleryImages[ $(this).data('gallery-index') ];
                $(this).attr({ src: img.src, alt: img.alt || '' });
            });

            // Показываем/скрываем стрелки и индикаторы в зависимости от количества изображений
            if (galleryImages.length > 1) {
                $('#productGalleryModal .carousel-control-prev, #productGalleryModal .carousel-control-next').show();
                $('#galleryIndicators').show();
            } else {
                $('#productGalleryModal .carousel-control-prev, #productGalleryModal .carousel-control-next').hide();
                $('#galleryIndicators').hide();
            }

            // Инициализируем carousel
            var carouselElement = document.getElementById('productGalleryModal');
            var carousel = new bootstrap.Carousel(carouselElement, {
                interval: false,
                wrap: true,
                keyboard: galleryImages.length > 1 // Клавиатура только если есть несколько изображений
            });

            // Переключаем на нужный слайд
            carousel.to(startIndex);
        }

        // Функция открытия галереи
        function openGallery(startIndex) {
            createGallery(startIndex);
            $('#productGalleryModal').fadeIn(300);
            $('body').css('overflow', 'hidden'); // Блокируем прокрутку страницы
        }

        // Функция закрытия галереи
        function closeGallery() {
            $('#productGalleryModal').fadeOut(300);
            $('body').css('overflow', ''); // Возвращаем прокрутку страницы
        }

        // Клик по ЛЮБОМУ изображению в галерее товара (включая главное)
        $('.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a').on('click', function(e) {
            e.preventDefault();
            var clickedIndex = $(this).closest('.woocommerce-product-gallery__image').index();
            openGallery(clickedIndex);
        });

        // Закрытие по кнопке
        $('#closeGalleryModal').on('click', function() {
            closeGallery();
        });

        // Закрытие по клику вне изображения
        $('#productGalleryModal').on('click', function(e) {
            if ($(e.target).is('#productGalleryModal') || $(e.target).closest('.row').length) {
                if (!$(e.target).is('img') && !$(e.target).closest('.carousel-control-prev, .carousel-control-next, .carousel-indicators').length) {
                    closeGallery();
                }
            }
        });

        // Закрытие по ESC
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && $('#productGalleryModal').is(':visible')) {
                closeGallery();
            }
        });
    });
</script>