<?php
/*
Template Name: Шаблон страницы кастомных типов
Template post type: page
*/
?>

<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="main-navigation">
            <? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
        </nav>
        <h1>Кастомный тип</h1>
    </header>
    <main>
    
    <?php
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
    
        <section>
            <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <section>
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <?php
                            the_content();
                        ?>
                    </section>
                    <?php
                }
            ?>
        </section>

       
       
       
        <?php
            $args = array('post_type' => '____', 'posts_per_page' => 6);
            $property = new WP_Query( $args );
            if( $property->have_posts() ) : ?>
        <?php while( $property->have_posts() ) :
            $property->the_post();
            // тут выводим пост ?>
            <a href="<?php the_permalink(); ?>"><h2 class="title"><?php the_title(); ?></h2></a>

   <?php endwhile; ?>
<?php endif;
wp_reset_postdata(); // возвращаем глобальные переменные к состоянию главного запроса ?>
       
       
       
        <div style="border: 1px solid red">
            Шаблон: <b><?= basename(__FILE__); ?></b>
        </div>

        <?php get_footer(); ?>