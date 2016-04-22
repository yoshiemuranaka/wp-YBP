<?php 
/* Template Name: Services */
 ?>


 <?php 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- GETTING PAGE CONTENT -->
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="banner">
				<div class="banner-content">
					<h1>
						<?php the_field('banner_header'); ?>
					</h1>
				</div>
			</div>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();