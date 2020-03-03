<?php

get_header();
while (have_posts()) {
    the_post();
?>
    <section>
        <h2><?php the_title(); ?></h2>
            <?php
                the_content();
                echo get_the_post_thumbnail();
                ?>
                <ul>
                    <li>
                        <?= get_post_meta($post->ID, 'params_cost', true) . 'BYN' ?>
                    </li>
                    <li>
                        <?= get_post_meta($post->ID, 'params_description', true) ?>
                    </li>
                    <li>
                        <?= get_post_meta($post->ID, 'params_color', true) ?>
                    </li>
                    <li>
                        <?= ( get_post_meta($post->ID, 'availability_availability', true) ) ? '✔ В наличии!' : '✘ Нет в наличии((' ?>
                    </li>
                </ul>
    </section>
<?php
}
?>

<div style="border: 1px solid red">
    Шаблон: <b><?= basename(__FILE__); ?></b>
</div>

<?php get_footer(); ?>