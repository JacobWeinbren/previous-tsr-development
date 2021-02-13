<?php

function startwordpress_scripts() {
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

add_theme_support( 'title-tag' );