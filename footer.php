<?php wp_footer(); ?>


<footer id="footer">
	<div class="container">
		<div class="row footer align-items-center">
			<div class="col col-lg-3 d-flex flex-column">
				<a href="<?php echo home_url( '/' ); $footer_logo = get_field('footer_logo', 5); ?>">
					   <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
				</a>
				<p class="string-ryazan-footer mt-2 mb-1">
					<?php $header_desc = get_field('header_desc', 5); 
					echo $header_desc; ?>
				</p>
				<p class="copyright text-start mb-1">ИНН 6234057300</p>
				<p class="copyright text-start">© РДК, <?php echo date("Y"); ?></p>
				<div class="mt-1"><iframe src="https://yandex.ru/sprav/widget/rating-badge/1026973892?type=rating" width="150" height="50" frameborder="0"></iframe></div>
			</div>

			<div class="col-12 col-md-4 col-lg-2">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'domofontwo_footer_menu_pages',
						'depth'           => 1 // 1 = no dropdowns, 2 = with dropdowns.
					) );
				?>
			</div>
  
			<div class="col">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'domofontwo_footer_menu_products',
						'depth'           => 1 // 1 = no dropdowns, 2 = with dropdowns.
					) );
				?>
				<p class="policy"><a href="<?php get_site_url(); ?>/informacziya-dlya-klientov/">Информация для клиентов</a></p>
				<p class="policy"><a href="<?php echo get_template_directory_uri(); ?>/oferta_6234057300.pdf" target="_blank">Публичная оферта</a></p>
				<p class="policy"><a href="<?php get_site_url(); ?>/privacy-policy/">Политика конфиденциальности</a></p>
			</div>

			<div class="col-12 col-md-6 col-lg-3">
				<div class="d-flex flex-column">
					<div class="me-lg-3 mt-3 mt-md-auto">
						<p class="chasy-footer"><?php $header_hours = get_field('header_hours', 5); echo $header_hours; ?></p>
						<p class="tel-footer">
							<a href="tel:+<?php $header_phone = get_field('header_phone', 5); $phone = preg_replace('/\D+/', '', $header_phone); echo $phone; ?>"><?php echo $header_phone; ?></a>
						</p>
					</div>
					<a href="#" data-bs-toggle="modal" data-bs-target="#dostupModal"><div class="action-btn"><?php $header_btn_text = get_field('header_btn_text', 5); echo $header_btn_text; ?></div></a>
				</div>
			</div>
		</div>


		<!-- Order product -->
		<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
			<div class="popups modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
                        <h2 class="product-modal-title" id="productModalLabel">Заказ товара</h2>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<h5 class="text-center product-modal-name"><strong>Наименование продукта:</strong></h5>
						<p id="modalProduct" class="text-center">
							<?php
								/* 
								if ( is_product() == true ) {
									global $product; 
									if ( ! is_a( $product, 'WC_Product' ) ) {
										$product = wc_get_product( get_the_id() );
									}
									echo $product->get_name();
									$product = wc_get_product( get_the_ID() );
									
								} */
							?>
							<script>
								function getName( name ) {
									let productName = name;
									document.getElementById( 'modalProduct' ).innerHTML = name;
									document.getElementById( 'CF' ).value = name;
								}
							</script>
						</p>
						<div class="text-center"><?php echo do_shortcode('[contact-form-7 id="372" title="Форма заказ товара"]'); ?></div>  
					</div>
				</div>
			</div>
		</div>
		<!-- End order product -->

		
		<!-- Service Modal -->
		<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
			<div class="popups modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
                        <h2 class="product-modal-title" id="serviceModalLabel">Заказ услуги</h2>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<h5 class="text-center product-modal-name"><strong>Наименование услуги:</strong></h5>
						<p class="text-center"><?php echo the_title(); ?></p>
						<div class="text-center"><?php echo do_shortcode('[contact-form-7 id="3628" title="Форма заказа услуги"]'); ?></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service Modal -->
	</div>
</footer>


<!-- Messengers button HTML -->
<div class="callback-button-wrapper">
	<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
		<div id="btnIco" class="callback-button-ico"></div>
	</div>
	
	<!--div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
		<a data-bs-toggle="modal" data-bs-target="#callbackModal"><div class="callback-form-button-ico"></div></a>
	</div-->
	<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
		<a href="tel:+74912202526"><div class="callback-phone-button-ico"></div></a>
	</div>
	<!--div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
		<a href="whatsapp://send?phone=+79521236612"><div class="callback-whatsapp-button-ico"></div></a>
	</div-->
	
	<!-- Telegram -->
	<?php if ( get_theme_mod( 'mytheme_telegram' ) ) : ?>
		<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
			<a href="<?php echo get_theme_mod( 'mytheme_telegram' ); ?>"><div class="callback-telegram-button-ico"></div></a>
		</div>
	<?php endif; ?>
</div>
<!-- /Messengers button HTML -->

<!-- Messengers button JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/messengers-button.js"></script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	m[i].l=1*new Date();
	for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(45523608, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
	});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45523608" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!-- Send YM target -->
<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		if ( event.detail.contactFormId == "372" ) { 
			ym(45523608,'reachGoal','form-target');
			console.log('Заказ товара');
		}
		if ( event.detail.contactFormId == "3628" ) { 
			ym(45523608,'reachGoal','form-target');
			console.log('Заказ услуги');
		}
	}, false );
</script>
<!-- End send YM target -->
  
</body>
</html>