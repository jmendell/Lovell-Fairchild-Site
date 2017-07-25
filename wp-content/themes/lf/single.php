<?php //get_template_part('templates/page', 'header'); ?>

<?php //get_template_part('templates/section', 'hero-news'); ?>

<div class="content-container news-content">
	<?php get_template_part('templates/content-single', get_post_type()); ?>
</div>

<?php 

//echo get_the_posts_navigation();

//the_posts_navigation(); 

?>

