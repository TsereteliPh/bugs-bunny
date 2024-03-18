<section class="rent">
	<div class="container rent__container">
		<div class="glass rent__content">
			<?php if ( get_sub_field( 'title' ) ) : ?>
				<h2 class="rent__title"><?php the_sub_field( 'title' ); ?></h2>
			<?php endif; ?>


			<?php
				$list = get_sub_field( 'list' );
				if ( $list ) :
					?>
						<ul class="reset-list rent__list">
							<?php foreach ( $list as $item ) : ?>
								<li class="rent__item"><?php echo $item['text']; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php
				endif;
			?>

			<button class="btn rent__button js-book" type="button">Арендовать</button>
		</div>
	</div>
</section>
