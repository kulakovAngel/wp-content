<?php get_header(); ?>
<style>
    main {
        background: #aaa;
    }
</style>

<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>

<div style="border: 1px solid red">
    Шаблон: <b><?= basename(__FILE__); ?></b>
</div>

<?php get_footer(); ?>