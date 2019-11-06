<?php

function my_child_theme(){
    wp_enqueue_style('parent styles', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('custom_styles' , get_stylesheet_directory_uri() . '/css/custom.css');
}

add_action('wp_enqueue_scripts', 'my_child_theme')

?>