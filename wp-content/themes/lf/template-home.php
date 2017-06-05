<?php
/**
 * Template Name: Home
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php $bg = get_field('background_image'); ?>
	<section class="hero-tall">
		<figure class="video-background">
			<video width="100%" height="100%" controls loop="1" muted="1" autoplay="1">
				<source src="/video/hero.mp4" type="video/mp4">
			</video>
			<figure style="background-image:url(<?php echo $bg[0]['mobile_image']['url'] ?>);" class="mobile-bg"></figure>
			<img class="bg" src="<?php echo get_template_directory_uri(); ?>/dist/images/bg.jpg">
			
			<div class="flickeringStars">
			  	<div><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Stars.png"></div>
			  	<div><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Stars.png"></div>
			  	<div><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Stars.png"></div>
			  	<div><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Stars.png"></div>
			  	<div><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Stars.png"></div>
			  	<div><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Stars.png"></div>
			</div>
		</figure>
		<figure class="tree" style="background-image:url(<?php echo get_template_directory_uri(); ?>/dist/images/tree.png);"></figure>
		<div class="title-wrap">
			<h1 class="title">Where Messages</h1>
			<h1 class="title-accent">Grow Mighty</h1>
		</div>
	</section>
	<?php get_template_part('templates/section', 'clients-preview'); ?>
	<?php $bullets = get_field('bullet_items'); ?>
	<?php if (is_array($bullets) && $bullets[0]): ?>		
		<?php get_template_part('templates/section', 'bullets'); ?>
	<?php endif ?>
	<?php $video_bullets = get_field('video_bullets'); ?>
	<?php if (is_array($video_bullets) && $video_bullets[0]): ?>		
		<?php get_template_part('templates/section', 'video-bullets'); ?>
	<?php endif ?>

	<?php get_template_part('templates/section', 'media-slider'); ?>
<?php endwhile; ?>
