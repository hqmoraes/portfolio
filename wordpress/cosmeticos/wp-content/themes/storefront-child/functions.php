<?php

function my_theme_enqueue_styles() {
    wp_enqueue_script('recursos', get_stylesheet_directory_uri() .'/js/recursos.js', array('jquery','',true));
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
