<?php 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="page-content">

				<h3>Page not found</h3>
				<p>Oops! We can't find the page you're looking for.</p>
				<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Return to Home Page</a></h3>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();