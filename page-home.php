<?php
	
	/**
	 * Template Name: Главная
	 */

	get_header( '4' ); // There were '2' here

	$img_pervogo_slajda = get_field('img_pervogo_slajda');
	$title_pervogo_slajda = get_field('title_pervogo_slajda');
	$tekst_pervogo_slajda = get_field('tekst_pervogo_slajda');
	$link_pervogo_slajda  = get_field('link_pervogo_slajda');
	$text_btn_pervogo_slajda = get_field('text_btn_pervogo_slajda');


	$img_vtorogo_slajda = get_field('img_vtorogo_slajda');
	$title_vtorogo_slajda = get_field('title_vtorogo_slajda');
	$tekst_vtorogo_slajda = get_field('tekst_vtorogo_slajda');
	$link_vtorogo_slajda  = get_field('link_vtorogo_slajda');
	$text_btn_vtorogo_slajda = get_field('text_btn_vtorogo_slajda');


	$img_tretyego_slajda = get_field('img_tretyego_slajda');
	$title_tretyego_slajda = get_field('title_tretyego_slajda');
	$tekst_tretyego_slajda = get_field('tekst_tretyego_slajda');
	$link_tretyego_slajda  = get_field('link_tretyego_slajda');
	$text_btn_tretyego_slajda = get_field('text_btn_tretyego_slajda');


	$img_chetvertogo_slajda = get_field('img_chetvertogo_slajda');
	$title_chetvertogo_slajda = get_field('title_chetvertogo_slajda');
	$tekst_chetvertogo_slajda = get_field('tekst_chetvertogo_slajda');
	$link_chetvertogo_slajda  = get_field('link_chetvertogo_slajda');
	$text_btn_chetvertogo_slajda = get_field('text_btn_chetvertogo_slajda');


	$img_mobile_slajda = get_field('img_mobile_slajda');


	$title_catalog = get_field('title_catalog');
	$text_cataloga = get_field('text_cataloga');


	$home_top_first = get_field('home_top_first');
	$home_middle_first = get_field('home_middle_first');
	$home_bottom_first = get_field('home_bottom_first');
				
	$home_top_second = get_field('home_top_second');
	$home_middle_second = get_field('home_middle_second');
	$home_bottom_second = get_field('home_bottom_second');
				
	$home_top_third = get_field('home_top_third');
	$home_middle_third = get_field('home_middle_third');
	$home_bottom_third = get_field('home_bottom_third');


	$title_company = get_field('title_company');
	$desc_company = get_field('desc_company');
	$link_btn_company = get_field('link_btn_company');
	$text_btn_company = get_field('text_btn_company');



	$img_icon_usl_first = get_field('img_icon_usl_first');
	$text_usl_first = get_field('text_usl_first');
	$img_icon_usl_second = get_field('img_icon_usl_second');
	$text_usl_second = get_field('text_usl_second');
	$img_icon_usl_third = get_field('img_icon_usl_third');
	$text_usl_third = get_field('text_usl_third');
	$img_icon_usl_fourth = get_field('img_icon_usl_fourth');
	$text_usl_fourth = get_field('text_usl_fourth');

?>

