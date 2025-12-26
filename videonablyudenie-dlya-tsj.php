<?php
	
	/*
		
		Template Name: Видеонаблюдение для ТСЖ
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
				<h1 class="oneu-h1-title text-center text-lg-start" style="margin-bottom: 50px;">Видеонаблюдение для ТСЖ и УК</h1>
				<div class="row section-home-background-img-3">
					<div class="col-md-7 section-home-padding">
						<h2 class="h2-title">Видеонаблюдение в многоквартирных домах бесплатно</h2>
						<p class="p" style="max-width: 100%;">Услуга «аренда системы видеонаблюдения». Больше нет необходимости в приобретении дорогостоящей аппаратуры, оплате сервисного обслуживания, постоянном обновлении оборудования. Все это мы возьмем на себя, а вы получаете  Онлайн доступ 24/7 для собственников.</p>
						<p class="p p-blue" style="max-width: 100%;">Наше оборудование - наша ответственность....</p>
						
						<!--a href="https://cloud.dvor24.com/login" data-bs-toggle="modal1" data-bs-target="#serviceModal1">
							<div class="action-btn action-btn_w100">Заказать</div>
						</a-->
						
						<form action="https://cloud.dvor24.com/login" method="post" target="_blank">
							<input type="hidden" name="login" value="RYA_2_N_888">
							<input type="hidden" name="password" value="1111">
							<button type="submit" class="action-btn action-btn_w100">Попробовать</button>
						</form>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/section-home-img-3.jpg" class="d-md-none img-fluid">
			</div>
		</div>
	</div>
</section>


<section class="light-grey-bg pt-5">
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


<section class="light-grey-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-0">Возможности и удобные функции</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/free-video-tsj.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description"><strong>Компания устанавливает оборудование</strong> видеонаблюдения за свой счет, жильцы платят 99 руб за доступ</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/personal-access.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description">Жители ЖК получают <strong>персональный доступ</strong> к камерам</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/control.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description"><strong>Контроль</strong> - Системы видеонаблюдения служат для контроля не только за недвижимой собственностью, но и тем, что находится внутри подъездов и лифтов</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/full-hd-long.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description"><strong>Full HD</strong> - Высококачественная техника дает четкое изображение при любой освещенности</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/remote-access-long.jpg" class="img-fluid">
							<div class="card-body">
								<p class="card-description"><strong>Удаленный доступ</strong> и контроль за камерами из любой точки планеты</p>
							</div>
						</div>
					</div>
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


<section class="section-questions light-grey-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-4">Если остались вопросы</h2>
				<div class="accordion" id="accordionExample">
					<div id="accordionItemOne" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="border( 'accordionItemOne' )">
								Что нужно для установки видеонаблюдения в доме?
							</button>
						</h3>
						<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Видеонаблюдение устанавливается на основании решения общего собрания, требуется не менее 51% голосов "ЗА".
							</div>
						</div>
					</div>
					<div id="accordionItemTwo" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="border( 'accordionItemTwo' )">
								Кто может получить доступ к камерам?
							</button>
						</h3>
						<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Доступ выдается только жильцам на основании документа подтверждающего право собственности.
							</div>
						</div>
					</div>
					<div id="accordionItemThree" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" onclick="border( 'accordionItemThree' )">	Как происходит оплата?
							</button>
						</h3>
						<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								В квитанции по оплате коммунальных платежей появляется строчка "Видеонаблюдение"
							</div>
						</div>
					</div>
					<div id="accordionItemFour" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" onclick="border( 'accordionItemFour' )">
								Сколько хранятся записи с камер?
							</button>
						</h3>
						<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Архив составляет минимум 10 дней
							</div>
						</div>
					</div>
					
					<div id="accordionItemFive" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" onclick="border( 'accordionItemFive' )">
								Если камеры сломают, кто будет оплачивать ремонт?
							</button>
						</h3>
						<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Всё оплачивает наша компания, дополнительных средств не требуется.
							</div>
						</div>
					</div>
					<div id="accordionItemSix" class="accordion-item">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" onclick="border( 'accordionItemSix' )">
								Можно ли с приложения "Видеонаблюдение" открывать ворота?
							</button>
						</h3>
						<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Да, это возможно.
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


<section class="light-grey-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="section-title mb-0">Как мы работаем</h2>
				<div class="row">
					
					<div class="col-md-4">
						<div class="card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/service-process-img.jpg" class="img-fluid">
							<div class="card-img-overlay" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: 220px;">
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<div class="card-body" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: 220px; position: relative;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/stage-01.png" style="position: absolute; top: 0; right: 0;">
								<div>
									<div style="float: left; width: 50px;">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-mail-ico.png">
									</div>
									<div style="float: right; width: calc(100% - 50px); position: relative;">
										<h3 class="service-card-header">Заявка на подключение</h3>
									</div>
									<div style="clear: both;"></div>
								</div>
								<p class="card-description text-start mt-3">Пройдите регистрацию на сайте и укажите необходимые параметры вашего дома</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<div class="card-body" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: 220px; position: relative;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-stage-02.png" style="position: absolute; top: 0; right: 0;">
								<div>
									<div style="float: left; width: 50px;">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-project-videonablyudeniya.png">
									</div>
									<div style="float: right; width: calc(100% - 50px); position: relative;">
										<h3 class="service-card-header">Проект видеонаблюдения</h3>
									</div>
									<div style="clear: both;"></div>
								</div>
								<p class="card-description text-start mt-3">Представитель нашей компании в вашем городе свяжется с вами, осмотрит объект и подготовит проект по вашим требованиям</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<div class="card-body" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: 220px; position: relative;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-stage-03.png" style="position: absolute; top: 0; right: 0;">
								<div>
									<div style="float: left; width: 50px;">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-soglasovanie.png">
									</div>
									<div style="float: right; width: calc(100% - 50px); position: relative;">
										<h3 class="service-card-header">Согласование с жителями</h3>
									</div>
									<div style="clear: both;"></div>
								</div>
								<p class="card-description text-start mt-3">Компания своими силами организует общедомовое собрание и проведение голосования по вопросам видеонаблюдения</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<div class="card-body" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: 220px; position: relative;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-stage-04.png" style="position: absolute; top: 0; right: 0;">
								<div>
									<div style="float: left; width: 50px;">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-installation.png">
									</div>
									<div style="float: right; width: calc(100% - 50px); position: relative;">
										<h3 class="service-card-header">Бесплатная установка</h3>
									</div>
									<div style="clear: both;"></div>
								</div>
								<p class="card-description text-start mt-3">Компания за свой счет устанавливает систему видеонаблюдения и подключает к облачному сервису Мой Двор</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<div class="card-body" style="padding-left: 20px; padding-right: 20px; padding-bottom: 30px; min-height: 220px; position: relative;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-stage-05.png" style="position: absolute; top: 0; right: 0;">
								<div>
									<div style="float: left; width: 50px;">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/service-payments.png">
									</div>
									<div style="float: right; width: calc(100% - 50px); position: relative;">
										<h3 class="service-card-header">Оплата услуги</h3>
									</div>
									<div style="clear: both;"></div>
								</div>
								<p class="card-description text-start mt-3">После установки системы жителям начисляется ежемесячная абонентская плата за услугу видеонаблюдения</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer( '2' ); ?>