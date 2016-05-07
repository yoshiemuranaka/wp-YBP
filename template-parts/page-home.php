<?php 
/* Template Name: Home */
 ?>

 <?php 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- GETTING PAGE CONTENT -->
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<div class="banner logo">
					<div class="banner-content">
						<?php  get_template_part('/images/header', 'logo.svg'); ?>
					</div>
				</div>
			<?php the_content(); ?>
			<span class="cta"><?php the_field('call_to_action') ?></span>
			<?php endwhile; endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();