<?php

/*
 * Register Custom Post Type Slider Header Home
 */
add_action('init', 'bepro_register_post_type_slider_header_home');
function bepro_register_post_type_slider_header_home(){
    register_post_type('slider-header-home', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Slider Header Home', // основное название для типа записи
            'singular_name'      => 'Slide', // название для одной записи этого типа
            'add_new'            => 'Add Slide', // для добавления новой записи
            'add_new_item'       => 'Add', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Write', // для редактирования типа записи
            'new_item'           => 'New Slide', // текст новой записи
            'view_item'          => 'View', // для просмотра записи этого типа.
            'search_items'       => 'Search', // для поиска по этим типам записи
            'not_found'          => 'Not Find', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not find in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Slider Header Home', // название меню
        ),
        'public'              => true,
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}
/*
 * Register Custom Post Type Advantages Header Home
 */
add_action('init', 'bepro_register_post_type_advantages_header_home');
function bepro_register_post_type_advantages_header_home(){
        register_post_type('advantages-header', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Our Advantages', // основное название для типа записи
            'singular_name'      => 'Advantag', // название для одной записи этого типа
            'add_new'            => 'Add Advantag', // для добавления новой записи
            'add_new_item'       => 'Add', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Write', // для редактирования типа записи
            'new_item'           => 'New Advantag', // текст новой записи
            'view_item'          => 'View', // для просмотра записи этого типа.
            'search_items'       => 'Search', // для поиска по этим типам записи
            'not_found'          => 'Not Find', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not find in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Our Advantages', // название меню
        ),
        'public'              => true,
        'hierarchical'        => false,
        'supports'            => array('title', 'custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

/*
 * Register Custom Post Type Events
 */
add_action('init', 'bepro_register_post_type_events');
function bepro_register_post_type_events(){
        register_post_type('events', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Events', // основное название для типа записи
            'singular_name'      => 'Event', // название для одной записи этого типа
            'add_new'            => 'Add Event', // для добавления новой записи
            'add_new_item'       => 'Add', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Write', // для редактирования типа записи
            'new_item'           => 'New Event', // текст новой записи
            'view_item'          => 'View', // для просмотра записи этого типа.
            'search_items'       => 'Search', // для поиска по этим типам записи
            'not_found'          => 'Not Find', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not find in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Events', // название меню
        ),
        'public'              => true,
        'hierarchical'        => false,
        'supports'            => array('title', 'custom-fields', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

/*
 * Register Custom Post Type Events
 */
add_action('init', 'bepro_register_post_type_logotypes');
function bepro_register_post_type_logotypes(){
        register_post_type('logotypes', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Logotypes', // основное название для типа записи
            'singular_name'      => 'Logotype', // название для одной записи этого типа
            'add_new'            => 'Add Logotype', // для добавления новой записи
            'add_new_item'       => 'Add New Logotypes', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Write', // для редактирования типа записи
            'new_item'           => 'New Logotypes', // текст новой записи
            'view_item'          => 'View', // для просмотра записи этого типа.
            'search_items'       => 'Search', // для поиска по этим типам записи
            'not_found'          => 'Not Find', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not find in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Logotypes', // название меню
        ),
        'public'              => true,
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}
