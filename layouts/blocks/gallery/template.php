<section id="gallery" class="gallery">
	<?php
		$title = get_sub_field( 'title' );
		if ( $title ) :
			?>
				<h2 class="gallery__title"><?php echo $title; ?></h2>
			<?php
		endif;
	?>

	<?php
		$gallery = get_sub_field( 'gallery' );
		if ( $gallery ) :
			?>
				<div class="gallery__content">
					<?php foreach ( $gallery as $item ) : ?>
						<a href="<?php echo $item['img']['url']; ?>" class="gallery__link" data-fancybox="gallery-<?php echo $args['block_id']; ?>">
							<?php echo wp_get_attachment_image( $item['img']['id'], 'full', false ); ?>
						</a>
					<?php endforeach; ?>
				</div>
			<?php
		endif;
	?>
</section>
