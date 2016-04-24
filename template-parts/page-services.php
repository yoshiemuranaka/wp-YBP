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
			<div class="services-icons">
				<div class="grid">
					<div class="col one-quarter">
						<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/services-icon--test-prep.png" alt="Your Best Prep Services Standardized Test Preparation">
						<h3>Standardized Test Preparation</h3>	
					</div>
					<div class="col one-quarter">
						<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/services-icon--academic-subjects.png" alt="Your Best Prep Services Academic Subjects">
						<h3>Academic Subjects</h3>	
					</div>
					<div class="col one-quarter">
						<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/services-icon--college-essay.png" alt="Your Best Prep Services College Essay Coaching">
						<h3>College Essay Coaching</h3>	
					</div>
					<div class="col one-quarter">
						<img class="icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/services-icon--differentiated-instruction.png" alt="Your Best Prep Services Differentiated Instruction for Students with Disabilities">
						<h3>Differentiated Instruction</h3>	
					</div>
				</div>
			</div>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();