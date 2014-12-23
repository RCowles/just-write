<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Just Write
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function just_write_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

	/**
     * Add theme support for Site Logo
     * See: http://jetpack.me/support/site-logo/
     */
     add_theme_support( 'site-logo', array(
	    'size' => 'just-write-site-logo',
	    'header-text' => array(
	        'site-title',
	        'site-description',
	    ),
	) );
}
add_action( 'after_setup_theme', 'just_write_jetpack_setup' );
