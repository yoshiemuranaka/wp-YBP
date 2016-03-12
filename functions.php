<?php 

/*
adding footer menu, second nav to child theme
*/
 register_nav_menus( array(
 'primary' => __( 'Primary Menu', 'ybp' ),
 'secondary' => __( 'Secondary Menu', 'ybp'),
 ) );

/*
removing WordPress admin bar
*/
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}