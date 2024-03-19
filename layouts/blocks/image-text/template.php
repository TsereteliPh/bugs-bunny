<?php
	$direction = get_sub_field( 'direction' );
	$title = get_sub_field( 'title' );
	$text = get_sub_field( 'text' );
	$img = get_sub_field( 'img' );

	$content_class = 'glass image-text__content';
	if ( $img ) {
		$content_class .= ' image-text__content--' . $direction;
	} else {
		$content_class .= ' image-text__content--no-image';
	}
?>
<section id="image-text" class="image-text">
	<div class="container image-text__container">
		<div class="<?php echo $content_class; ?>">
			<?php if ( $title ) : ?>
				<h2 class="image-text__title"><?php echo $title; ?></h2>
			<?php endif; ?>

			<div class="image-text__text"><?php echo $text; ?></div>

			<button class="btn image-text__button js-book" type="button">Забронировать</button>
		</div>

		<?php
			if ( $img ) {
				echo wp_get_attachment_image( $img, 'full', false, array(
					'class' => 'image-text__img image-text__img--' . $direction
				) );
			}
		?>
	</div>
</section>
