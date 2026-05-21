<?php
	
	/**
	 * Template Name: Форма
	 */

	get_header( '4' );
	
 ?>

<main class="light-grey-bg form-page">
	<div class="form-on-the-page">
		<div class="popups modal-dialog modal-dialog-centered">
			<div class="modal-content px-3">
				<div class="modal-header">
					<h2 class="product-modal-title" id="dostupModalLabel">Получить доступ к услугам:</h2>
				</div>
				<div class="modal-body pt-0">
					<p class="dostup-subtitle">Для получения доступа к услугам воспользуйтесь ботом или заполните форму:</p>
					<div class="text-center"><?php echo do_shortcode('[contact-form-7 id="373" title="Форма получить доступ"]'); ?></div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer('2');