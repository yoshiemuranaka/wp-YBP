<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
			<div class="nav-logo"><p>Your Best Prep</p></div>
			<div class="nav-menu">
				<div class="menu burger show-sm"><a>&#9776;</a></div>
				<div class="menu inline-list hide-sm">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'header-nav-menu' ) ); ?>
				</div>		
			</div>
		</div>
	</nav><!-- #site-navigation -->


	<div id="content" class="site-content">