<script>
  // Переключатель изображений под меню на главной

  jQuery(document).ready(function($){

		if ($(window).width() > 992) {

			function bgLoading() {
				$('#services-home').css({'background-image': 'url(<?php echo esc_url($img_pervogo_slajda['url']); ?>), url(<?php echo esc_url($img_vtorogo_slajda['url']); ?>), url(<?php echo esc_url($img_tretyego_slajda['url']); ?>), url(<?php echo esc_url($img_chetvertogo_slajda['url']); ?>)'});
			}
			window.onload = bgLoading();

			$('#card-intercome').on('click', function() {
			  let descr = document.querySelector('#card-wrapper-home');
			  descr.style.opacity = 0;
			  $('#services-home').css('background-image', 'url(<?php echo esc_url($img_pervogo_slajda['url']); ?>)');
			  $('#card-nfc').css('background-color', 'rgba(255, 255, 255, 0.2)');
			  $('#card-cctv').css('background-color', 'rgba(255, 255, 255, 0.2)');
			  $('#card-doors').css('background-color', 'rgba(255, 255, 255, 0.2)');
			  $( this ).css('background-color', '#216DFF');
			   

			  setTimeout(function(){ 
				

			  descr.innerHTML = '<h2 class="h2-service"><?php echo $title_pervogo_slajda; ?></h2> <p class="text-under-h2"><?php echo $tekst_pervogo_slajda; ?></p><div class="d-flex justify-content-center justify-content-md-start"><a href="<?php echo esc_url($link_pervogo_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_pervogo_slajda; ?></a></div>';
			  
			  
				descr.style.opacity = 1;
			  },500);

			});

			$('#card-nfc').on('click', function() {
			  let descr2 = document.querySelector('#card-wrapper-home');
			  descr2.style.opacity = 0;

			  $('#services-home').css('background-image', 'url(<?php echo esc_url($img_vtorogo_slajda['url']); ?>)');
			  $('#card-intercome').css('background-color', 'rgba(255, 255, 255, 0.2)');
			  $('#card-cctv').css('background-color', 'rgba(255, 255, 255, 0.2)');
			  $('#card-doors').css('background-color', 'rgba(255, 255, 255, 0.2)');
			  $( this ).css('background-color', '#216DFF');
			  
			  setTimeout(function(){

			  descr2.innerHTML = '<h2 class="h2-service"><?php echo $title_vtorogo_slajda; ?></h2> <p class="text-under-h2"><?php echo $tekst_vtorogo_slajda; ?></p><div class="d-flex justify-content-center justify-content-md-start"><a href="<?php echo esc_url($link_vtorogo_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_vtorogo_slajda; ?></a></div>';

			   
				descr2.style.opacity = 1;
			  },500);
			});

$('#card-cctv').on('click', function() {
  let descr3 = document.querySelector('#card-wrapper-home');
  descr3.style.opacity = 0;

  $('#services-home').css('background-image', 'url(<?php echo esc_url($img_tretyego_slajda['url']); ?>)');
  $('#card-intercome').css('background-color', 'rgba(255, 255, 255, 0.2)');
  $('#card-nfc').css('background-color', 'rgba(255, 255, 255, 0.2)');
  $('#card-doors').css('background-color', 'rgba(255, 255, 255, 0.2)');
  $( this ).css('background-color', '#216DFF');

  setTimeout(function(){ 

    descr3.innerHTML = '<h2 class="h2-service"><?php echo $title_tretyego_slajda; ?></h2> <p class="text-under-h2"><?php echo $tekst_tretyego_slajda; ?></p><div class="d-flex justify-content-center justify-content-md-start"><a href="<?php echo esc_url($link_tretyego_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_tretyego_slajda; ?></a></div>';
    
    
      descr3.style.opacity = 1;
    },500);
});

$('#card-doors').on('click', function() {
  let descr4 = document.querySelector('#card-wrapper-home');
  descr4.style.opacity = 0;

  $('#services-home').css('background-image', 'url(<?php echo esc_url($img_chetvertogo_slajda['url']); ?>)');
  $('#card-intercome').css('background-color', 'rgba(255, 255, 255, 0.2)');
  $('#card-nfc').css('background-color', 'rgba(255, 255, 255, 0.2)');
  $('#card-cctv').css('background-color', 'rgba(255, 255, 255, 0.2)');
  $( this ).css('background-color', '#216DFF');

  setTimeout(function(){ 

    descr4.innerHTML = '<h2 class="h2-service"><?php echo $title_chetvertogo_slajda; ?></h2> <p class="text-under-h2"><?php echo $tekst_chetvertogo_slajda; ?></p><div class="d-flex justify-content-center justify-content-md-start"><a href="<?php echo esc_url($link_chetvertogo_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_chetvertogo_slajda; ?></a></div>';
    
    
      descr4.style.opacity = 1;
    },500);
});

} else {

  function bgLoading() {
    $('#services-home').css({'background-color': '#002977', 'background-image': 'linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php echo esc_url($img_mobile_slajda['url']); ?>)'});
  }
  window.onload = bgLoading();
  
    $('#card-intercome').on('click', function() {
    let descr = document.querySelector('#card-wrapper-home');
    descr.style.opacity = 0;
    
    $('#card-nfc').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $('#card-cctv').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $('#card-doors').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $( this ).css('background-color', '#216DFF');
  
    setTimeout(function(){ 
  
    descr.innerHTML = '<h2 class="h2-service text-center text-md-start"><?php echo $title_pervogo_slajda; ?></h2> <p class="text-under-h2 text-center text-md-start"><?php echo $tekst_pervogo_slajda; ?></p><div class="d-flex justify-content-center justify-content-md-start"><a href="<?php echo esc_url($link_pervogo_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_pervogo_slajda; ?></a></div>';
    
    
      descr.style.opacity = 1;
    },500);
  
  });
  
  $('#card-nfc').on('click', function() {
    let descr2 = document.querySelector('#card-wrapper-home');
    descr2.style.opacity = 0;
  
    
    $('#card-intercome').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $('#card-cctv').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $('#card-doors').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $( this ).css('background-color', '#216DFF');
    
    setTimeout(function(){
  
    descr2.innerHTML = '<h2 class="h2-service text-center text-md-start"><?php echo $title_vtorogo_slajda; ?></h2> <p class="text-under-h2 text-center text-md-start"><?php echo $tekst_vtorogo_slajda; ?></p><div class="d-flex justify-content-center justify-content-md-start"><a href="<?php echo esc_url($link_vtorogo_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_vtorogo_slajda; ?></a></div>';
  
     
      descr2.style.opacity = 1;
    },500);
  });
  
  $('#card-cctv').on('click', function() {
    let descr3 = document.querySelector('#card-wrapper-home');
    descr3.style.opacity = 0;
  
    
    $('#card-intercome').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $('#card-nfc').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $('#card-doors').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $( this ).css('background-color', '#216DFF');
  
    setTimeout(function(){ 
  
      descr3.innerHTML = '<h2 class="h2-service text-center text-md-start"><?php echo $title_tretyego_slajda; ?></h2> <p class="text-under-h2 text-center text-md-start"><?php echo $tekst_tretyego_slajda; ?></p><div class="d-flex justify-content-center justify-content-md-start"><a href="<?php echo esc_url($link_tretyego_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_tretyego_slajda; ?></a></div>';
      
      
        descr3.style.opacity = 1;
      },500);
  });
  
  $('#card-doors').on('click', function() {
    let descr4 = document.querySelector('#card-wrapper-home');
    descr4.style.opacity = 0;
  
   
    $('#card-intercome').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $('#card-nfc').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $('#card-cctv').css('background-color', 'rgba(255, 255, 255, 0.2)');
    $( this ).css('background-color', '#216DFF');
  
    setTimeout(function(){ 
  
      descr4.innerHTML = '<h2 class="h2-service text-center text-md-start"><?php echo $title_chetvertogo_slajda; ?></h2> <p class="text-under-h2 text-center text-md-start"><?php echo $tekst_chetvertogo_slajda; ?></p><div class="d-flex justify-content-center justify-content-md-start"><a href="<?php echo esc_url($link_chetvertogo_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_chetvertogo_slajda; ?></a></div>';
      
      
        descr4.style.opacity = 1;
      },500);
  });
}

});
</script>


