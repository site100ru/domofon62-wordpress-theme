<?php wp_footer(); ?>


<footer id="footer">
	<div class="container">
		<div class="row footer align-items-start">
			<div class="col col-md-6 col-lg-3 d-flex flex-column">
				<a href="<?php echo home_url( '/' ); $footer_logo = get_field('footer_logo', 5); ?>">
					   <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
				</a>
				<p class="string-ryazan-footer mt-2 mb-1">
					<?php $header_desc = get_field('header_desc', 5); 
					echo $header_desc; ?>
				</p>
				<p class="copyright text-start mb-1">ИНН 6234057300</p>
				<p class="copyright text-start">©РДК, <?php echo date("Y"); ?></p>
				<div class="mt-1"><iframe src="https://yandex.ru/sprav/widget/rating-badge/1026973892?type=rating" width="150" height="50" frameborder="0"></iframe></div>
			</div>

			<div class="col-12 col-md-6 col-lg-3">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'domofontwo_footer_menu_pages',
						'depth'           => 1 // 1 = no dropdowns, 2 = with dropdowns.
					) );
				?>
			</div>
  
			<div class="col col-md-6 col-lg-3">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'domofontwo_footer_menu_products',
						'depth'           => 1 // 1 = no dropdowns, 2 = with dropdowns.
					) );
				?>
			</div>
			
			<div class="col-12 col-md-6 col-lg-3 text-start text-lg-end footer-end">
				<div class="">
					<p class="chasy pt-2 fw-bold mb-0 lh-1">Отдел продаж:</p>
					<p class="chasy pt-1 m-0">Пн-Пт: c 8-30 до 17-00</p>
					<p class="tel-header pt-1 mb-0">
						<a href="tel:84912202526">8 (4912) 20-25-26</a>
					</p>
					<a
					   href="tg://resolve?domain=RDK62"
					   class="d-flex justify-content-start justify-content-lg-end align-items-center gap-2 lh-1 mb-3 social-links"
					   >
						<img
							 src="https://domofon62.ru/wp-content/themes/domoftwo/img/ico/telegram-ico.svg"
							 alt=""
							 class=""
							 />
						<p class="chasy fw-bold p-0 m-0">@RDK62</p>
					</a>
				</div>

				<div class="">
					<p class="chasy pt-2 fw-bold mb-0 lh-1">Служба поддержки:</p>
					<p class="chasy pt-1 m-0">Пн-Пт: c 8-30 до 17-00</p>
					<p class="tel-header pt-1 mb-0">
						<a href="tel:84912255046">8 (4912) 25-50-46</a>
					</p>
					<a
					   href="tg://resolve?domain=RDK62bot"
					   class="d-flex justify-content-start justify-content-lg-end align-items-center gap-2 lh-1 mb-3 social-links"
					   >
						<img
							 src="https://domofon62.ru/wp-content/themes/domoftwo/img/ico/telegram-ico.svg"
							 alt=""
							 class=""
							 />
						<p class="chasy fw-bold p-0 m-0">@RDK62bot</p>
					</a>
				</div>

				<a href="#" data-bs-toggle="modal" data-bs-target="#dostupModal"
				   ><div class="action-btn">Получить доступ</div></a
					>
			</div>

<!-- 			<div class="col-12 col-md-6 col-lg-3">
				<div class="d-flex flex-column">
					<div class="me-lg-3 mt-3 mt-md-auto">
						<p class="chasy-footer"><?php $header_hours = get_field('header_hours', 5); echo $header_hours; ?></p>
						<p class="tel-footer">
							<a href="tel:+<?php $header_phone = get_field('header_phone', 5); $phone = preg_replace('/\D+/', '', $header_phone); echo $phone; ?>"><?php echo $header_phone; ?></a>
						</p>
					</div>
					<a href="#" data-bs-toggle="modal" data-bs-target="#dostupModal"><div class="action-btn"><?php $header_btn_text = get_field('header_btn_text', 5); echo $header_btn_text; ?></div></a>
				</div>
			</div> -->
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
									document.getElementById('modalProduct').innerHTML = name;
									document.getElementById('product-title').value = name; 
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


<!-- Bootstrap Last Version -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<!-- Theme JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>


<!-- Telephone number mask -->
<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
	var telMask = document.getElementsByClassName("telMask");
	var im = new Inputmask("+7(999)999-99-99");
	im.mask(telMask);
</script>


	<!-- Всплывающая форма Политики конфиденциальности -->
		<div class="popup-form py-3" id="popupForm">
			<div class="form-content container">
				<div class="row justify-content-center align-items-center">
					<div class="col-md-9">
						<p class="mb-md-0">
							На на нашем сайте используются cookie-файлы, в том числе сервисов
							веб-аналитики. Используя сайт, вы соглашаетесь на <a
								href="https://domofon62.ru/docs/Consent-to-the-processing-of-personal-data.pdf"
								target="blank"
								>обработку персональных данных</a
							> при помощи cookie-файлов. Подробнее об обработке персональных данных
							вы можете узнать в <a
								href="https://domofon62.ru/docs/Privacy-Policy.pdf"
								target="blank"
								>Политике конфиденциальности.</a
							>
						</p>
					</div>
					<div class="col-md-3 text-md-center">
						<button id="closeBtn" class="btn action-btn">Понятно</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const popupForm = document.getElementById('popupForm');
				const closeBtn = document.getElementById('closeBtn');

				// Проверяем нужно ли показывать форму
				function shouldShowPopup() {
					const lastClosed = localStorage.getItem('popupLastClosed');

					// Если пользователь никогда не закрывал форму
					if (!lastClosed) return true;

					// Если прошло более 1 часа (3600000 миллисекунд) с последнего закрытия
					const now = new Date().getTime();
					return now - parseInt(lastClosed) > 3600000;
				}

				// Показываем форму если нужно
				if (shouldShowPopup()) {
					setTimeout(() => {
						popupForm.classList.add('active');
					}, 3000);
				}

				// Функция закрытия формы
				function closePopup() {
					popupForm.classList.remove('active');

					// Сохраняем время закрытия
					localStorage.setItem('popupLastClosed', new Date().getTime().toString());
				}

				// Закрытие по кнопке
				closeBtn.addEventListener('click', closePopup);
			});
		</script>
		<!-- /Всплывающая форма Политики конфиденциальности -->

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
			console.log('Заказ услуги!');
		}
	}, false );
</script>
<!-- End send YM target -->
  
</body>
</html>