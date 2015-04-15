<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'nccf_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans+Condensed:300,700,300italic' );

	wp_enqueue_script( 'jqueryui', get_stylesheet_directory_uri()."/script/jquery-ui-1.10.3.custom.min.js", array('jquery') );
	wp_enqueue_script( 'kinetic', get_stylesheet_directory_uri()."/script/smooth-div-scroll/jquery.kinetic.min.js", array('jquery') );
	wp_enqueue_script( 'mousewheel', get_stylesheet_directory_uri()."/script/smooth-div-scroll/jquery.mousewheel.min.js", array('jquery') );
	wp_enqueue_script( 'smoothdivscroll', get_stylesheet_directory_uri()."/script/smooth-div-scroll/jquery.smoothdivscroll-1.3-min.js", array('jquery', 'jqueryui', 'kinetic', 'mousewheel' ) );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/script/smooth-div-scroll/css/smoothDivScroll.css' );
    wp_enqueue_style( 'smoothdivscroll_css', get_stylesheet_directory_uri().'/style.css' );
	wp_enqueue_script( 'child_site', get_stylesheet_directory_uri()."/script/script.js", array('jquery', 'backbone', 'underscore', 'smoothdivscroll') );
}