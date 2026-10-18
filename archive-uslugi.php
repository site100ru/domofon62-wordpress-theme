<?php

	get_header( '4' );

	$img_dir = get_template_directory_uri() . '/img/uslugi/';

	$services = [
		[
			'title'    => 'Умные домофоны',
			'text'     => 'Вызов с домофона приходит прямо на смартфон — где бы вы ни были. Видите гостя, говорите с ним и открываете дверь одним касанием. Доступ можно выдать курьеру или родственникам на время, а все видеозаписи хранятся в облаке.',
			'features' => [ 'Вызов на телефон', 'Запись видеоархива', 'Открытие по лицу' ],
			'price'    => 'от 20 ₽/мес',
			'img'      => 'card-1.webp',
			'icon'     => 'service-icon-1.svg',
			'link'     => home_url( '/uslugi/umny-domofon/' ),
		],
		[
			'title'    => 'Видеонаблюдение c установкой за 0 руб!',
			'text'     => 'Если у вас установлено несколько камер в разных местах (дом, дача, подъезд и др.), их все можно добавить в мобильное приложение «Мой умный дом». А еще для пользователей приложения доступны бесплатные городские камеры на улицах и перекрестках.',
			'features' => [ 'Камеры высокой четкости', 'Запись видеоархива', 'Просмотр со смартфона' ],
			'price'    => 'от 109 ₽/мес',
			'img'      => 'card-2.webp',
			'icon'     => 'service-icon-2.svg',
			'link'     => home_url( '/uslugi/ustanovku-videonablyudeniya/' ),
		],
		[
			'title'    => 'Шлагбаумы и ворота с распознаванием номера авто',
			'text'     => 'Современное решение для контроля въезда транспорта с распознаванием госномеров и управлением через мобильное приложение. Система подключается к любым автоматическим шлагбаумам, воротам и другим заградительным устройствам.',
			'features' => [ 'Автоматическое открытие', 'Распознавание экстренных служб и спец техники', 'Временный доступ для гостей, курьера', 'Управление с телефона' ],
			'price'    => 'от 50 ₽/мес',
			'img'      => 'card-3.webp',
			'icon'     => 'service-icon-3.svg',
			'link'     => home_url( '/uslugi/vorota-i-shlagbaumy/' ),
		],
		[
			'title'    => 'Системы контроля доступа и учета рабочего времени',
			'text'     => 'Системы контроля доступа с функцией учёта рабочего времени позволяют отслеживать приход и уход сотрудников, а также ограничивают доступ посторонних на объект.',
			'features' => [ 'Интеграция с видео наблюдением', 'Учет рабочего времени сотрудников', 'Ограничение доступа посторонним', 'Открытие по коду/карте/лицу' ],
			'price'    => 'от 15 000 ₽',
			'img'      => 'card-4.webp',
			'icon'     => 'service-icon-4.svg',
			'link'     => home_url( '/uslugi/ustanovku-sistem-kontrolya-dostupa-i-ucheta-rabochego-vremeni/' ),
		],
	];

?>

<div class="light-grey-bg srv-page">

	<section class="container">
		<div class="srv-breadcrumbs">
			<?php if ( function_exists( 'kama_breadcrumbs' ) ) kama_breadcrumbs( ' /' ); ?>
		</div>

		<h1 class="srv-h1">Наши услуги</h1>
		<p class="srv-lead">Наши специалисты оказывают квалифицированную помощь в выборе, проектировании и установке домофонов, систем видеонаблюдения, автоматических ворот, шлагбаумов и систем контроля доступа для объектов различного назначения.</p>

		<div class="srv-list">
			<?php foreach ( $services as $service ) : ?>
				<article class="srv-card">
					<a href="<?php echo esc_url( $service['link'] ); ?>" class="srv-card-img">
						<img src="<?php echo esc_url( $img_dir . $service['img'] ); ?>" alt="<?php echo esc_attr( $service['title'] ); ?>" loading="lazy" />
					</a>

					<div class="srv-card-body">
						<div class="srv-card-head">
							<img src="<?php echo esc_url( $img_dir . $service['icon'] ); ?>" alt="" class="srv-card-icon" width="44" height="44" />
							<h2 class="srv-card-title">
								<a href="<?php echo esc_url( $service['link'] ); ?>"><?php echo esc_html( $service['title'] ); ?></a>
							</h2>
						</div>

						<p class="srv-card-text"><?php echo esc_html( $service['text'] ); ?></p>

						<ul class="srv-card-features">
							<?php foreach ( $service['features'] as $feature ) : ?>
								<li><?php echo esc_html( $feature ); ?></li>
							<?php endforeach; ?>
						</ul>

						<div class="srv-card-footer">
							<div class="srv-card-price">Цена: <span><?php echo esc_html( $service['price'] ); ?></span></div>
							<div class="srv-card-btns">
								<a href="#" class="srv-btn srv-btn-fill" data-bs-toggle="modal" data-bs-target="#serviceModal" data-service="<?php echo esc_attr( $service['title'] ); ?>">Задать вопрос</a>
								<a href="<?php echo esc_url( $service['link'] ); ?>" class="srv-btn srv-btn-outline">Узнать подробнее</a>
							</div>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/advantages' ); ?>

	<section class="container">
		<div class="srv-cta">
			<div class="srv-cta-content">
				<h2 class="srv-cta-title">Не знаете с чего начать?</h2>
				<p class="srv-cta-text">Оставьте заявку прямо сейчас! Наши менеджеры свяжутся с Вами и подробно ответят на имеющиеся вопросы.</p>
				<p class="srv-cta-accent">Инициативным людям особые условия!</p>
				<a href="#" class="srv-btn srv-btn-fill srv-cta-btn" data-bs-toggle="modal" data-bs-target="#serviceModal" data-service="Консультация по услугам">Оставить заявку</a>
			</div>
			<div class="srv-cta-img">
				<img src="<?php echo esc_url( $img_dir . 'cta.webp' ); ?>" alt="" loading="lazy" />
			</div>
		</div>
	</section>

</div>

<script>
	// Подставляем название услуги в модалку «Заказ услуги»
	document.addEventListener( 'click', function ( e ) {
		const btn = e.target.closest( '[data-service]' );
		const name = document.getElementById( 'serviceModalName' );
		if ( btn && name ) name.textContent = btn.dataset.service;
	} );
</script>

<?php get_footer( '2' ); ?>
