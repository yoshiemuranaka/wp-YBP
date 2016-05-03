<?php 
/* Template Name: Testimonials */
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
			
			<!-- GETTING SERVICES CUSTOM POST TYPE -->
			<?php 
				$args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
			?>
				  
				  <div class="testimonial_post js-read-more">
				  	<div class="testimonial_post__content">
				  		<?php the_content(); ?>
							<div class="read-more__overlay"></div>
				  	</div>
				  	<h3 class="read-more__target js-read-more__target">Read more</h3>
				  	<h3 class="testimonial_post__title">&#8212; <?php the_title(); ?></h3>
				  	<h3 class="testimonial_post__location"><?php the_field('location') ?></h3>
				  </div>
				  
			<?php endwhile;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();