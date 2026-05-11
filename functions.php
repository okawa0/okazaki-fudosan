<?php
/**
 * Theme functions for Okazaki Fudosan.
 *
 * @package sample-fudosan
 */

function sample_fudosan_asset_version( $relative_path ) {
	$path = get_stylesheet_directory() . $relative_path;

	if ( file_exists( $path ) ) {
		return filemtime( $path );
	}

	return wp_get_theme()->get( 'Version' );
}

function sample_fudosan_enqueue_assets() {
	$theme_uri = get_stylesheet_directory_uri();

	wp_enqueue_style(
		'sample-fudosan-main',
		$theme_uri . '/assets/css/main.css',
		array(),
		sample_fudosan_asset_version( '/assets/css/main.css' )
	);

	wp_enqueue_script(
		'sample-fudosan-main',
		$theme_uri . '/assets/js/main.js',
		array(),
		sample_fudosan_asset_version( '/assets/js/main.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'sample_fudosan_enqueue_assets' );
