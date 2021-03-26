<?php

/**
 * Enqueue Styles
 */

function ashe_pro_child_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'ashe_pro_child_enqueue_styles' );