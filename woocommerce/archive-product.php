<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( '4' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>


<section class="second-section-home">
	<div class="container pb-2">
		<div class="row">
			<div class="col">

				<?php do_action( 'woocommerce_before_main_content' ); ?>

				<h1 class="catalog-goods-h1-second">
					<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<?php woocommerce_page_title(); ?>
					<?php endif; ?>
				</h1>

				<p class="catalog-goods-text-under maxw-849 mb-30">Наши специалисты оказывают квалифицированную помощь в решении вопросов выбора систем видеонаблюдения на объектах различного характера, а также при проектировании.</p>

				<div class="row mb-3 mb-md-5">
					<!--div class="col-md-6">
						<div class="row align-items-center"-->
					<?php
								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								do_action( 'woocommerce_before_shop_loop' );		
							?>
					<!--/div>
					</div-->
				</div>

				<?php if ( is_search() ) { ?>

				<div class="row">
					<div class="col">
						<h2 class="section-subtitle">Товары</h2>
						<hr style="background: rgb(125,125,125);">
						<div class="for-load-more-btn">
							<!--Конец внизу файла archive-product.php - div -->
							<div class="row pb-5 translate-top-products-cat product-cat-row">
								<?php
										if ( woocommerce_product_loop() ) {
											
											woocommerce_product_loop_start();
											
											if ( wc_get_loop_prop( 'total' ) ) {
												
												while ( have_posts() ) {
													the_post();
													/**
													 * Hook: woocommerce_shop_loop.
													 */
													do_action( 'woocommerce_shop_loop' );
													
													wc_get_template_part( 'content', 'product' );
													
												}
											}
											
											woocommerce_product_loop_end();
											
											/**
											 * Hook: woocommerce_after_shop_loop.
											 *
											 * @hooked woocommerce_pagination - 10
											 */
											do_action( 'woocommerce_after_shop_loop' );
										} else {
											/**
											 * Hook: woocommerce_no_products_found.
											 *
											 * @hooked wc_no_products_found - 10
											 */
											do_action( 'woocommerce_no_products_found' );
										}
									?>
							</div>
						</div>
					</div>
				</div>

				<?php } else { ?>

				<div class="row">
					<div class="col">
						<?php
								
								//if ( is_product_category() ) {

									$obj = get_queried_object();
									$parent = isset($obj->term_id) ? $obj->term_id : 0;
									
									$categories = get_categories( [
										'taxonomy'     => 'product_cat',
										'type'         => 'product',
										'child_of'     => 0,
										'parent'       => $parent,
										'orderby'      => 'name',
										'order'        => 'ASC',
										'hide_empty'   => 1,
										'hierarchical' => 1,
										'exclude'      => '',
										'include'      => '',
										'number'       => 0,
										'pad_counts'   => false,
										// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
									] );

									if( $categories != null ) {
										echo '<div class="row mb-3 mb-md-5">';
											echo '<div class="col-12 mb-1">';
												echo '<h2 class="section-subtitle">Категории товаров</h2>';
												echo '<hr style="background: rgb(125,125,125);">';
											echo '</div>';
											foreach( $categories as $cat ) {
												if ( $cat->count > 0 ) { ?>
						<div class="col-6 col-md-3">
							<a href="<?php echo get_category_link( $cat->term_id ); ?>">
								<div class="product-cat-card text-center mb-3">
									<?php
																	woocommerce_subcategory_thumbnail( $cat ); ?>
									<h2 class="woocommerce-loop-category__title">
										<?php echo $cat->name; ?>
										<mark class="count">(<?php echo $cat->count; ?>)</mark>
									</h2>
								</div>
							</a>
						</div>
						<?php }
											}
										echo '</div>';
									}
								//}
								
							?>

						<?php if ( is_product_category() ) { ?>
						<h2 class="section-subtitle">Товары</h2>
						<hr style="background: rgb(125,125,125);">
						<div class="for-load-more-btn">
							<!--Конец внизу файла archive-product.php - div -->
							<div class="row pb-5 translate-top-products-cat product-cat-row">
								<?php
											if ( woocommerce_product_loop() ) {
												
												woocommerce_product_loop_start();
												
												if ( wc_get_loop_prop( 'total' ) ) {
													
													while ( have_posts() ) {
														the_post();
														/**
														 * Hook: woocommerce_shop_loop.
														 */
														do_action( 'woocommerce_shop_loop' );
														
														wc_get_template_part( 'content', 'product' );
														
													}
												}
												
												woocommerce_product_loop_end();
												
												/**
												 * Hook: woocommerce_after_shop_loop.
												 *
												 * @hooked woocommerce_pagination - 10
												 */
												do_action( 'woocommerce_after_shop_loop' );
											} else {
												/**
												 * Hook: woocommerce_no_products_found.
												 *
												 * @hooked wc_no_products_found - 10
												 */
												do_action( 'woocommerce_no_products_found' );
											}
										?>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section><!-- .second-section-home -->


<?php
	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );
	
	get_footer( '2' ); // There were 'shop' here
?>