<?php

function miliband_scripts() {
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.15.2/css/all.css' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
}

add_action( 'wp_enqueue_scripts', 'miliband_scripts' );

add_theme_support( 'title-tag' );