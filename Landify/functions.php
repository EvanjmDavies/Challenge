<?php

// style
function load_stylesheets()
{
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.min.css', array(), false, 'all');
  wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// jQuery
function include_jquery() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array( 'jquery' ), '3.5.1', true );
}
add_action( 'wp_enqueue_scripts', 'include_jquery' );


// AOS
add_action( 'wp_enqueue_scripts', 'add_aos_animation' );
 function add_aos_animation() {
     wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
     wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
     wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js', array( 'AOS' ), null, true);
 }


 // JS
function loadjs()
{
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
  wp_register_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', '', 1, true );
  wp_enqueue_script('waypoints');
  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true );
  wp_enqueue_script('customjs');
}
add_action( 'wp_enqueue_scripts', 'bootstrap' );
add_action('wp_enqueue_scripts', 'loadjs');


// Add featured post
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

?>
