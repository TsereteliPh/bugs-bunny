<?php
	$address = get_field( 'address', 'options' );
	$tel = get_field( 'tel', 'options' );
	$email = get_field( 'email', 'options' );
	$opening_hours = get_field( 'opening_hours', 'options' );
	$map = get_field( 'map', 'options' );
?>
<section class="contacts">
	<div class="container contacts__container">
		<div class="contacts__content">
			<div class="contacts__info">
				<h2 class="contacts__title">Контактная информация</h2>

				<?php if ( $address ) : ?>
					<address class="contacts__address"><?php echo $address; ?></address>
				<?php endif; ?>

				<?php if ( $tel ) : ?>
					<div class="contacts__text">
						Телефон:
						<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="contacts__tel"><?php echo $tel; ?></a>
					</div>
				<?php endif; ?>

				<?php if ( $email ) : ?>
					<div class="contacts__text">
						Email:
						<a href="mailto:<?php echo $email; ?>" class="contacts__email"><?php echo $email; ?></a>
					</div>
				<?php endif; ?>
			</div>

			<?php if ( $opening_hours ) : ?>
				<div class="contacts__hours">
					<h2 class="contacts__title">Режим работы</h2>

					<div class="contacts__hours-text"><?php echo $opening_hours; ?></div>
				</div>
			<?php endif; ?>
		</div>

		<?php if ( $map ) : ?>
			<div id="map" class="contacts__map"></div>
		<?php endif; ?>
	</div>

	<?php if ( $map ) : ?>
		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
		<script>
			document.addEventListener("DOMContentLoaded", function (e) {
				function init(){
					<?php $map = json_decode( $map, true ); ?>
					const map = new ymaps.Map('map', {
						center: [<?php echo $map['center_lat'] ?>,<?php echo $map['center_lng'] ?>],
						zoom: <?php echo $map['zoom']; ?>
					});

					<?php foreach ( $map['marks'] as $mark ) : ?>
						map.geoObjects.add(
							new ymaps.Placemark([<?php echo $mark['coords'][0]; ?>, <?php echo $mark['coords'][1]; ?>], {
									balloonContent: '<?php echo $mark['content']; ?>'
								},
								// {
								// 	iconLayout: 'default#image',
								// 	iconImageHref: '<?php //echo get_template_directory_uri(); ?>/assets/images/icon-marker.svg',
								// 	iconImageSize: [54, 60],
								// 	iconImageOffset: [-27, -60]
								// })
							)
						);
					<?php endforeach; ?>

					map.controls.remove('geolocationControl'); // удаляем геолокацию
					map.controls.remove('searchControl'); // удаляем поиск
					map.controls.remove('trafficControl'); // удаляем контроль трафика
					map.controls.remove('typeSelector'); // удаляем тип
					map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
					// map.controls.remove('zoomControl'); // удаляем контрол зуммирования
					map.controls.remove('rulerControl'); // удаляем контрол правил
					map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
				}

				ymaps.ready(init);
			});
		</script>
	<?php endif; ?>
</section>
