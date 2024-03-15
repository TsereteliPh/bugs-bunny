<?php
	$varieties = get_sub_field( 'varieties' );
	if ( $varieties ) :
		?>
			<section class="varieties">
				<div class="container varieties__container">
					<?php if ( get_sub_field( 'title' ) ) : ?>
						<h2 class="varieties__title"><?php the_sub_field( 'title' ); ?></h2>
					<?php endif; ?>

					<ul class="reset-list varieties__list">
						<?php foreach ( $varieties as $variety ) : ?>
							<li class="varieties__item">
								<?php
									echo wp_get_attachment_image( $variety['img'] ? $variety['img'] : 49, 'large', false, array(
										'class' => 'varieties__img'
									) );
								?>

								<div class="varieties__label"><?php echo $variety['label']; ?></div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
		<?php
	endif;
?>
