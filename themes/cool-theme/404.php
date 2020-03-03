<?php get_header(); ?>

<h1>Ошибка 404!</h1>

<section>
	Страница не найдена....
	<img src="<?= get_template_directory_uri() . '/img/page_not_found.svg'; ?>">
</section>

<div style="border: 1px solid red">
    Шаблон: <b><?= basename(__FILE__); ?></b>
</div>

<?php get_footer(); ?>