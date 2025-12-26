<?php
	
	/**
	 * Template Name: Одна услуга
	 */

	get_header( '4' );

?>
<section class="light-grey-bg"> 
<div class="container pb-5">
<?php
 
     if ( function_exists('yoast_breadcrumb') ) {
 
     yoast_breadcrumb( '<div class="pt-3 pb-5">','</div>' );
 
     }
     $oneu_h1_title = get_field('oneu_h1_title');
     $oneu_h1_under_title = get_field('oneu_h1_under_title'); 
     $oneu_img = get_field('oneu_img');
     ?> 

<div class="row justify-content-center align-items-center justify-content-lg-between"> 
<div class="col-12 col-md-6">
    <h1 class="oneu-h1-title text-center text-lg-start"><?php echo $oneu_h1_title; ?></h1>
    <p class="oneu-p text-center text-lg-start"><?php echo $oneu_h1_under_title; ?></p>
</div>
<div class="col-12 col-md-6 d-flex justify-content-center">
<?php if( !empty( $oneu_img ) ): ?> 
            <img src="<?php echo esc_url($oneu_img['url']); ?>" alt="<?php echo esc_attr($oneu_img['alt']); ?>" class="img-fluid"/>

          <?php endif; ?> 
</div>
</div>
<?php $glavnye_otlichiya_title = get_field('glavnye_otlichiya_title');  ?>
<?php if( !empty( $glavnye_otlichiya_title ) ): ?> 
<h2 class="oneu-h2-title text-center text-lg-start"><?php echo $glavnye_otlichiya_title; ?> </h2>
<?php endif; ?> 
<div class="row justify-content-center">
<?php

$punkty_otlichiya = get_field('punkty_otlichiya'); 

if( have_rows('punkty_otlichiya') ):

   
    while( have_rows('punkty_otlichiya') ) : the_row(); ?>

  <div class="col-6 col-lg-3">
   <?php

    $ikonka_one_usluga = get_sub_field('ikonka_one_usluga'); 
    $glavnie_otlichiya_text = get_sub_field('glavnie_otlichiya_text');

          if( !empty( $ikonka_one_usluga ) ): ?> 
            <img src="<?php echo esc_url($ikonka_one_usluga['url']); ?>" alt="<?php echo esc_attr($ikonka_one_usluga['alt']); ?>" class="pb-2"/>

          <?php endif; ?> 
          
          <p class="oneu-p"><?php echo $glavnie_otlichiya_text; ?></p>
          </div>
     <?php
    endwhile;
  
endif; 

?>
</div>


<?php $oneu_blue_area_h3 = get_field('oneu_blue_area_h3');
$oneu_blue_area_p = get_field('oneu_blue_area_p');
$oneu_blue_area_btn_link = get_field('oneu_blue_area_btn_link');
$oneu_blue_area_btn_text = get_field('oneu_blue_area_btn_text');  
if( !empty( $oneu_blue_area_h3 ) ): ?> 
<div class="row justify-content-center align-items-center justify-content-md-between secondary-light-bg domofon-radius-5 p-lg-5 p-4 mt-5">
<div class="col-12 col-lg-8 text-center text-lg-start">
  <h3 class="oneu-h3-title"><?php echo $oneu_blue_area_h3; ?></h3>
  <p class="oneu-p-under-h3"><?php echo $oneu_blue_area_p; ?></p>
</div>
<div class="col-12 col-lg-4 d-flex justify-content-center justify-content-lg-end"><a href="<?php echo esc_url($oneu_blue_area_btn_link); ?>" class="oneu-blue-area-btn" data-bs-toggle="modal" data-bs-target="#product2Modal"><?php echo $oneu_blue_area_btn_text; ?></a></div>
</div>
<?php endif; ?> 



