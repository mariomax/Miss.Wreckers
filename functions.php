<?php
/**
 * Miss.Wreckers Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Miss.Wreckers
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_MISS_WRECKERS_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'miss-wreckers-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_MISS_WRECKERS_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/*
 * Function to link to Adobe Fonts Typekit
 */
add_action( 'wp_head', function() {
	?>
	<link rel="stylesheet" href="https://use.typekit.net/kcj8myg.css">
	<?php
} );

