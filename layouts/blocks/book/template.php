<section class="book">
	<div class="container book__container">
		<div class="book__content">
			<?php
				$title = get_sub_field( 'title' );
				$text = get_sub_field( 'text' );

				if ( $title ) :
					?>
						<h2 class="book__title"><?php echo $title['text']; ?></h2>

						<div class="book__under"><?php echo $title['under']; ?></div>
					<?php
				endif;
			?>

			<?php if ( $text ) : ?>
				<div class="book__text"><?php echo $text; ?></div>
			<?php endif; ?>
		</div>

		<a href="<?php echo bloginfo( 'url' ); ?>" class="neon-logo book__logo">
			<img class="neon-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bugs.svg" alt="Логотип кальянной Bugs Bunny" width="180" height="270">

			<div class="neon-logo__label neon-text">Bugs Bunny</div>

			<div class="neon-logo__text neon-text">lounge</div>
		</a>

		<form id="book-form" method="POST" class="book__form" name="Бронь">
			<div class="book__form-legend">Забронировать</div>

			<input type="text" class="input book__input" name="client_name" placeholder="Имя" required>

			<input type="email" class="input book__input" name="client_email" placeholder="email" required>

			<input type="tel" class="input book__input" name="client_tel" placeholder="телефон" required>

			<button class="btn-fill book__submit" type="submit">отправить</button>

			<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

			<?php wp_nonce_field( 'Бронь', 'book-form-nonce' ); ?>
		</form>
	</div>
</section>