<?php $oneu_schet_title = get_field('oneu_schet_title');
$oneu_schet_p = get_field('oneu_schet_p');   
if( !empty( $oneu_schet_title ) ): ?> 
<h2 class="oneu-h2-title_scheta text-center text-lg-start"><?php echo $oneu_schet_title; ?> </h2>
<?php endif; ?> 
<?php if( !empty( $oneu_schet_p ) ): ?> 
<p class="oneu-p text-center text-lg-start"><?php echo $oneu_schet_p; ?></p>
<?php endif; ?> 
<div class="row justify-content-center pt-3">
<?php

$punkty_scheta = get_field('punkty_scheta'); 

if( have_rows('punkty_scheta') ):

   
    while( have_rows('punkty_scheta') ) : the_row(); ?>

  <div class="col-6 col-lg-3">
   <?php

    $cifra_scheta = get_sub_field('cifra_scheta'); 
    $text_scheta = get_sub_field('text_scheta');

    ?>
           <p class="cifra-scheta"><?php echo $cifra_scheta; ?></p>
          
          <p class="oneu-p"><?php echo $text_scheta; ?></p>
          </div>
     <?php
    endwhile;
  
endif; 

?>
</div>


<?php $oneu_white_area_h3 = get_field('oneu_white_area_h3');
$oneu_white_area_p = get_field('oneu_white_area_p');
$oneu_white_area_btn_link = get_field('oneu_white_area_btn_link');
$oneu_white_area_btn_text = get_field('oneu_white_area_btn_text');  
if( !empty( $oneu_white_area_h3 ) ): ?> 
<div class="row justify-content-center align-items-center justify-content-md-between domofon-radius-5 shadow-for-whitebg p-lg-5 p-4 mt-5">
<div class="col-12 col-lg-8 text-center text-lg-start">
  <h3 class="oneu-h3-title-white"><?php echo $oneu_white_area_h3; ?></h3>
  <p class="oneu-p-under-h3-white"><?php echo $oneu_white_area_p; ?></p>
</div>
<div class="col-12 col-lg-4 d-flex justify-content-center justify-content-lg-end"><a href="<?php echo esc_url($oneu_white_area_btn_link); ?>" class="oneu-white-area-btn" data-bs-toggle="modal" data-bs-target="#product2Modal"><?php echo $oneu_white_area_btn_text; ?></a></div>
</div>
<?php endif; ?> 


<?php $varianty_title = get_field('varianty_title'); 

if( !empty( $varianty_title ) ): ?>
<h2 class="oneu-h2-title text-center text-lg-start"><?php echo $varianty_title; ?> </h2>
<?php endif; ?> 
<div class="row justify-content-center">
<?php


if( have_rows('varianty_loop') ):

   
    while( have_rows('varianty_loop') ) : the_row(); ?>

  <div class="col-12 col-lg-6">
   <?php
    
    $ikonka_varianty_loop = get_sub_field('ikonka_varianty_loop');
    $varianty_sub_title = get_sub_field('varianty_sub_title'); 
    $varianty_p = get_sub_field('varianty_p');

     
           if( !empty( $ikonka_varianty_loop ) ): ?> 
            <img src="<?php echo esc_url($ikonka_varianty_loop['url']); ?>" alt="<?php echo esc_attr($ikonka_varianty_loop['alt']); ?>" class="pb-4"/>

          <?php endif; ?> 
          
          <h4 class="varianty-h4 pb-3"><?php echo $varianty_sub_title; ?></h4>
          <p class="oneu-p"><?php echo $varianty_p; ?></p>
          </div>
     <?php
    endwhile;
  
endif; 

?>
</div>

</div>
</section>

<!-- Modal 1 -->

<div class="modal fade" id="product2Modal" tabindex="-1" aria-labelledby="product2ModalLabel" aria-hidden="true">
  <div class="popups modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="product-modal-title" id="product2ModalLabel">Заказ товара</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="text-center product-modal-name"><strong>Наименование продукта:</strong></h5>
        <p class="text-center">
      <?php  echo get_the_title( get_the_ID() ); ?>
       </p>
      <div class="text-center"><?php echo do_shortcode('[contact-form-7 id="372" title="Форма заказ товара"]'); ?></div>  
      </div>
    
    </div>
  </div>
</div>

<?php get_footer( '2' ); ?>