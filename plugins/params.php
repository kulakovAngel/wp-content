<?php
/**
 * @package CoolSoftMetaBoxesParams
 * @version 1.0
 */
/*
Plugin Name: Meta Boxes Params
Plugin URI: https://github.com/kulakovAngel
Description: Плагин добавляет несколько метабоксов для примера
Author: Кулаков Валерий
Version: 1.0
Author URI: https://github.com/kulakovAngel
*/
$options = array(
	array( // первый метабокс
		'id'	=>	'params', // ID метабокса, а также префикс названия произвольного поля
		'name'	=>	'Параметры', // заголовок метабокса
		'post'	=>	array('____'), // типы постов для которых нужно отобразить метабокс
		'pos'	=>	'normal', // расположение, параметр $context функции add_meta_box()
		'pri'	=>	'high', // приоритет, параметр $priority функции add_meta_box()
		'cap'	=>	'edit_posts', // какие права должны быть у пользователя
		'args'	=>	array(
			array(
				'id'			=>	'cost', // с префиксом meta1_field_1
				'title'			=>	'Стоимость', // лейбл поля
				'type'			=>	'text', // тип
				'placeholder'	=>	'Введите стоимость',
				'desc'			=>	'Вводите, не стесняйтесь', // подпись к полю
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'description',
				'title'			=>	'Краткое описание',
				'type'			=>	'textarea',
				'placeholder'	=>	'Очень кратко о продукте',
				'desc'			=>	'Основные сведения о продукте',
				'cap'			=>	'edit_posts'
			),
			array(
				'id'			=>	'color',
				'title'			=>	'Выберите цвет',
				'type'			=>	'select', // выпадающий список
				'desc'			=>	'Задайте цвет продукта',
				'cap'			=>	'edit_posts',
				'args'			=>	array('Красный' => 'Красный', 'Белый' => 'Белый') // элементы списка: на_фронте => в_админке
			)
		)
	),
	array( // второй метабокс
		'id'	=>	'availability',
		'name'	=>	'Наличие на складе',
		'post'	=>	array('____'),
		'pos'	=>	'side',
		'pri'	=>	'high',
		'cap'	=>	'edit_posts',
		'args'	=>	array(
			array(
				'id'			=>	'availability',
				'title'			=>	'Есть ли на складе?',
				'type'			=>	'checkbox', // чекбокс
				'desc'			=>	'Есть ли продукт на складе',
				'cap'			=>	'edit_posts'
			),
		)
	)
);
 
foreach ($options as $option) {
	$truemetabox = new trueMetaBox($option);
}

//использование в теме:
//echo get_post_meta($post->ID, 'params_cost', true);