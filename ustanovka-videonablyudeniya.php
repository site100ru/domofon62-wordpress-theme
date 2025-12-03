<?php
	
	/*
		
		Template Name: Установка видеонаблюдения
		Template Post Type: page
	
	*/
	
	get_header( '4' );
	
	// Новые стили только для новых страниц
	echo "<link rel='stylesheet' href='https://domofon62.ru/wp-content/themes/domoftwo/css/theme.css'>";
	
?>



<!--header class="light-grey-bg" style="overflow: hidden;">
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
				
				<h1 class="oneu-h1-title text-center text-lg-start" style="margin-bottom: 50px;">Установка автоматических ворот и шлагбаумов</h1>
				
				<div class="home-div-2">
					<div class="home-div-2-content">
						<h2 class="h2-title">Установка ворот во дворе дома</h2>
						<p class="p" style="font-family: 'TT Norms';">Человечество стремится автоматизировать все процессы, происходящие вокруг: начиная от заваривания воды в электрическом чайнике и заканчивая открыванием проезда с пульта дистанционного управления.</p>
						<p class="p p-blue">Возможна установка, как автоматических ворот, так и шлагбаума.</p>
						
						<a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal">
							<div class="action-btn action-btn_w100">Заказать</div>
						</a>
					</div>
					<div class="home-div-2-img-div">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ustanovka-vorot-main-div-bg.jpg" class="home-div-bg d-none d-lg-block">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ustanovka-vorot-main-div-bg.jpg" class="home-div-bg d-lg-none">
					</div>
				</div>
			</div>
		</div>
	</div>
</header-->


<section class="section-home light-grey-bg">
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
				<h1 class="oneu-h1-title text-center text-lg-start" style="margin-bottom: 50px;">Установка видеонаблюдения</h1>
				<div class="row section-home-background-img">
					<div class="col-md-7 section-home-padding">
						<h2 class="h2-title">Наши специалисты осуществят подбор оптимального комплекта системы наблюдения и видеокамер для ваших задач</h2>
						<p class="p" style="max-width: 100%;">Сделают проект по монтажу камер с выгодой для клиента - качественно! Наши мастера могут установить видеонаблюдение в самых сложных условиях, но решение всегда есть! Для расчета и узнать сколько стоит монтаж или система оборудования, нужны данные:</p>
						<ul>
							<li>Где установить оборудование?</li>
							<li>Требуется ли запись звука?</li>
							<li>Сколько хранить архив видео?</li>
							<li>Нужен ли режим день / ночь (ИК подсветка)?</li>
							<li>Какая четкость изображения (1,2,4 пикселя изображение)?</li>
						</ul>
						<p class="p p-blue" style="max-width: 100%;">Если не знаете какие видеокамеры поставить и цену с установкой, то заполняйте форму обратной связи, где можно заказать обратный звонок с профессиональной консультацией!</p>
						<a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal">
							<div class="action-btn action-btn_w100">Заказать</div>
						</a>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/section-home-img-2.png" class="d-md-none img-fluid">
			</div>
		</div>
	</div>
</section>