<section id="services-home" class="d-flex justify-content-center" style="left: 0px; background-repeat: no-repeat; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; transition: background-image 0.5s ease-out; -webkit-transition: background-image 0.5s ease-out; -moz-transition: background-image 0.5s ease-out; -ms-transition: background-image 0.5s ease-out; -o-transition: background-image 0.5s ease-out; -webkit-backface-visibility: hidden; -moz-backface-visibility: hidden; -ms-backface-visibility: hidden; z-index: 1;">
        
    <div class="container pt-5 pb-4 py-md-4">
        <div class="row d-flex align-items-center">
        
			<div id="card-wrapper-home" class="col-12 col-md-6 px-4 px-md-2">
				<h2 class="h2-service text-center text-md-start"><?php echo $title_pervogo_slajda; ?></h2>
				<p class="text-under-h2 text-center text-md-start"><?php echo $tekst_pervogo_slajda; ?></p>
				<div class="d-flex justify-content-center justify-content-md-start">
					<a href="<?php echo esc_url($link_pervogo_slajda); ?>" class="action-btn mb-4 mb-md-0"><?php echo $text_btn_pervogo_slajda; ?></a>
				</div>
			</div>
         
			<div class="col-12 offset-md-1 col-md-5 d-flex justify-content-center justify-content-md-end translate-end">
				<div class="row">
					<div class="col-6">
						<div id="card-intercome" class="services-first-card d-flex flex-column m-3 align-items-center justify-content-around">
							<img src="<?php echo esc_url($img_icon_usl_first['url']); ?>" alt="<?php echo esc_attr($img_icon_usl_first['alt']); ?>" class="img-fluid py-2"/>  
							<p><?php echo $text_usl_first; ?></p>
						</div>
					</div>
					<div class="col-6">
						<div id="card-nfc" class="services-card d-flex flex-column m-3 align-items-center justify-content-around">
							<img src="<?php echo esc_url($img_icon_usl_second['url']); ?>" alt="<?php echo esc_attr($img_icon_usl_second['alt']); ?>" class="img-fluid py-2"/>  
							<p><?php echo $text_usl_second; ?></p>
						</div>
					</div>
					<div class="col-6">
						<div id="card-cctv" class="services-card d-flex flex-column m-3 align-items-center justify-content-around">
							<img src="<?php echo esc_url($img_icon_usl_third['url']); ?>" alt="<?php echo esc_attr($img_icon_usl_third['alt']); ?>" class="img-fluid py-2"/>  
							<p><?php echo $text_usl_third; ?></p>
						</div>
					</div>
					<div class="col-6">	
						<div id="card-doors" class="services-card d-flex flex-column m-3 align-items-center justify-content-around">
							<img src="<?php echo esc_url($img_icon_usl_fourth['url']); ?>" alt="<?php echo esc_attr($img_icon_usl_fourth['alt']); ?>" class="img-fluid py-2"/>  
							<p><?php echo $text_usl_fourth; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>


