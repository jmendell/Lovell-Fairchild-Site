<?php 
/*
Template Name: News
*/
get_template_part('templates/section', 'hero-news'); 

$news_args = array( 'post_type' => 'post', 'posts_per_page' => -1);
$news_loop = new WP_Query( $news_args );
?>


<section class="about-content">
	<div class="content-container">


			<?php if (!$news_loop->have_posts()) : ?>
			  <div class="alert alert-warning">
			    <?php _e('Sorry, no results were found.', 'sage'); ?>
			  </div>
			  <?php get_search_form(); ?>
			<?php endif; ?>

			<?php while ($news_loop->have_posts()) : $news_loop->the_post(); ?>

				
	  			<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

			  		
			<?php endwhile; ?>

			<?php //the_posts_navigation(); ?>

	</div>
</section>
