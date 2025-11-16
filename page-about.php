<?php
	
	/**
	 * Template Name: О компании
	 */

	get_header( '4' );

?>


<div class="light-grey-bg">
    <div class="container pb-5"> 
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div class="pt-3 pb-5">','</div>' );
			}
		?>      
        <h1 class="catalog-goods-h1-second px-4 px-md-2 text-center text-md-start"> 
            <?php the_title(); ?> 
        </h1> 
		<p class="catalog-goods-text-under pt-2 px-4 pb-5 px-md-2 text-center text-md-start">
			<?php echo wp_strip_all_tags( get_the_content() ); ?> 
        </p>
        <div>
			<?php
				$pole_dlya_kontenta = get_field('pole_dlya_kontenta'); 
				echo $pole_dlya_kontenta;
			?>
        </div>
        <?php
			$about_top_first = get_field('about_top_first');
			$about_middle_first = get_field('about_middle_first');
			$about_bottom_first = get_field('about_bottom_first');
        
			$about_top_second = get_field('about_top_second');
			$about_middle_second = get_field('about_middle_second');
			$about_bottom_second = get_field('about_bottom_second');
        
			$about_top_third = get_field('about_top_third');
			$about_middle_third = get_field('about_middle_third');
			$about_bottom_third = get_field('about_bottom_third');
		?>
        
		<section class="mt-5">
			<div class="row">
				<div class="col bg-light-wave height-249 d-flex justify-content-center">
					<div class="d-flex flex-column align-items-center justify-content-center mt-2">
					   <p class="top-text-numbers"><?php echo $about_top_first; ?></p>
					   <p class="middle-numbers"><?php echo $about_middle_first; ?></p>
					   <p class="bottom-text-numbers"><?php echo $about_bottom_first; ?></p>
					</div>
				</div>
				<div class="col-12 col-md-4 bg-light-blue height-249 d-flex justify-content-center">
					<div class="d-flex flex-column align-items-center justify-content-center mt-2">
					   <p class="top-text-numbers"><?php echo $about_top_second; ?></p>
					   <p class="middle-numbers"><?php echo $about_middle_second; ?></p>
					   <p class="bottom-text-numbers"><?php echo $about_bottom_second; ?></p>
					</div>
				</div>
				<div class="col bg-darker-wave height-249 d-flex justify-content-center">
					<div class="d-flex flex-column align-items-center justify-content-center mt-2">
					   <p class="top-text-numbers"><?php echo $about_top_third; ?></p>
					   <p class="middle-numbers"><?php echo $about_middle_third; ?></p>
					   <p class="bottom-text-numbers"><?php echo $about_bottom_third; ?></p>
					</div>
				</div>
			</div>
		</section>

		<section>
		<?php
			$about_varianty_title = get_field('about_varianty_title'); 
			if( !empty( $about_varianty_title ) ): ?>
			<h2 class="oneu-h2-title text-center text-lg-start"><?php echo $about_varianty_title; ?></h2>
			<?php endif; ?> 
			<div class="row justify-content-center">
				<?php
					if( have_rows('about_varianty_loop') ):
						while( have_rows('about_varianty_loop') ) : the_row(); ?>

							<div class="col-12 col-lg-6">
								<?php

									$about_ikonka_varianty_loop = get_sub_field('about_ikonka_varianty_loop');
									$about_varianty_sub_title = get_sub_field('about_varianty_sub_title'); 
									$about_varianty_p = get_sub_field('about_varianty_p');

									if( !empty( $about_ikonka_varianty_loop ) ): ?> 
									<img src="<?php echo esc_url($about_ikonka_varianty_loop['url']); ?>" alt="<?php echo esc_attr($about_ikonka_varianty_loop['alt']); ?>" class="pb-4"/>
									<?php endif; ?> 
  
								<h4 class="varianty-h4 pb-3"><?php echo $about_varianty_sub_title; ?></h4>
								<p class="oneu-p"><?php echo $about_varianty_p; ?></p>
							</div>
						<?php endwhile;
					endif;
				?>
			</div>
		</section>
	</div>
</div>


<!-- VIDEO SECTION -->
<section class="section-video light-grey-bg">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="oneu-h2-title text-center text-lg-start">Наш магазин</h2>
				<div class="row">
					<div class="col">
						<div style="position: relative">
							<video id="video-player" poster="<?php echo get_template_directory_uri(); ?>/img/video-poster-img-new.jpg" playsinline loop>
								<!-- muted="muted" autoplay="autoplay" -->
								<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
								<source  src="<?php echo get_template_directory_uri(); ?>/video/video-2.mp4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
								<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
							</video>

							<div id="play-circle">
                                <div id="play" onclick="play();"></div>
							</div>
							<div id="stop-circle" style="display: none;">
                                <div id="stop" onclick="pause();"></div>
							</div>

                            <script>
                                function play() {
                                    document.getElementById("video-player").play();
                                    document.getElementById("play-circle").style.display = "none";
                                    document.getElementById("stop-circle").style.display = "flex";
                                }

                                function pause() {
                                    document.getElementById("video-player").pause();
                                    document.getElementById("stop-circle").style.display = "none";
                                    document.getElementById("play-circle").style.display = "flex";
                                }
                            </script>

                            <!-- <video 
                                id="video-player" 
                                poster="<?php echo get_template_directory_uri(); ?>/img/video-poster-img.jpg"  
                                playsinline 
                                loop 
                                muted 
                                controls>
                                <source src="<?php echo get_template_directory_uri(); ?>/video/video.mp4" type="video/mp4"/>
                            </video> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END VIDEO SECTION -->


<?php get_footer( '2' ); ?>