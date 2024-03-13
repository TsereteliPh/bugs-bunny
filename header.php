<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="container header__container">
		<a href="<?php echo bloginfo( 'url' ); ?>" class="neon-text header__logo" arai-label="Вернуться на главную страницу">Bugs bunny</a>

		<nav class="header__menu">
			<a href="#" class="header__menu-item active">О нас</a>
			<a href="#" class="header__menu-item">Заказ</a>
			<a href="#" class="header__menu-item">Скидки</a>
			<a href="#" class="header__menu-item">Меню</a>
			<a href="#" class="header__menu-item">Контакты</a>
		</nav>

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
