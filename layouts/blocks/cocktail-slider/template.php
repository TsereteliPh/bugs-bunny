<section class="cocktail-slider">
	<div class="container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title ) :
				?>

				<h2 class="cocktail-slider__title">
					<?php echo $title['text']; ?>
					<span><?php echo $title['highlighted']; ?></span>
				</h2>

				<?php
			endif;
		?>

		<?php
			$gallery = get_sub_field( 'gallery' );
			if ( $gallery ) :
				?>

				<div class="cocktail-slider__slider swiper">
					<div class="cocktail-slider__gallery swiper-wrapper">
						<?php foreach ( $gallery as $photo ) : ?>
							<a href="<?php echo $photo['url']; ?>" class="glass cocktail-slider__link swiper-slide" data-fancybox="cocktail-gallery-<?php echo $args['block_id']; ?>">
								<?php echo wp_get_attachment_image( $photo['id'], 'large', false ); ?>
							</a>
						<?php endforeach; ?>
					</div>

					<div class="cocktail-slider__controls">
						<div class="cocktail-slider__prev">
							<svg width="10" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-left"></use></svg>
						</div>

						<div class="cocktail-slider__pagination"></div>

						<div class="cocktail-slider__next">
							<svg width="10" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-right"></use></svg>
						</div>
					</div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
