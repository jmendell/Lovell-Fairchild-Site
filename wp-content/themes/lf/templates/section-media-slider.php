<section class="media-slider">
<h2 class="section-title"><?php echo get_field('media_slider_heading', $post->ID); ?></h2>
	<?php if( have_rows('media_slides')): ?>
		<div class="media-slides">
			<?php while( have_rows('media_slides') ): the_row(); 
		
				$slide = get_sub_field('slides');
		
				?>
			<div class="slide">
				<img src="<?php echo $slide; ?>" alt="media-logo" class="media-logo">
			</div>
		
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>