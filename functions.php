<?php
// Them supports
function custom_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'custom_theme_support' );

function custom_menu(){
    $locations = [
        'primary' => 'top navbar',
        'footer' => 'footer  menu'
    ];
    register_nav_menus($locations);
}
add_action( 'init','custom_menu' );


//  Registering the css files
function custom_register_styles(){
    $version = wp_get_theme()->get('Version');
    
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',array(),'5.1.3','all' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',array(),'5.13.0','all' );
    wp_enqueue_style( 'custom_style', get_template_directory_uri().'/style.css',array(),$version,'all' );
}

add_action( 'wp_enqueue_scripts', 'custom_register_styles' );

// registering JS files
function custom_register_scripts(){
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',array(),'3.4.1',true);
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',array(),'5.1.3',true);
    wp_enqueue_script( 'customJS', get_template_directory_uri().'/assets/js/main.js',array(),'1.0',true);


}

add_action( 'wp_enqueue_scripts', 'custom_register_scripts' );



?>