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

			<!-- GETTING SERVICES CUSTOM POST TYPE -->
			<div class="services_post">
				<?php 
					$args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args ); 
				?>
				<div class="services_post__icons">
					<div class="grid">
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col one-quarter icon-collapse">
				  			<a href="#<?php the_ID(); ?>">
					  			<?php the_post_thumbnail();  ?>
					  			<h3 class="service__caption"><?php the_field('icon_caption') ?></h3>
				  			</a>
							</div>
					<?php endwhile;?>		
					</div>
				</div>

			  <div class="services_post__content">	
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="service_post__content-area">
				  	<h3 class="service__title" id="<?php the_ID(); ?>"><?php the_title(); ?></h3>
				  	<p class="service_post__content"><?php the_content(); ?></p>
					</div>
				<?php endwhile;?>	
			  </div>
			</div> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();