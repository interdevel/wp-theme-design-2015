<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ideas
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ideas_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ideas_jetpack_setup' );
