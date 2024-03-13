</main>

<footer class="footer">
	<div class="footer__line"></div>

	<div class="container footer__container">
		<?php
			$socials = get_field( 'socials', 'options' );
			if ( $socials ) :
				?>
					<div class="footer__socials socials">
						<?php foreach ( $socials as $social ) : ?>
							<a href="<?php echo $social['link']; ?>" class="neon-circle socials__item">
								<svg width="22" height="22"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['icon']; ?>"></use></svg>
							</a>
						<?php endforeach; ?>
					</div>
				<?php
			endif;
		?>

		<a href="<?php echo bloginfo( 'url' ); ?>" class="neon-logo footer__logo">
			<img class="neon-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bugs.svg" alt="Логотип кальянной Bugs Bunny" width="180" height="270">

			<div class="neon-logo__label neon-text">Bugs Bunny</div>

			<div class="neon-logo__text neon-text">lounge</div>
		</a>
	</div>
</footer>

<?php get_template_part('layouts/partials/modals'); ?>

<?php wp_footer(); ?>

</body>
</html>
