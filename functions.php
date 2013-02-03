<?php

/**
 * Drifter
 *
 * @package WordPress
 *
 *
 */

/**
 *	Define Constants
 */
define('DRIFTER', get_stylesheet_directory_uri());
define('IMAGES', DRIFTER . '/img');
define( 'JS', DRIFTER . '/js' );

/**
 * jQuery
 */
// wp_enqueue_script('jquery');
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js", false, null );
	wp_enqueue_script( 'jquery' );
}

/**
 * Register Menus 
 */
add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) :
	register_nav_menus( array(
			'primary_nav' => 'Primary Navigation'
	));
endif;

/**
 * Register Sidebar 
 */
if (function_exists( 'register_sidebar' ) ) {
	register_sidebar(array(
		'name'			=> __( 'Aside Sidebar' ),
		'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</li>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));

	register_sidebar(array(
		'name'			=> __( 'Footer Widgets 1' ),
		'id'			=> 'footer-widgets-1',
		'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</li>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));

	register_sidebar(array(
		'name'			=> __( 'Footer Widgets 2' ),
		'id'			=> 'footer-widgets-2',
		'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</li>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));

	register_sidebar(array(
		'name'			=> __( 'Footer Widgets 3' ),
		'id'			=> 'footer-widgets-3',
		'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</li>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	));
}

/**
 * Pagination 
 */
function pagination ( $pages = '', $range = 4 ) {
	$showitems = ( $range * 2 ) + 1;
	
	global $paged;
	if ( empty( $paged ) ) $paged = 1;
	
	if ( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( !$pages ) {
			$pages = 1;
		}
	}
	if ( 1 != $pages ) {
		echo "<span>Page ".$paged." of ".$pages."</span>";
		if( $paged > 2 && $paged > $range+1 && $showitems < $pages ) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		if ( $paged > 1 && $showitems < $pages ) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		
		for ( $i = 1; $i <= $pages; $i++ ) {
			if ( 1 != $pages && ( !( $i >= $paged+$range+1 || $i <= $paged-$ranged-1 ) || $pages <= $showitems ) ) {
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
			}
		}
		
		if ( $paged < $pages && $showitems < $pages ) echo "<a href=\"".get_pagenum_link( $paged + 1 )."\">Next &rsaquo;</a>";
		if ( $paged < $pages - 1 && $paged+$range-1 < $pages && $showitems < $pages ) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
	}
}
