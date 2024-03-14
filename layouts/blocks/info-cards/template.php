<?php
	$cards = get_sub_field( 'cards' );
	if ( $cards ) :
		?>
			<section class="info-cards">
				<div class="container">
					<ul class="reset-list info-cards__list">
						<?php foreach ( $cards as $card ) : ?>
							<li class="info-cards__item"<?php echo $card['bg'] ? ' style="background-image: url(' . $card['bg'] . ');"' : ''; ?>>
								<div class="info-cards__label"><?php echo $card['label']; ?></div>

								<div class="info-cards__text"><?php echo $card['text']; ?></div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
		<?php
	endif;
?>