<section class="second-section-home">
    <div class="container pb-2 pb-md-5">
		<div class="row">
			<div class="col happy-ny-container" style="padding-top: 80px;">
				<div class="bg-white rounded" style="overflow: hidden;">
					<div class="row">
						<div class="col-md-8 order-md-2">
							<div class="row justify-content-center align-items-center h-100">
								<div class="col-md-10">
									<div class="px-3 px-md-0 py-5 py-md-0">
										<h3 class="mb-4">Уважаемые абоненты, поздравляем вас с&nbsp;Новым годом!</h3>
										<p class="mb-0">Обратите внимание на график работы в праздничные дни: заявки будут приниматься <span>4 и 8 января</span>, а выполнение — <span>5 и 9 января.</span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 order-md-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/happy-ny-section-img.jpg" class="w-100 rouned">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				
				<h1 class="catalog-goods-h1 text-center text-md-start"><?php echo $title_catalog; ?></h1>
				
				<div class="row">
					<div class="col">
						<!--p class="catalog-goods-text-under maxw-849 mb-30 col-12 col-md-8 col-lg-9 text-center 	text-md-start"><?php echo $text_cataloga; ?></p-->
						<p class="catalog-goods-text-under maxw-849 mb-30"><?php echo $text_cataloga; ?></p>
					</div>
				</div>
				
			   
				<?php
							
					//if ( is_product_category() ) {
					//$obj = get_queried_object();
					//$parent = $obj->term_id;
					
					$categories = get_categories( [
						'taxonomy'     => 'product_cat',
						'type'         => 'product',
						//'child_of'     => 0,
						'parent'       => 0,
						'orderby'      => 'name',
						'order'        => 'ASC',
						//'hide_empty'   => 1,
						//'hierarchical' => 1,
						'exclude'      => '',
						'include'      => '',
						'number'       => 0,
						'pad_counts'   => false,
						// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
					] );

					if( $categories != null ) {
						echo '<div class="row mb-3 mb-md-5">';
							//echo '<div class="col-12 mb-1">';
								//echo '<h2 class="section-subtitle">Категории товаров</h2>';
								//echo '<hr style="background: rgb(125,125,125);">';
							//echo '</div>';
							foreach( $categories as $cat ) {
								if ( $cat->count > 0 ) { ?>
									<div class="col-6 col-md-3 mb-3">
										<a href="<?php echo get_category_link( $cat->term_id ); ?>">
											<div class="product-cat-card text-center">
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
				
				
				
				
				<!--div class="row">
					<div class="col-md-3">
						<div class="d-flex justify-content-center d-md-block"> 
							<div class="category-carousel-home">
								<?php /*
									$taxonomy     = 'product_cat';
									$orderby      = 'name';
									$show_count   = 0;      // 1 for yes, 0 for no
									$pad_counts   = 0;      // 1 for yes, 0 for no
									$hierarchical = 1;      // 1 for yes, 0 for no
									$title        = '';
									$empty        = 1;
									$args = array(
										'taxonomy'     => $taxonomy,
										'orderby'      => $orderby,
										'show_count'   => $show_count,
										'pad_counts'   => $pad_counts,
										'hierarchical' => $hierarchical,
										'title_li'     => $title,
										'hide_empty'   => $empty
									);
									$all_categories = get_categories( $args );
									foreach ( $all_categories as $cat ) {
										if( $cat->category_parent == 0 ) {
											$category_id = $cat->term_id;
											echo '<a class="category-carousel-home-item" href="'. get_term_link( $cat->slug, 'product_cat' ) .'">'. $cat->name .'</a>';
										}
									}
								?>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="row translate-top-products product-cat-row"><!-- translate-top-products --
							<?php 
								$home_category = get_field( 'home_category' );
								$product_categories = array( $home_category );
								// Setup your custom query
								$args = array( 'post_type' => 'product',
									'tax_query' => array( array(
										'taxonomy' => 'product_cat',
										'field'    => 'slug',
										'terms'    => $product_categories,
										'operator' => 'IN',
									) ) 
								); // Swap to Product
								$loop = new WP_Query( $args );
					 
								while ( $loop->have_posts() ) : $loop->the_post(); ?>
								
								<div class="col-md-4">
									<a href="<?php echo get_permalink(); ?>">
										<div class="card mb-3">
											<div class="row gx-3">
												<div class="col-4 col-md-12 mb-0 mb-md-3">
													<?php the_post_thumbnail('medium'); ?>
												</div>
												<div class="col-8 col-md-12">
													<p class="product-price-title"><?php echo get_the_title() ?></p>
													<?php $product = wc_get_product( get_the_ID() ); ?>
													<div class="row align-items-center">
														<div class="col-6 col-md-12">
															<p class="product-price mb-0 mb-md-3"><?php echo $product->get_price(); ?> руб</p>
														</div>
														<div class="col-6 col-md-12">
															<object>
																<a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#productModal" onclick="getName( '<?php echo $product->name; ?>' );">Заказать</a>
															</object>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							<?php 
								endwhile; 
								wp_reset_query();  */
							?>
						</div>
						<div class="row translate-top-products">
							<div class="col pt-md-4 pb-3 pb-md-4">
								<a href="<?php $shop_page_url = get_permalink( wc_get_page_id( 'shop' ) ); echo $shop_page_url; ?>" class="all-catalog-btn mb-4 mt-1 mb-md-0 mt-md-0" style="margin: auto;">Весь каталог</a>
							</div>
						</div>
					</div>
				</div><!-- /.row -->
				
			</div>
		</div>
    </div>
</section>
    
	
<section>
	<div class="container-fluid">
        <div class="row">
			<div class="col bg-light-wave height-249 d-flex justify-content-center justify-content-lg-end">
				<div class="d-flex flex-column align-items-center justify-content-center mr-rem-6 mt-2">
					<p class="top-text-numbers"><?php echo $home_top_first; ?></p>
					<p class="middle-numbers"><?php echo $home_middle_first; ?></p>
					<p class="bottom-text-numbers"><?php echo $home_bottom_first; ?></p>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-3 bg-light-blue height-249 d-flex justify-content-center">
				<div class="d-flex flex-column align-items-center justify-content-center mt-2">
					<p class="top-text-numbers"><?php echo $home_top_second; ?></p>
					<p class="middle-numbers"><?php echo $home_middle_second; ?></p>
					<p class="bottom-text-numbers"><?php echo $home_bottom_second; ?></p>
				</div>
			</div>
			<div class="col bg-darker-wave height-249 d-flex justify-content-center justify-content-lg-start">
				<div class="d-flex flex-column align-items-center justify-content-center ml-rem-6 mt-2">
					<p class="top-text-numbers"><?php echo $home_top_third; ?></p>
					<p class="middle-numbers"><?php echo $home_middle_third; ?></p>
					<p class="bottom-text-numbers"><?php echo $home_bottom_third; ?></p>
				</div>
			</div>
        </div>
	</div>
</section>


<!-- About company -->
<section>
    <div class="container">
		<div class="d-flex justify-content-center justify-content-lg-start mb-64">
			<div>
				<h2 class="catalog-goods-h1 px-4 px-md-2 text-center text-md-start"><?php echo $title_company; ?> </h2>
				<p class="catalog-goods-text-under mb-4 px-4 px-md-2 text-center text-md-start"><?php echo $desc_company; ?></p>
				<div class="d-flex justify-content-center justify-content-lg-start"><a href="<?php echo esc_url($link_btn_company); ?>" class="home-more-btn"><?php echo $text_btn_company; ?></a></div>
			</div>
		</div>
    </div>
</section>
<!-- /About company -->


<!-- Testimonials -->
<section class="section-testimonials">
	<div class="container">
		<div class="row">
			<div class="col align-items-center">
				<h2 class="mb-0 text-center text-md-start">Отзывы о нас в независимых источниках</h2>

				<div class="row justify-content-center text-center text-md-start" style="padding-top: 65px;">
					<div class="offset-md-2 col-md-3 mb-5 mb-md-0">
						<p class="mb-3"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/yandex-logo.svg" alt="Yandex"></p>
						<p class="mb-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars-yandex.svg" alt="Рейтинг РДК в Яндекс">
							<span style="position: relative; top: 3px; margin-left: 10px;">4,9 из 5</span>
						</p>
						<p class="mb-0"><a href="https://yandex.ru/profile/1026973892" class="text-decoration-underline" target="blank">Читать...</a></p>
					</div>
					<div class="offset-md-2 col-md-3">
						<p class="mb-3"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/2gis-logo.svg" alt="Рейтинг РДК в 2Gis"></p>
						<p class="mb-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars-2gis.svg" alt="Stars">
							<span style="position: relative; top: 3px; margin-left: 10px;">4,2 из 5</span>
						</p>
						<p class="mb-0"><a href="https://2gis.ru/ryazan/firm/6192977768630020/tab/reviews" class="text-decoration-underline" target="blank">Читать...</a></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- /Testimonials -->


<?php get_footer( '2' ); ?>