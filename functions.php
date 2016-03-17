<?php 

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
	return '<div class="banner"><div class="banner-content">' . $content . '</div></div>';
}
add_shortcode( 'banner', 'banner_shortcode' );


function logo_shortcode($atts, $content = null) {
	return get_template_part('/images/header', 'logo.svg');
}
add_shortcode( 'logo', 'logo_shortcode' );



