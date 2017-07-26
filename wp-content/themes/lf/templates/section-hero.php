<?php  
global $background; 
?>

<section class="hero">
	<?php get_template_part('templates/section', 'stars'); ?>
	<?php site_background_image($background); ?>
	<div class="content-container">
		<?php the_title('<h1>','</h1>'); ?>
	</div>
</section>