<?php  
global $background; 
$id = get_the_ID();
?>

<section class="hero">
	<?php get_template_part('templates/section', 'stars'); ?>
	<?php //site_background_image($background); 

	
		$background_images = get_field('background_image', $id);
		$count = count($background_images);
		if( $background_images ) :
			$num = 0;
			echo '<section class="hero--slider">';
			foreach($background_images as $background_image) {
				
				$desktop_image = $background_image['desktop_image'];
				$desktop = $background_image['desktop_image']['url'];
				$alt_text = $background_image['desktop_image']['alt'];
				$mobile_image = $background_image['mobile_image'];
				$mobile = $background_image['mobile_image']['url'];
				?>
				<figure class="background<?php if($num == $count-1){echo ' current';}?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/loader.png" class="responsive"
						alt="<?=$alt_text?>" data-src='{"m":"<?php echo $mobile; ?>","d":"<?php echo $desktop; ?>"}'
					/>
				</figure>
				
			 <?php 
			 	$num++;
				}
			echo '</section>';
		endif;?>
	<div class="content-container">
		<h1><?php the_title(); ?></h1>
	</div>
</section>