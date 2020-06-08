<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Cms_Developer_Challenge
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cms_developer_challenge_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'cms_developer_challenge_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cms_developer_challenge_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'cms_developer_challenge_pingback_header' );


/*
*	Add multi sidebar to template to able customize and edit
*   id: 
		- sidebar-widget-design-selection
*/
function template_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Design Selection', 'cms-developer-challenge' ),
            'id' => 'sidebar-widget-design-selection',
            'description' => __( 'Design Selection', 'cms-developer-challenge' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'template_sidebar' );



/*
*	Add multi menu to sidebar template to able customize and edit
*   id: 
		- sidebar-menu-design-zen-resources
*/
function cms_custom_new_menu() {
	register_nav_menus(
	  array(
		'sidebar-menu-design-zen-resources' => __( 'Zen Resources', 'cms-developer-challenge' ),
	  )
	);
  }
add_action( 'init', 'cms_custom_new_menu' );