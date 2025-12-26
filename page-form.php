<?php
	
	/**
	 * Template Name: Форма
	 */

	get_header( '4' );
	
 ?>
 
<main class="light-grey-bg">
	<div class="form-on-the-page">
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
</main>

<?php get_footer('2');