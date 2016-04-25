<?php 
/* Template Name: Team */
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
			
			<!-- GETTING TEAM MEMBERS CUSTOM POST TYPE -->
			<?php 
				$args = array( 'post_type' => 'team_members', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
			?>
				  
				  <div class="team_member_post">
				  	<div class="team_member_post__img">
				  		<?php the_post_thumbnail();  ?>
				  	</div>
				  	<h3 class="team_member_post__title"><?php the_title(); ?></h3>
				  	<h3 class="team_member_post__role"><?php the_field('role') ?></h3>
				  	<p class="team_member_post__content"><?php the_content(); ?></p>
				  	
				  </div>
				  
			<?php endwhile;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();