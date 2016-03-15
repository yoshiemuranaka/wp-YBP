<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<nav id="site-navigation" class="main-navigation" role="navigation">

			<div class="grid">
				<div class="col one-third sm-two-thirds alpha">
					<a href="http://localhost:8888/wp-YBP">
					<p>Your Best Prep</p>
					<!-- <img src="http://localhost:8888/wp-YBP/wp-content/uploads/2016/03/logo.png"> -->
					</a>
				</div>
				<div class="col two-thirds sm-one-third omega">
					<div class="hide-sm">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'header-nav-menu' ) ); ?>
					</div>
				</div>
			</div>
	</nav><!-- #site-navigation -->


	<div id="content" class="site-content">



