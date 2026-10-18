<?php
/**
 * Блок «Наши преимущества»: заголовок, цифры компании и текст о компании.
 *
 * Подключение: get_template_part( 'template-parts/advantages' );
 * Необязательные аргументы:
 *   'title' — заголовок блока,
 *   'text'  — текст под цифрами (пустая строка — не выводить).
 */

$adv_title = $args['title'] ?? 'Наши преимущества';
$adv_text  = $args['text'] ?? 'ООО «Рязанская домофонная компания» основана в 2004 году и уже более двадцати лет успешно работает в Рязани и Рязанской области. Основными направлениями компании являются — установка домофонов, видеонаблюдения, автоматических ворот, шлагбаумов и систем контроля доступа на объектах различного назначения.';

$adv_items = [
	[ 'prefix' => 'Более', 'value' => '20', 'label' => 'лет работы' ],
	[ 'prefix' => 'Более', 'value' => '30000', 'label' => 'абонентов' ],
	[ 'prefix' => 'Более', 'value' => '1000', 'label' => 'клиентов' ],
];
?>

<section class="benefits-section">
	<div class="container">
		<h2 class="benefits-title"><?php echo esc_html( $adv_title ); ?></h2>
	</div>

	<div class="benefits-band">
		<div class="container">
			<div class="row g-0">
				<?php foreach ( $adv_items as $adv_item ) : ?>
				<div class="col-12 col-md-4 benefits-item">
					<span class="benefits-item-prefix"><?php echo esc_html( $adv_item['prefix'] ); ?></span>
					<span class="benefits-item-value"><?php echo esc_html( $adv_item['value'] ); ?></span>
					<span class="benefits-item-label"><?php echo esc_html( $adv_item['label'] ); ?></span>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<?php if ( $adv_text ) : ?>
	<div class="container">
		<p class="benefits-text"><?php echo esc_html( $adv_text ); ?></p>
	</div>
	<?php endif; ?>
</section>