<section class="light-grey-bg py-5">
	<div class="container">
		<div class="row row-2">
			<div class="col">
				<h2 class="h2-title">Виды видеокамер для наблюдения</h2>
				<div class="row row-2">
					<div class="col-md-6">
						<div class="card-2">
							<div class="card-body-3">
								<div class="img-div-relative">
									<div class="img-div-absolute">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/wi-fi-camery.png">
									</div>
								</div>
								<h3 class="h3-title">WI-FI КАМЕРЫ</h3>
								<p class="p p-blue" style="max-width: 100%; font-family: ">Wi-Fi системы подходят для небольших объектов, с доступом в интернет обязательна. Хранение записи в облаке и на носителе. Просмотр онлайн через приложение.</p>
								<ul class="ul-2">
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/plus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Быстрый монтаж, не нужен регистратор для хранения записей, сохраняет на flash карту, не нужно прокладывать провод сигнала, только питание
										</div>
										<div class="ul-2__li-clear"></div>
										</li>
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/minus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											При подключении более 4 камер возможны задержки, низкая надежность flash карты
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card-2">
							<div class="card-body-3">
								<div class="img-div-relative">
									<div class="img-div-absolute">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/analogovoe-hd.png">
									</div>
								</div>
								<h3 class="h3-title">АНАЛОГОВОЕ HD</h3>
								<p class="p p-blue" style="max-width: 100%;">Аналоговые камеры популярны форматами AHD, HD-TVI. Разрешение до 8MP высокое качество непрерывной записи, могут работать без интернета</p>
								<ul class="ul-2">
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/plus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Возможность заменить устаревшую систему видеонаблюдения без замены проводов
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
									<li>
										<div class="ul-2__li-float-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/minus-circle.png">
										</div>
										<div class="ul-2__li-float-right">
											Чувствительность к помехам
										</div>
										<div class="ul-2__li-clear"></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-12 pt-5 pt-md-4">
						<div class="card card-3 pt-0 mb-3">
							<div class="row text-start g-0">
								<div class="col-md-5">
									<div class="card-3-img">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/ip-videonablyudenie.png" class="img-fluid rounded-start" alt="...">
									</div>
								</div>
								<div class="col-md-7">
									<div class="card-body">
										<h3 class="h3-title">IP ВИДЕОНАБЛЮДЕНИЕ</h3>
										<p class="p p-blue" >IP системы распространенный вид CCTV, имеет высококачественную запись. Современные камеры устанавливаются на улице и в помещении.</p>
										<ul class="ul-2">
											<li>
												<div class="ul-2__li-float-left">
													<img src="<?php echo get_template_directory_uri(); ?>/img/ico/plus-circle.png">
												</div>
												<div class="ul-2__li-float-right">
													Высокая четкость – установка системы видеонаблюдения с мегапиксельной камерой позволяет распознавать лица людей, номера автомобилей, пересчитываемые банкноты.<br>Высокая помехозащищенность – на качество цифрового сигнала не влияют с силовые кабели и удаленность от сервера. Продвинутая аналитика (распознавание лиц, номеров)
												</div>
												<div class="ul-2__li-clear"></div>
											</li>
											<li>
												<div class="ul-2__li-float-left">
													<img src="<?php echo get_template_directory_uri(); ?>/img/ico/minus-circle.png">
												</div>
												<div class="ul-2__li-float-right">
													Стоимость , сложность настройки
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
		</div>
	</div>
</section>


<section class="light-grey-bg pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-4">Преимущества установки видеонаблюдения</h2>
				<div class="block-get mb-4">
					<div class="element-get">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/no-prestupnost.png" class="mb-4">
						<h3 class="section-subtitle text-light">Предупреждение преступности</h3>
					</div>
					<div class="element-get">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/sbor-dokazatelstv.png" class="mb-4">
						<h3 class="section-subtitle text-light">Сбор доказательств</h3>
					</div>
					<div class="element-get">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/dushevnoe-spokoystvie.png" class="mb-4">
						<h3 class="section-subtitle text-light">Душевное спокойствие</h3>
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


<section class="light-grey-bg pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-4">Возможности и удобные функции</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/control.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description text-start"><strong>Контроль</strong> - Системы видеонаблюдения служат для контроля не только за недвижимой собственностью, но и тем, что находится внутри</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/full-hd.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description text-start"><strong>Full HD</strong> - Высококачественная техника дает четкое изображение при любой освещенности</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/remote-access.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description text-start"><strong>Удаленный доступ</strong> и контроль за камерами из любой точки планеты</p>
							</div>
						</div>
					</div>
					<!--div class="col-md-6">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/app.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description"><strong>Приложение</strong> – функционирование как в ручном режиме через запрос на подтверждение от пользователя перед открытием, так в автоматическом режиме, когда доступ открывается при приближении ко въезду.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/artificial-intelligence.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description"><strong>Автоматическое открытие для спец. транспорта с помощью ИИ</strong> –  24/7 въезд открывается автоматически по распознаванию номеров и образов транспорта служб 112</p>
							</div>
						</div>
					</div-->
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section-order-1 light-grey-bg">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="order-2 text-white" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/videonablyudenie-order-img.jpg);">
					<div class="row">
						<div class="col-lg-5 p-5" style="padding-top: 30px; padding-bottom: 40px;">
							<h2 class="section-title mb-4">Для заказа оставьте заявку</h2>
							<p class="mb-4" style="color: #DAE5FF;">Свяжитесь с нами и мы подробно расскажем Вам, что нужно чтобы установить видеонаблюдение</p>
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


