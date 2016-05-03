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
	wp_register_script('modernizr', get_stylesheet_directory_uri() . '/js/vendor/modernizr-custom.min.js');
  wp_register_script('interactions', get_stylesheet_directory_uri() . '/js/interactions.js', 'jquery', false );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('interactions');
}
add_action( 'wp_enqueue_scripts', 'load_vendor_javascript' );

function load_vivus (){
	if (is_front_page()){ //only load vivus if is front page
		wp_register_script('vivus', get_stylesheet_directory_uri() . '/js/vendor/vivus.js');
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
customize editor capabilities
*/

$editor = get_role( 'editor' );
$caps = array(
    'moderate_comments'
);

foreach ( $caps as $cap ) {
    // Remove the capability.
    $editor->remove_cap( $cap );
}

//customizing for Contact Form 7 plugin
define( 'WPCF7_ADMIN_READ_CAPABILITY', 'manage_options' );
define( 'WPCF7_ADMIN_READ_WRITE_CAPABILITY', 'manage_options' );

/*
disabling comments
*/
add_filter( 'pre_comment_content', 'esc_html' );

/*
turn off post revisions
*/
define( 'WP_POST_REVISIONS', false);

/*
change autosave interval
*/
define( 'AUTOSAVE_INTERVAL', 120 );

/*
removing some meta data
*/
remove_action( 'wp_head', 'wp_generator' ) ;
remove_action( 'wp_head', 'wlwmanifest_link' ) ;
remove_action( 'wp_head', 'rsd_link' ) ;

/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);


/*
adding shortcodes
*/
function banner_shortcode( $atts, $content = null ) {
	return '<div class="banner"><div class="banner-content"><h1>' . $content . '</h1></div></div>';
}
// add_shortcode( 'banner', 'banner_shortcode' );


/*
creating custom post type
*/
add_action( 'init', 'create_post_type' );
function create_post_type() {
  //TEAM MEMBERS POST TYPE
  register_post_type( 'team_members',
    array(
      'labels' => array(
        'name' => __( 'Team Members' ),
        'singular_name' => __( 'Team Member' )
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-groups',
      'publicly_queryable' => false,
      'supports' => array(
           'title',
            'editor',
            'thumbnail'
        )
    )
  );

  //TESTIMONIALS POST TYPE
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => false,
      'publicly_queryable' => false,
      'menu_icon' => 'dashicons-format-quote'
    )
  );

   //SERVICES POST TYPE
  register_post_type( 'services',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' )
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-admin-site',
      'publicly_queryable' => false,
      'supports' => array(
           'title',
            'editor',
            'thumbnail'
        )
    )
  );
}


/*
removing query strings from static resources
*/
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

