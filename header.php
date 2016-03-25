<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<div class="js-animate-menu">
		<div class="overlay">
			<?php wp_nav_menu( array('container_class' => 'overlay-menu', 'menu_id' => 'secondary-menu', 'theme_location' => 'secondary' ) ); ?>
			</div>
	</div>
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="nav-content">
			<div class="nav-logo"><p><a href="http://localhost:8888/wp-YBP/">Your Best Prep</a></p></div>
			<div class="nav-menu">
				<div class="menu-trigger show-sm">
					<a class="menu-icon hamburger active">&#9776;</a>
					<img class="menu-icon close" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon--close.svg">
				</div>
				<div class="menu inline-list hide-sm">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'header-nav-menu' ) ); ?>
				</div>		
			</div>
		</div>
	</nav><!-- #site-navigation -->


	<div id="content" class="site-content">



