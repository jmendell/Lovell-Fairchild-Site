<?php
/**
 * Template Name: Services
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/section', 'hero'); ?>
	<?php if( have_rows('services')): ?>
		<section class="service-sections">
			<div class="content-container">
			<?php $i = 1; while( have_rows('services') ): the_row(); 
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				
				?>
						
				
					<div class="service">
						<h2><img src="<?php echo $icon; ?>" alt="icon"> <?php echo $title; ?></h2>
						<?php if( have_rows('sub_services')): ?>
							<ul class="sub-service-list">
							<?php while( have_rows('sub_services') ): the_row(); 

								$title = get_sub_field('title');
								$description = get_sub_field('description');
								?>
						
								<li>
									<p><span class="accent-color-brand"><?php echo $title; ?></span> <?php echo $description; ?></p>
								</li>
						
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					
		
			<?php $i++; endwhile; ?>
			</div>
		</section>
	<?php endif; ?>
<?php endwhile; ?>
