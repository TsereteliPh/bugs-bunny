<?php
	$welcome = get_field( 'welcome' );
	if ( $welcome ) :
		?>
			<section class="welcome">
				<div class="container welcome__container">
					<div class="welcome__content">
						<a href="<?php echo bloginfo( 'url' ); ?>" class="neon-logo welcome__logo">
							<img class="neon-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bugs.svg" alt="Логотип кальянной Bugs Bunny" width="180" height="270">

							<div class="neon-logo__label neon-text">Bugs Bunny</div>

							<div class="neon-logo__text neon-text">lounge</div>
						</a>

						<?php if ( $welcome['title'] ) : ?>
							<h1 class="welcome__title"><?php echo $welcome['title']; ?></h1>
						<?php endif; ?>

						<?php if ( $welcome['text'] ) : ?>
							<div class="welcome__text"><?php echo $welcome['text']; ?></div>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php
	endif;
?>
