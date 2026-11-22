<?php
	
	/**
	 * Template Name: Тип записи Объекты
	 */

	get_header( '4' );

?>


<div class="light-grey-bg">
	<div class="container">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div class="pt-3 pb-5">','</div>' );
			}
		 ?>      
	
		<h1 class="catalog-goods-h1-second px-4 px-md-2 text-center text-md-start">
			<?php the_title(); ?>
		</h1>
		<p class="catalog-goods-text-under maxw-849 pt-2 px-4 pb-5 px-md-2 text-center text-md-start">
			<?php echo wp_strip_all_tags( get_the_content() ); ?>
		</p>
   
		<section class="image-grid">
			<div class="row gy-4 pb-5 justify-content-center">

				<?php
					if( have_rows('gallery_loop') ):
						while( have_rows('gallery_loop') ) : the_row();
							$img_gallery_loop = get_sub_field('img_gallery_loop');
							$img_data_caption = get_sub_field('img_data_caption'); ?>

							<div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
								<figure>
									<a class="d-block" href="<?php echo esc_url( $img_gallery_loop['url'] ); ?>" onClick="galleryOn('gal-<?php echo get_the_ID(); ?>', 'img-<?php echo get_the_ID(); ?>-<?php echo $img_gallery_loop['id']; ?>');">
										<?php  
											if( !empty( $img_gallery_loop ) ): ?> 
												<img width="1920" height="1280" src="<?php echo esc_url($img_gallery_loop['url']); ?>" alt="<?php echo esc_attr($img_gallery_loop['alt']); ?>" class="img-fluid" data-caption="<?php echo $img_data_caption; ?>" />
											<?php endif;
										?> 
									</a>
								</figure>
							</div>
						<?php endwhile;
					endif; 
				?>
				
			</div>
		</section>
	</div>
</div>


<div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
			<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body">
				<div class="container-fluid p-0">
					<!-- JS content here -->
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Gallery -->
<div id="galleryWrapper" style="background: rgba(0, 0, 0, 0.85); display: none; position: fixed; inset: 0px; z-index: 9999;">
	
	<div id="gallery-<?php echo get_the_ID(); ?>" class="carousel slide pointer-event" data-bs-ride="carousel" style="display: block; position: fixed; top: 0px; height: 100%; width: 100%;">
		
		<div class="carousel-indicators">	
			<?php
				$count = 0;
				if( have_rows('gallery_loop') ):
					while( have_rows('gallery_loop') ) : the_row();
						$img_gallery_loop = get_sub_field('img_gallery_loop');
						$img_data_caption = get_sub_field('img_data_caption'); ?>

						<button id="ind-<?php echo get_the_ID(); ?>-<?php echo $img_gallery_loop['id'];?>" type="button" data-bs-target="#gallery-<?php echo get_the_ID(); ?>" data-bs-slide-to="<?php echo $count; ?>" aria-label="Slide <?php echo $count; ?>"></button>
					
					<?php $count++; endwhile;
				endif; 
			?>
		</div>
		<div class="carousel-inner h-100">
			<?php
				$count = 0;
				if( have_rows('gallery_loop') ):
					while( have_rows('gallery_loop') ) : the_row();
						$img_gallery_loop = get_sub_field('img_gallery_loop');
						$img_data_caption = get_sub_field('img_data_caption'); ?>

						<div id="img-<?php echo get_the_ID(); ?>-<?php echo $img_gallery_loop['id'];?>" class="carousel-item h-100" data-bs-interval="999999999">
							<div class="row align-items-center h-100">
								<div class="col text-center">
									<img src="<?php echo esc_url($img_gallery_loop['url']); ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="<?php echo esc_attr($img_gallery_loop['alt']); ?>" data-caption="<?php echo $img_data_caption; ?>" />
								</div>
							</div>
						</div>
					
					<?php $count++; endwhile;
				endif; 
			?>			
		</div>
		
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo get_the_ID(); ?>" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo get_the_ID(); ?>" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
		

	<!-- Кнопка закрытия галереи -->
	<button type="button" onclick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div><!-- /#galleryWrapper-->


<script>
	/* Функция открытия галереи */
	function galleryOn(gal, img) {
		var gallery = gal; // Получаем ID галереи
		var image = img; // Получаем ID картинки
		
		// Открываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'block';
		
		// Открываем галерею
		if ( gallery == "gal-<?php echo get_the_ID(); ?>" ) { document.getElementById("gallery-<?php echo get_the_ID(); ?>").style.display = "block"; }
		
		// Открываем изображения и индикаторы галереи
		<?php
			$count = 0;
			if( have_rows('gallery_loop') ):
				while( have_rows('gallery_loop') ) : the_row();
					$img_gallery_loop = get_sub_field('img_gallery_loop');
					$img_data_caption = get_sub_field('img_data_caption'); ?>
						if ( image == "img-<?php echo get_the_ID(); ?>-<?php echo $img_gallery_loop['id'];?>" ) {
							document.getElementById("img-<?php echo get_the_ID(); ?>-<?php echo $img_gallery_loop['id'];?>").classList.add("active");
							document.getElementById("ind-<?php echo get_the_ID(); ?>-<?php echo $img_gallery_loop['id'];?>").classList.add("active");
						}
				<?php $count++; endwhile;
			endif; 
		?>
	} // End galleryOn
	

	// Кнопка закрытия галереи
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'none';
		
		// Закрываем галерею
		document.getElementById("gallery-<?php echo get_the_ID(); ?>").style.display = "none";
		
		// Закрываем изображения и индикаторы галереи
		<?php
			$count = 0;
			if( have_rows('gallery_loop') ):
				while( have_rows('gallery_loop') ) : the_row();
					$img_gallery_loop = get_sub_field('img_gallery_loop');
					$img_data_caption = get_sub_field('img_data_caption'); ?>
						
					document.getElementById("img-<?php echo get_the_ID(); ?>-<?php echo $img_gallery_loop['id'];?>").classList.remove("active");
					document.getElementById("ind-<?php echo get_the_ID(); ?>-<?php echo $img_gallery_loop['id'];?>").classList.remove("active");
						
				<?php $count++; endwhile;
			endif; 
		?>
	}
</script>


<?php get_footer( '2' ); ?>