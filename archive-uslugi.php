<?php
	
	get_header( '4' );
	
?>


<section class="light-grey-bg">
	<div class="container pb-5">
		<div class="row">
			<div class="col pt-3 pb-5">
				<?php if ( function_exists( 'kama_breadcrumbs' ) ) kama_breadcrumbs( ' /' ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1 class="catalog-goods-h1-second text-center text-md-start">Услуги</h1>
				<p class="catalog-goods-text-under maxw-849 text-center text-md-start">Наши специалисты оказывают квалифицированную помощь в решении вопросов выбора систем видеонаблюдения на объектах различного характера, а также при проектировании.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php
					/* Вывод архива категорий услуг
					$args = [
						'taxonomy'      => [ 'service-cat' ], // название таксономии с WP 4.5
						'orderby'       => 'id',
						'order'         => 'ASC',
						'hide_empty'    => true,
						'object_ids'    => null,
						'include'       => array(),
						'exclude'       => array(),
						'exclude_tree'  => array(),
						'number'        => '',
						'fields'        => 'all',
						'count'         => false,
						'slug'          => '',
						'parent'         => '',
						'hierarchical'  => true,
						'child_of'      => 0,
						'get'           => '', // ставим all чтобы получить все термины
						'name__like'    => '',
						'pad_counts'    => false,
						'offset'        => '',
						'search'        => '',
						'cache_domain'  => 'core',
						'name'          => '',    // str/arr поле name для получения термина по нему. C 4.2.
						'childless'     => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
						'update_term_meta_cache' => true, // подгружать метаданные в кэш
						'meta_query'    => '',
					];

					$terms = get_terms( $args );

					foreach( $terms as $term ){
						//print_r( $term );
						echo '<a href="' . get_term_link( $term->term_id, $taxonomy = 'service-cat' ) . '"><h3>' . $term->name . '</h3></a>';
						echo '<img src="' . get_term_meta( $term->term_id, 'thumbnail_url', 1 ) . '">';
						echo term_description( $term->term_id );
					} */
				?>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3 serv-height" style="background-image: url('https://domofon62.ru/wp-content/uploads/2023/02/dom-servse.jpg');">
				<div class="serv-content">
					<img src="https://domofon62.ru/wp-content/uploads/2023/02/intercom-1.svg" alt="Установка домофонов" class="ps-3 pb-2" />
					<a href="https://domofon62.ru/uslugi-cat/domofony/">
						<div class="serv-title ps-3 pe-3 mb-3">Установка домофонов и видеодомофонов</div>
					</a> 
					<div class="ps-3">
						<a href="https://domofon62.ru/uslugi-cat/domofony/" class="serv-page-btn">Узнать подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 serv-height" style="background-image: url('https://domofon62.ru/wp-content/uploads/2023/02/vid-servse.jpg');">
				<div class="serv-content">
					<img src="https://domofon62.ru/wp-content/uploads/2023/02/cctv-1.svg" alt="Монтаж видеонаблюдения в Рязани" class="ps-3 pb-2" />
					<a href="https://domofon62.ru/uslugi-cat/videonablyudenie/">
						<div class="serv-title ps-3 pe-3 mb-3"><br class="d-none d-md-block">Установка видеонаблюдения</div>
					</a> 
					<div class="ps-3">
						<a href="https://domofon62.ru/uslugi-cat/videonablyudenie/" class="serv-page-btn">Узнать подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 serv-height" style="background-image: url('https://domofon62.ru/wp-content/uploads/2023/02/fence-servse.jpg');">
				<div class="serv-content">
					<img src="https://domofon62.ru/wp-content/uploads/2023/02/automatic-doors-1.svg" alt="Установка автоматических ворот" class="ps-3 pb-2" />
					<a href="https://domofon62.ru/uslugi/vorota-i-shlagbaumy/">
						<div class="serv-title ps-3 pe-3 mb-3">Установка автоматических ворот и шлагбаумов</div>
					</a> 
					<div class="ps-3">
						<a href="https://domofon62.ru/uslugi/vorota-i-shlagbaumy/" class="serv-page-btn">Узнать подробнее</a>
					</div>
				</div>
			</div> 
			<div class="col-12 col-md-6 col-lg-3 serv-height" style="background-image: url('https://domofon62.ru/wp-content/uploads/2023/02/skd-servse.jpg');">
				<div class="serv-content">
					<img src="https://domofon62.ru/wp-content/uploads/2023/02/nfc-card-1.svg" alt="Установка СКД" class="ps-3 pb-2" />
					<a href="https://domofon62.ru/uslugi-cat/skud/">
						<div class="serv-title ps-3 pe-3 mb-3">Установка систем контроля доступа и учета рабочего времени.</div>
					</a> 
					<div class="ps-3">
						<a href="https://domofon62.ru/uslugi-cat/skud/" class="serv-page-btn">Узнать подробнее</a>
					</div>
				</div>
			</div>  
		</div>
	</div>
</section>


<?php get_footer( '2' ); ?>