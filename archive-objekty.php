<?php
/*

Template Name: Архив Объектов
  
 */

get_header( '4' );

?>


<section>
<div class="light-grey-bg">
    <div class="container pb-5"> 
    <?php

    if ( function_exists('yoast_breadcrumb') ) {

    yoast_breadcrumb( '<div class="pt-3 pb-5">','</div>' );

    }

    ?>      

      <h1 class="catalog-goods-h1-second px-4 px-md-2 text-center text-md-start">Наши объекты </h1>

      <p class="catalog-goods-text-under maxw-849 pt-2 px-4 px-md-2 text-center text-md-start">Наши специалисты оказывают квалифицированную помощь в решении вопросов выбора систем видеонаблюдения на объектах различного характера, а также при проектировании.</p>
     
      <div class="mt-5">

	 	<?php  $loop = new WP_Query(array('post_type' => 'objekty', 'orderby' => 'date', 'order' => 'DESC', 'nopaging' => 'true')); ?>
                 <?php   while($loop->have_posts()) : $loop->the_post(); ?>               
                 
          <div class="padding-row row justify-content-center justify-content-lg-evenly align-items-center p-2 mt-4 bg-white">
          
            <div class="col-12 col-md-6 col-lg-4 obj-thumbnail text-center">

        <?php if(has_post_thumbnail()): 
        $bgtnl = get_the_post_thumbnail_url(get_the_ID(),'full');
        $thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true );
        $img_alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );  ?> 
       <img src="<?php echo esc_url($bgtnl); ?>" alt="<?php echo $img_alt; ?>" class="img-fluid"/>
       <?php endif; ?> 
       </div> 
                 <div class="col-12 col-md-6 col-lg-8 ps-0 ps-sm-5">
                 <a href="<?php the_permalink(); ?>">
                 <div class="obj-title pb-2 pt-4 pt-md-0"><?php the_title(); ?></div>
                 </a> 
                 <div class="pt-2"><?php the_content(); ?></div>
                 <div class="pt-3"><a href="<?php the_permalink(); ?>" class="oneu-white-area-btn mb-3">Смотреть фото</a></div>
                 </div>
            
        </div>
        <?php  endwhile;
                     
          wp_reset_query(); ?>
       
            
                              
				</div>
        </div> 
        </div>       
	 </section>



<?php
get_footer( '2' );