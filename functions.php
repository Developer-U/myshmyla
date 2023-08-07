<?php

/*
 * Подключение настроек темы
 */
require get_template_directory() . '/includes/theme-settings.php';
/*
 * Подключение области виджетов
 */
require get_template_directory() . '/includes/widget-areas.php';
/*
 * Подключение скриптов и стилей
 */
require get_template_directory() . '/includes/enqueue-script-style.php';
/*
 * Вспомогательные функции
 */
require get_template_directory() . '/includes/helpers.php';

/*
 * Шорткоды
 */
require get_template_directory() . '/includes/shortcodes.php';

/*
 * Добавим произвольные типы записей
 */
require get_template_directory() . '/includes/post-types.php';

/*
 * Файл навигации (меню на сайте)
 */
require get_template_directory() . '/includes/navigations.php';

/*
 * Файл пагинации на страницах
 */
require get_template_directory() . '/includes/pagination.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}


/**
 * Подключаем обработчик Ajax.
 */
require get_template_directory() . '/includes/ajax.php';


// Добавим Страницу опций на ACF PRO options_theme

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Контакты',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Идентичные блоки',
		'menu_title'	=> 'Идентичные блоки',
		'icon_url' => 'dashicons-table-col-after',
		'menu_slug'	=> 'theme-general-blocks',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Список городов',
		'menu_title'	=> 'Города',
		'icon_url' => 'dashicons-admin-site-alt',
		'menu_slug'	=> 'theme-general-settings3',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}

/**
 * TimePicker for Contact Form 7
 * Shortcode [text mytime_do id:timepicker]
 */
add_action( 'wp_footer', function() { ?>
	<script>
	jQuery(function ($) {
	$('#timepicker').prop('type', 'time');
	});
	</script>
	<?php } );





## Регистрируем шорткод поля ACF вид вакансии для передачи в CF7
add_action('init', function(){
    add_shortcode('vacancy_type', function(){
        return get_sub_field('vacancy_name');
    });
});


// Удалим тип постов post по умлочанию

function remove_default_post_type($args, $postType) {
    if ($postType === 'post') {
        $args['public']                = false;
        $args['show_ui']               = false;
        $args['show_in_menu']          = false;
        $args['show_in_admin_bar']     = false;
        $args['show_in_nav_menus']     = false;
        $args['can_export']            = false;
        $args['has_archive']           = false;
        $args['exclude_from_search']   = true;
        $args['publicly_queryable']    = false;
        $args['show_in_rest']          = false;
    }

    return $args;
}
add_filter('register_post_type_args', 'remove_default_post_type', 0, 2);


//Удалим комментарии из консоли

add_action( 'admin_init', 'my_remove_menu_pages' );
    function my_remove_menu_pages() {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
        remove_menu_page('link-manager.php');
    }

// Подключение нового типа произвольного поля - видео

add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('acf-field-video/acf-video.php');
}

