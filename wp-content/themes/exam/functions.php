<?php

/*****стиля и скрипты****/

function load_style_script (){


    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('code-light.css', get_template_directory_uri() . '/fonts/code-light.css');
    wp_enqueue_style('gothic.css', get_template_directory_uri() . '/fonts/gothic.css');
    wp_enqueue_style('style.css', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('jquery-1.9.1.min.js', get_template_directory_uri() . '/js/jquery-1.9.1.min.js');
    wp_enqueue_script('imagesloaded.pkgd.min.js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js');
    wp_enqueue_script('jquery-imagefill.js', get_template_directory_uri() . '/js/jquery-imagefill.js');
    wp_enqueue_script('masonry.pkgd.min.js', get_template_directory_uri() . '/js/masonry.pkgd.min.js');
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js');

}

add_action('wp_enqueue_scripts', 'load_style_script');

/*подддержка миниатюр*/

add_theme_support('post-thumbnails');

/*поддержка меню*/

register_nav_menu('menu','Меню');


register_sidebar(array(
    'name' => 'Виджеты сайдбара',
    'id' => 'sidebar',
    'description' => 'здесь размещайте виджеты сайдбара',
    'before_widget' => '<section class="categories archive popular-post tags">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => "</h3>",


));


/**** футер*/
register_sidebar(array(


    'name' => 'Виджеты футера',
    'id' => 'footer',
    'description' => 'здесь размещайте виджеты футера',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => "</h3>",
));



add_action('init', 'photosteam');
function photosteam(){
    register_post_type('photosteam', array(
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'labels' => array(
            'name' => 'photosteam',
            'all_items' => 'all photosteam',
            'add_new' => 'add photosteam',
            'add_new_item' => 'photosteam'

        )
    ) );
}




add_action('init', 'contacts');
function contacts(){
    register_post_type('contacts', array(
        'public' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'labels' => array(
            'name' => 'контакты',
            'all_items' => 'all контакты',
            'add_new' => 'add контакты',
            'add_new_item' => 'контакты'

        )
    ) );
}



?>