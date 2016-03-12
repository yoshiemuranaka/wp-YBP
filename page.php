<?php 

get_header(); ?>

<!-- GETTING PAGE CONTENT -->
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>

<?php 
get_footer();