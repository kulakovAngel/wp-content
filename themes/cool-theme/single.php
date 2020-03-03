<?php

get_header();
while (have_posts()) {
    the_post();
?>
    <section>
        <h2><?php the_title(); ?></h2>
            <?php
                the_content();
            ?>
    </section>
<?php
}
?>

<div style="border: 1px solid red">
    Шаблон: <b><?= basename(__FILE__); ?></b>
</div>

<?php get_footer(); ?>