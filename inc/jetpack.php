<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Ostentus
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function ostentus_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'ostentus_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function ostentus_jetpack_setup
add_action( 'after_setup_theme', 'ostentus_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function ostentus_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function ostentus_infinite_scroll_render
