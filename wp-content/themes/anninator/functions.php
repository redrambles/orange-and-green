<?php
/**
 * Anninator functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Anninator
 * @since Anninator 1.0
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Anninator 1.0
 */
function anninator_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 280, 200, true);
	add_image_size('banner-image', 1200, 210, true);
	add_image_size('front-blog-thumbnail', 267, 200, true);
	add_image_size('slider-image', 1000, 400, true);



	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'anninator' ),
		'footer-menu' => __( 'Footer Menu', 'anninator' ),
	) );
}

add_action( 'after_setup_theme', 'anninator_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function anninator_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'anninator' ),
		'id'            => 'right-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'anninator' ),
		'before_widget' => '<aside id="%1$s" class="side-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Home 1', 'anninator' ),
		'id'            => 'home-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'anninator' ),
		'before_widget' => '<aside id="%1$s" class="home-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Home 2', 'anninator' ),
		'id'            => 'home-2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'anninator' ),
		'before_widget' => '<aside id="%1$s" class="home-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Home 3', 'anninator' ),
		'id'            => 'home-3',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'anninator' ),
		'before_widget' => '<aside id="%1$s" class="home-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'anninator_init' );

/** Custom Excerpt Length **/

function anninator_custom_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'anninator_custom_excerpt_length');

/**
 * Enqueues scripts and styles.
 *
 * @since Anninator 1.0
 */
function anninator_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'anninator-style', get_stylesheet_uri() );
	wp_enqueue_style( 'flexslider-css', get_stylesheet_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style('anninator-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,600');

	//Scripts
	wp_enqueue_script( 'flexslider-js', get_stylesheet_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '20160110', true );
	wp_enqueue_script('slider', get_stylesheet_directory_uri() . '/js/slider.js', array('flexslider-js'), '20160110', true );

}
add_action( 'wp_enqueue_scripts', 'anninator_scripts' );


/*** defines markup for post comments **/
function anninator_comments($comment, $args, $depth) {
	$comment  = '<li class="comment">';
	$comment .=	'<header class="comment-head">';
	$comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
	$comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '</p>';
	$comment .= '</div>';
	$comment .= '</li>';
}
 











