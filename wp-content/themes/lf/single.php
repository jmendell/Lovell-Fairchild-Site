<?php 
$featured_image = get_the_post_thumbnail_url();
?>
<section class="hero" style="background-image: url(<?=$featured_image?>);background-size: cover;height: 600px;">
	<?php get_template_part('templates/section', 'stars'); 
	?>	
</section>
<div class="content-container news-content" style="padding-top: 85px;">
	<?php get_template_part('templates/content-single', get_post_type()); ?>
</div>
