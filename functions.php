<?php 

/*
enqueue child css and scripts
*/
function theme_enqueue_styles() {
	$parent_style = '_s';
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function load_vendor_javascript() {
	wp_register_script('modernizr', get_stylesheet_directory_uri() . '/js/modernizr-custom.min.js');
  wp_register_script('interactions', get_stylesheet_directory_uri() . '/js/interactions.js', 'jquery', false );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('interactions');
}
add_action( 'wp_enqueue_scripts', 'load_vendor_javascript' );

function load_vivus (){
	if (is_front_page()){ //only load vivus if is front page
		wp_register_script('vivus', get_stylesheet_directory_uri() . '/js/vivus.js');
		wp_register_script('vivus-init', get_stylesheet_directory_uri() . '/js/vivus-init.js');
	
		wp_enqueue_script('vivus');
		wp_enqueue_script('vivus-init');
	}
}
add_action( 'wp_enqueue_scripts', 'load_vivus' );


/*
adding footer menu, second nav to child theme
*/
 register_nav_menus( array(
 'primary' => __( 'Primary Menu', 'ybp' ),
 'secondary' => __( 'Secondary Menu', 'ybp'),
 ) );


/*
editing password form
*/
function custom_password_form($content) {
	$before = array('This content is password protected. To view it please enter your password below:','Password:','Submit');
	$after = array('<h3>Enter Password</h3><p>Please enter the password to access content on this page</p>','Password:','Login');
	$content = str_replace($before,$after,$content);
	return $content;
}
add_filter('the_password_form', 'custom_password_form');


/*
removing admin bar
*/
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

/*
removing autofilter that adds empty <p> tags 
*/
remove_filter('the_content', 'wpautop');


/*
adding shortcodes
*/
function banner_shortcode( $atts, $content = null ) {
	return '<div class="banner"><div class="banner-content"><h1>' . $content . '</h1></div></div>';
}
add_shortcode( 'banner', 'banner_shortcode' );


function logo_shortcode($atts, $content = null) {
	return get_template_part('/images/header', 'logo.svg');
}
add_shortcode( 'logo', 'logo_shortcode' );



