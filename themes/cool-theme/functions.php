<?php

function cool_soft_enqueue() {
	// CSS
    wp_enqueue_style( 'theme_css', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/css/main.css' );
    wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900&display=swap');
	wp_enqueue_style( 'font-style');
	// JavaScript
    wp_enqueue_script( 'jquery' );
//	wp_enqueue_script( 'cse_script', URL, зависимости, версия, хедер или футер );
}
add_action( 'wp_enqueue_scripts', 'cool_soft_enqueue' );

add_theme_support('menus'); //поддержка меню в админке
add_theme_support( 'post-thumbnails' ); // картинки для всех типов постов
//add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat', 'audio', 'Cool') );  //форматы постов добавляют удобства
//add_theme_support( 'post-thumbnails', array( 'post' ) ); //картнки только для определенного типа (post)

//Кастомные типы постов
function register_post_types(){
	register_post_type('____', array(
		'label'  => null,
		'labels' => array(
			'name'               => __('____'), // основное название для типа записи
			'singular_name'      => __('____'), // название для одной записи этого типа
			'add_new'            => __('Добавить ____'), // для добавления новой записи
			'add_new_item'       => __('Добавление ____'), // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => __('Редактирование ____'), // для редактирования типа записи
			'new_item'           => __('Новое ____'), // текст новой записи
			'view_item'          => __('Смотреть ____'), // для просмотра записи этого типа.
			'search_items'       => __('Искать ____'), // для поиска по этим типам записи
			'not_found'          => __('Не найдено'), // если в результате поиска ничего не было найдено
			'not_found_in_trash' => __('Не найдено в корзине'), // если не было найдено в корзине
			'parent_item_colon'  => __(''), // для родителей (у древовидных типов)
			'menu_name'          => __('____'), // название в меню
		),
		'description'         => __(''),
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true, // Будут ли записи этого типа иметь древовидную структуру (как постоянные страницы).
		'supports'            => [ 'title','editor','thumbnail','custom-fields','page-attributes','post-formats' ],
        /*
		 * Возможные варианты содержимого массива 'supports':
		 *
		 * title - заголовок,
		 * editor - редактор,
		 * author - автор записи,
		 * thumbnail - миниатюра записи,
		 * excerpt - поле для цитаты,
		 * trackbacks - обратные ссылки,
		 * custom-fields - произвольные поля,
		 * comments - комментарии,
		 * revisions - редакции,
		 * page-attributes - атрибуты поста, только при 'hierarchical' => true
		 * post-formats - типы постов (могут добавить удобства)
		 */
		'taxonomies'          => ['category_for____', 'tags_for____'],
		'has_archive'         => false,
		'rewrite'             => true, //['slug' => 'shop' ],
		'query_var'           => true,
	) );
}
add_action( 'init', 'register_post_types' );

//Кастомные таксономии
function register_taxonomies_for____() {
    register_taxonomy(
        'category_for____',
        '____',
        array(
            'labels' => array(
                'name'              => __( 'Категории для ____' ),
                'singular_name'     => __( 'Категории для ____'),
                'search_items'      => __( 'Искать категории для ____'),
                'all_items'         => __( 'Все категории для ____'),
                'edit_item'         => __( 'Редактировать категорию для ____'),
                'update_item'       => __( 'Заапдэйтить категорию для ____'),
                'add_new_item'      => __( 'Добавить категорию для ____'),
                'new_item_name'     => __( 'Имя новой категории для ____'),
                'menu_name'         => __( 'Категории для ____'),
            ),
            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'show_admin_column' => true,
            'rewrite' => array( 'slug' => '____category' ),
        )
    );
    register_taxonomy(
        'tags_for____',
        '____',
        array(
            'labels' => array(
                'name'              => __( 'Теги для ____' ),
                'singular_name'     => __( 'Теги для ____'),
                'search_items'      => __( 'Искать теги для ____'),
                'all_items'         => __( 'Все теги для ____'),
                'edit_item'         => __( 'Редактировать тег для ____'),
                'update_item'       => __( 'Заапдэйтить тег для ____'),
                'add_new_item'      => __( 'Добавить тег для ____'),
                'new_item_name'     => __( 'Имя нового тега для ____'),
                'menu_name'         => __( 'Теги для ____'),
            ),
            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'show_admin_column' => true,
            'rewrite' => array( 'slug' => '____tag' ),
        )
    );
}
add_action( 'init', 'register_taxonomies_for____' );