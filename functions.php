<?php
//Theme Functions Go HERE

// function myFunction(){
//
// }
//
// myFunction();

function enqueue_my_styles_and_scripts(){
//Enqueueing our custom Portfolio styles
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/homepage.css', array(), '1.0.0', 'all');

//Javascript
//wp_enqueue_script('my_scripts', get_theme_file_uri() . 'js/name.js', array(jquery), '1.0.0')

}

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');
