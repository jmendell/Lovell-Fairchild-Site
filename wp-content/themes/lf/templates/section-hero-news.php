<?php  
global $background; 
$id = get_the_ID();
?>

<section class="hero hero--news">
	<?php get_template_part('templates/section', 'stars'); ?>
	<?php //site_background_image($background); 
	if( have_rows('background_image') ):
		$background_image = get_field('background_image', $id);
		while ( have_rows('background_image') ) : the_row();
		$desktop_image = $background_image[0]['desktop_image'];
		$desktop = $desktop_image['url'];
		$alt_text = $desktop_image['alt'];
		$mobile = $background_image[0]['mobile_image']['url'];
	?>

		<figure class="background" style="background-position: center top">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/loader.png" class="responsive"
				alt="<?php echo $alt_text; ?>" data-src='{"m":"<?php echo $mobile; ?>","d":"<?php echo $desktop; ?>"}'
			/>
		</figure>

		<?php endwhile;

	endif;
	?>
	<div class="content-container">
		<h1><?php the_title(); ?></h1>
	</div>
</section>