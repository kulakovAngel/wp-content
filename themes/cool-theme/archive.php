<?php get_header();?>

<section>
	<?php while (have_posts()): the_post();?>
	    <h2><?php the_title();?></h2>
		<?php the_content();?>
	<?php endwhile; ?>
</section>

<div style="border: 1px solid red">
    Шаблон: <b><?= basename(__FILE__); ?></b>
</div>

<?php get_footer(); ?>