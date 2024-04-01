<?php get_header(); ?>

<section class="not-found">
	<div class="container not-found__container">
		<h1 class="neon-text not-found__title">
			<span>404</span>
			Страница не найдена
		</h1>

		<div class="not-found__text">Такой страницы не существует.</div>

		<a href="<?php bloginfo('url'); ?>" class="btn not-found__link">Вернуться на главную</a>
	</div>
</section>

<?php get_footer(); ?>
