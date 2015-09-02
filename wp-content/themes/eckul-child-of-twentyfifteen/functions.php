<?php


add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
}

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




if ( ! function_exists( 'twentyfifteen_post_nav_background' ) ) {
    function theme_special_nav() {
        //  Do something.
    }
}


