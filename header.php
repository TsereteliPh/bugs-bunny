<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" width="16" height="16">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="container header__container">
		<a href="<?php echo bloginfo( 'url' ); ?>" class="neon-text header__logo" arai-label="Вернуться на главную страницу">Bugs bunny</a>

		<?php wp_nav_menu(array(
			'theme_location' => 'menu_main',
			'container' => '',
			'menu_id' => 'menu-main',
			'menu_class' => 'reset-list header__menu'
		)); ?>

		<?php
			$address = get_field( 'address', 'options' );
			$tel = get_field( 'tel', 'options' );
			$socials = get_field( 'socials', 'options' );

			if ( $address || $tel || $socials ) :
				?>
					<div class="header__contacts">
						<div class="header__info">
							<?php if ( $address ) : ?>
								<address class="header__address"><?php echo $address; ?></address>
							<?php endif; ?>

							<?php if ( $tel ) : ?>
								<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="header__phone"><?php echo $tel; ?></a>
							<?php endif; ?>
						</div>

						<?php if ( $socials ) : ?>
							<div class="header__socials socials">
								<?php foreach ( $socials as $social ) : ?>
									<a href="<?php echo $social['link']; ?>" class="neon-circle socials__item">
										<svg width="22" height="22"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['icon']; ?>"></use></svg>
									</a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php
			endif;
		?>

		<button class="header__burger" type="button" aria-label="Открыть/закрыть меню">
			<span></span>
		</button>
	</div>
</header>

<main class="main">
	<?php if ( is_front_page() ) get_template_part( 'layouts/partials/welcome' ); ?>
