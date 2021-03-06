<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 * @package Minories
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function minories_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'minories_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
	
	/*
	// Add theme support for logo
	add_image_size( 'minories-logo', 140, 140 );
	add_theme_support( 'site-logo', array(
		'size' => 'minories-logo',
	    'header-text' => array(
	        'site-title',
	        'site-description',
	    ),

	) );
	*/
}
add_action( 'after_setup_theme', 'minories_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function minories_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    get_template_part( 'template-parts/content', 'search' );
		else :
		    get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}
