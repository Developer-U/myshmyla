<?php
/*
** Обработчик для аякса для передачи данных из калькулятора в админку
**
*/

require $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';

    var_dump($_POST); // Так мы проверяем какие данные передаются на сервер. Заходим во вкладку Network -> Response

    if( isset($_POST['action']) && $_POST['action'] == 'calc-ajax') { // Проверяем чтобы action соответствовал нашему аяксу
        $postID = wp_insert_post(  wp_slash( array(
            'post_title'    => 'Заказ с калькулятора',            
            'post_name'     => 'post_slug',
            'post_status'   => 'draft',
            'post_type'     => 'zakaz', // Название группы полей в ACF
            'post_author'   => 1,
            'ping_status'   => get_option('default_ping_status'),
            'post_parent'   => 0,
            'menu_order'    => 0,
        ) ) );

        update_field('client_name', $_POST['client_name'], $postID); // Имя клиента из формы
        update_field('client_phone', $_POST['client_phone'], $postID); // Телефон клиента из формы
        
        update_field('square', $_POST['square'], $postID); // Площадь потолка
        update_field('material', $_POST['material'], $postID); // Материал потолка
        update_field('number', $_POST['number'], $postID); // Подсветка
        update_field('value', $_POST['value'], $postID); // кол-во углов
        update_field('value2', $_POST['value2'], $postID); // кол-во труб
        update_field('value3', $_POST['value3'], $postID); // кол-во светильников
        update_field('value4', $_POST['value4'], $postID); // кол-во люстр        
        update_field('total_price', $_POST['total_price'], $postID); // Итоговая стоимость
        
    }