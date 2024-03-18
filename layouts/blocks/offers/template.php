<?php
	$title = get_sub_field( 'title' );
	$offers = get_sub_field( 'offers' );
?>
<section class="offers">
	<div class="container">
		<?php if ( $title ) : ?>
			<h2 class="offers__title">
				<?php echo $title['text']; ?>
				<span><?php echo $title['highlighted']; ?></span>
			</h2>
		<?php endif; ?>

		<?php if ( $offers ) : ?>
			<ul class="reset-list offers__list">
				<?php foreach ( $offers as $offer ) : ?>
					<li class="glass offers__item">
						<div class="offers__text"><?php echo $offer['text']; ?></div>

						<div class="offers__desc"><?php echo $offer['desc']; ?></div>

						<?php
							if ( $offer['icon'] ) {
								echo wp_get_attachment_image( $offer['icon'], 'medium', false, array(
									'class' => 'offers__img'
								) );
							}
						?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>