<!--section class="section-questions light-grey-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-4">Если остались вопросы</h2>
				<div class="accordion" id="accordionExample">
					<div id="accordionItemOne" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="border( 'accordionItemOne' )">
								Каких фирм автоматика лучше подходит для больших парковок?
							</button>
						</h3>
						<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Однозначно — «Nice». Почему? – Все комплектующие находятся на складах в России и cроки ремонта – минимальные.
							</div>
						</div>
					</div>
					<div id="accordionItemTwo" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="border( 'accordionItemTwo' )">
								Как можно открыть ворота в случае отключения света?
							</button>
						</h3>
						<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								На всех видах автоматики предусмотрена возможность разблокировки привода и использование ворот в ручном режиме. На различных видах автоматики это делается по-разному, но такая возможность предусмотрена у всех.
							</div>
						</div>
					</div>
					<div id="accordionItemThree" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" onclick="border( 'accordionItemThree' )">
								Можно ли управлять разными воротами, разных производителей с одного пульта?
							</button>
						</h3>
						<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Можно. Но если радиоуправление различных производителей , то нужно устонавливать дополнительный приемник одного из производителя на привод второго производителя.
							</div>
						</div>
					</div>
					<div id="accordionItemFour" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" onclick="border( 'accordionItemFour' )">
								Можно ли защитить пульты от копирования?
							</button>
						</h3>
						<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Это можно сделать на автоматике Nice, устанавливается пароль для программирования и копирования.
							</div>
						</div>
					</div>
					
					<div id="accordionItemFour" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" onclick="border( 'accordionItemFour' )">
								Какой радиус действия у пультов ДУ?
							</button>
						</h3>
						<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Радиус действия от 15 метров до 200 метров. Зависит от производителя и "загрязненности" эфира (высоковольтных линий, вышек мобильной связи).
							</div>
						</div>
					</div>
					<div id="accordionItemFour" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" onclick="border( 'accordionItemFour' )">
								Как осуществляется открытие ворот для скорой помощи (аварийных служб) в многоквартирном доме?
							</button>
						</h3>
						<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Вариантов два: 1. Установка системы видеонаблюдения с автоматическим распознаванием спецтранспорта по цветовой раскраске. 2. Диспетчером звонком по номеру телефона.
							</div>
						</div>
					</div>
					<div id="accordionItemFour" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" onclick="border( 'accordionItemFour' )">
								Почему ворота самопроизвольно открываются?
							</button>
						</h3>
						<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Возможные причины: 1. Совпадает радиокод с соседскими воротами (шлагбаумом). 2. Неисправна плата управления,  срабатывание от сигнализации авто (как правило у пультов со статическим кодом).
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section-->

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


<section class="light-grey-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-4">Предлагаем бесплатные услуги</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/free-video-tsj.jpg" class="img-fluid">
							<div class="card-body text-center" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: auto;">
								<p class="card-description mb-3"><strong>БЕСПЛАТНОЕ Видеонаблюдение ТСЖ</strong></p>
								<a href="#">
									<div class="action-btn action-btn_w100">Подробнее</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/free-video-cottag.jpg" class="img-fluid">
							<div class="card-body text-center" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: auto;">
								<p class="card-description mb-3"><strong>БЕСПЛАТНОЕ Видео в коттедж</strong></p>
								<a href="#">
									<div class="action-btn action-btn_w100">Подробнее</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/free-video-shop.jpg" class="img-fluid">
							<div class="card-body text-center" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: auto;">
								<p class="card-description mb-3"><strong>БЕСПЛАТНОЕ Видео в магазин</strong></p>
								<a href="#">
									<div class="action-btn action-btn_w100">Подробнее</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer( '2' ); ?>