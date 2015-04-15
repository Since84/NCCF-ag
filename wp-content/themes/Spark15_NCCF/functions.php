<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'nccf_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans+Condensed:300,700,300italic' );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css' );
	wp_enqueue_script( 'child_site', get_stylesheet_directory_uri()."/script/site.js", array('jquery', 'backbone', 'underscore', 'smooth-scroll') );
}