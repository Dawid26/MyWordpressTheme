<?php


//theme support

function adv_theme_support(){
    
      add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));
}

add_action('after_setup_theme', 'adv_theme_support');
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)


set_post_thumbnail_size( 500, 400, array( 'center', 'center')  ); // 50 pixels wide by 50 pixels tall, crop from the center

add_action('init', 'wpdocs_custom_init');
 
/**
 * Add excerpt support to pages
 */
function wpdocs_custom_init() {
    add_post_type_support( 'page', 'excerpt' );
}

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
add_post_type_support('page', 'thumbnail');
