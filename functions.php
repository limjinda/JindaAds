<?php 

add_filter( 'ot_theme_mode', '__return_true' );
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'theme-options.php' );
add_filter( 'ot_show_pages', '__return_false' );

if ( ! function_exists( 'jinda_setup' ) ) :
function jinda_setup() {
	
	load_theme_textdomain( 'jinda', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 768, 384, false );
	add_image_size( 'jindaCover', 768, 384, array( 'center', 'center' ) );

	register_nav_menus( array(
		'primary'   => __( 'Primary top menu', 'jinda' ),
		'secondary' => __( 'Mobile menu', 'jinda' ),
	));

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));

	add_theme_support( 'post-formats', array(
		'video', 'gallery',
	));	
	
	$sidebar1_args = array(
	  'name'          => __( 'Main Sidebar', 'jinda' ),
	  'id'            => 'main-sidebar',
	  'before_widget' => '<div class="widget-item uk-width-1-1">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h4 class="widget-header"><i class="uk-icon-arrow-circle-o-right"></i> ',
	  'after_title'   => '</h4>'
	  );
	register_sidebar( $sidebar1_args );

}
endif;
add_action( 'after_setup_theme', 'jinda_setup' );

function jinda_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js');
	wp_enqueue_script('jquery');
	
	wp_enqueue_style('uikit-css', get_stylesheet_directory_uri() . '/bower_components/uikit/css/uikit.almost-flat.min.css');
	wp_enqueue_style('jinda-css', get_stylesheet_uri(), array(), '1.3.3' );

	wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/bower_components/modernizr/modernizr.js');
	wp_enqueue_script('uikit-js', get_stylesheet_directory_uri() . '/bower_components/uikit/js/uikit.min.js', array(), '1.0.0', true);
	wp_enqueue_script('jinda-js', get_stylesheet_directory_uri() . '/js/global.js', array(), '1.3.3', true);
}
add_action( 'wp_enqueue_scripts', 'jinda_scripts' );

function custom_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' <a title="อ่านต่อ" href="' . get_permalink( get_the_ID() ) . '">' . __( 'อ่านต่อ', 'jindaAds' ) . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>