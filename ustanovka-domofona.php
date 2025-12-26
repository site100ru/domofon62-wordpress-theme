<?php
	
	/*
		
		Template Name: Установка домофона
		Template Post Type: page
	
	*/
	
	get_header( '4' );
	
	// Новые стили только для новых страниц
	echo "<link rel='stylesheet' href='https://domofon62.ru/wp-content/themes/domoftwo/css/theme.css'>";
	
?>


<header class="light-grey-bg" style="overflow: hidden;">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<div class="pt-3 pb-5">','</div>' );
					}
					$oneu_h1_title = get_field('oneu_h1_title');
					$oneu_h1_under_title = get_field('oneu_h1_under_title'); 
					$oneu_img = get_field('oneu_img');
				?>
				
				<h1 class="oneu-h1-title text-center text-lg-start" style="margin-bottom: 70px;">Установка домофонов и видеодомофонов</h1>
				
				<div class="home-div">
					<div class="home-content">
						<h2 class="h2-title">Домофон в подъезд</h2>
						<p class="p">Домофон позволит уберечь ваш подъезд от «незваных гостей», поможет сохранить его в опрятном виде и повысит безопасность площадок перед лифтом и лестничных маршей.</p>
						<p class="p p-blue">Возможна установка, как обычного аудиодомофона, так и видеодомофона.</p>
						
						<a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal">
							<div class="action-btn action-btn_w100">Заказать</div>
						</a>
					</div>
					<div class="img-div">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-div-bg.jpg" class="home-div-bg d-none d-lg-block">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-div-bg-mobail.jpg" class="home-div-bg d-lg-none">
						<img src="<?php echo get_template_directory_uri(); ?>/img/mother-holding-little-daughter-1.png" class="home-div-img">
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<section class="light-grey-bg py-5">
	<div class="container">
		<div class="row row-2">
			<div class="col">
				<h2 class="h2-title">Виды домофонов</h2>
				<div class="row row-2">
					<div class="col-md-6">
						<div class="card-2">
							<div class="card-body-2">
								<div class="img-div-relative">
									<div class="img-div-absolute">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/image-8.png">
									</div>
								</div>
								<h3 class="h3-title">Аудиодомофон</h3>
								<ul class="ul-2">
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/plus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Бюджетный вариант
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/plus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Простота в установке и использовании
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/minus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Отсутствие функции видеосвязи
										</div>
										<div class="ul-2__li-clear"></div>
										</li>
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/minus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Необходимость прокладки дополнительных кабелей
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card-2">
							<div class="card-body-2">
								<div class="img-div-relative">
									<div class="img-div-absolute">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/image-9.png">
									</div>
								</div>
								<h3 class="h3-title">Видеодомофон</h3>
								<ul class="ul-2">
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/plus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Современный
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/plus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Передает изображение с камеры абонентской панели
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/minus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Ребенок не откроет дверь незнакомому человеку
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/minus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Стоимость выше, чем у аудиодомофона
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="light-grey-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-4">Умный домофон</h2>
				<div class="row">
					<div class="col-md-4 mb-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/card-img-1.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description">Умный домофон - это новая услуга от компании РДК, которая делает проживание в вашем доме более комфортным и безопасным.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/card-img-2.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description">Теперь чтобы зайти в подъезд жильцам не нужно лезть за ключами. "Умный домофон" узнает вас и откроет дверь.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/card-img-3.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description">Когда гость звонит в домофон, звонок поступает в приложение на смартфоне хозяина квартиры. Он видит звонящего через камеру и может принять вызов, и открыть дверь.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/card-img-4.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description">Все звонки в вашу квартиру, как принятые так и пропущенные, можно в дальнейшем просмотреть в приложении в разделе “История вызовов”.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/card-img-5.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description">Домофонные камеры работают и как обычные камеры видеонаблюдения. Они отображаются в приложении вместе с другими камерами, установлеными на доме. Жильцы могут посмотреть через них, что происходит на крыльце и придомовой территории.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="light-grey-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-4">После установки домофона в подъезд вы получаете</h2>
				<div class="block-get mb-4">
					<div class="element-get">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/get-element-ico-1.png" class="mb-4">
						<h3 class="section-subtitle text-light">Всегда чистый подъезд</h3>
					</div>
					<div class="element-get">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/get-element-ico-2.png" class="mb-4">
						<h3 class="section-subtitle text-light">Защиту от нежелательных людей</h3>
					</div>
					<div class="element-get">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/get-element-ico-3.png" class="mb-4">
						<h3 class="section-subtitle text-light">Безопасность вашего дома</h3>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>ООО «Рязанская домофонная компания» была основана в 2004 году, и в течение последних десяти лет компания успешно ведет свою деятельность на территории города Рязани и Рязанской области. Основным направлением деятельности компании является установка домофонов, дополнительно мы также занимаемся установкой видеодомофонов, систем видеонаблюдения, охранных систем и систем контроля управления доступом на объектах различного назначения.</p>
			</div>
		</div>
	</div>
</section>


<section class="section-order-1 light-grey-bg">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="order-1 text-white" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/section-order-1-background-img.jpg);">
					<div class="row">
						<div class="col-lg-5 p-5" style="padding-top: 30px; padding-bottom: 40px;">
							<h2 class="section-title mb-4">Для заказа оставьте заявку</h2>
							<p class="mb-4" style="color: #DAE5FF;">Свяжитесь с нами и мы подробно расскажем Вам, что нужно чтобы установить домофон.</p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal">
								<div class="action-btn action-btn_w100">Оставить заявку</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section-questions light-grey-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-4">Если остались вопросы</h2>
				<div class="accordion" id="accordionExample">
					<div id="accordionItemOne" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="border( 'accordionItemOne' )">
								Как посмотреть кто ко мне пришел?
							</button>
						</h3>
						<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Во кладке "История посещение" находиться видео с вызовом на домофон.
							</div>
						</div>
					</div>
					<div id="accordionItemTwo" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="border( 'accordionItemTwo' )">
								Как оплачивать за домофон?
							</button>
						</h3>
						<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								В квитанции за услуги ЖКХ- "Домофон".
							</div>
						</div>
					</div>
					<div id="accordionItemThree" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" onclick="border( 'accordionItemThree' )">
								Для работы домофона обязательно ли пользоваться интернетом?
							</button>
						</h3>
						<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Интернет нужен только для работы приложения на телефоне (получение вызова на смартфон, открытие двери с телефона).
							</div>
						</div>
					</div>
					<div id="accordionItemFour" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" onclick="border( 'accordionItemFour' )">
								Как звонить на смартфон?
							</button>
						</h3>
						<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Звонок с подъездной двери проходит одновременно на трубку домофона и приложение.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	/*
	let elem = document.getElementById( 'collapseOne' );
	if ( elem.classList.contains( 'show' ) == true ) {
		document.getElementById( 'accordionItemOne' ).style.border = '2px solid #FACC00';
	}*/
	
	
	/* Var 1
	function border( el ) {
		document.getElementById( 'accordionItemOne' ).style.border = 'none';
		document.getElementById( 'accordionItemTwo' ).style.border = 'none';
		document.getElementById( 'accordionItemThree' ).style.border = 'none';
		document.getElementById( 'accordionItemFour' ).style.border = 'none';
		
		let elem = document.getElementById( el );
		
		if ( elem.classList.contains( 'bordered' ) == true ) {
			elem.style.border = 'none';
			elem.classList.remove( 'bordered' );
		} else {
			elem.classList.add( 'bordered' );
			elem.style.border = '2px solid #FACC00';
		}
	} */
	
</script>


<?php get_footer( '2' ); ?>