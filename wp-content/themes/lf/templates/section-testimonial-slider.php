<div class="testimonial-wrap">
	<span class="quote">"</span>
	<section class="testimonial-slides">
		<div class="content-container">
			<?php if( have_rows('testimonial_slides')): ?>
				<div class="testimonial-slider">
				<?php while( have_rows('testimonial_slides') ): the_row(); 
				
					$content = get_sub_field('content');
					$author = get_sub_field('author');

					?>

					<div class="test-slide">
						<p class="content"><?php echo $content; ?></p>
						<h4 class="author"><?php echo $author; ?></h4>
					</div>

				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	</div>