<?php
/**
 * Template Name: Contact
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<section class="contact-content">
		<?php site_background_image($background); ?>
		<div class="content-container">
			<div class="page-title center">Talk To Us</div>
			<div class="col-6">
				<ul class="contact-details">
					<li><?php echo get_bloginfo('name'); ?></li>
					<li><?php the_field('address', 'OPTIONS') ?></li>
					<li><?php the_field('phone', 'OPTIONS') ?></li>
					<li><?php the_field('email', 'OPTIONS') ?></li>
				</ul>
				<?php get_template_part('templates/social', 'nav'); ?>
			</div>
			<div class="col-6">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</div>
		</div>
	</section>
<?php endwhile; ?>