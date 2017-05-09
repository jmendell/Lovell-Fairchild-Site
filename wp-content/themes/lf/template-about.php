<?php
/**
 * Template Name: About
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/section', 'hero'); ?>
	<section class="about-content">
		<div class="content-container">
			<div class="col-4">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="feature">
			</div>
			<div class="col-8">
				<div class="title">
					<span class="section-title">You do what you do.</span>
					<h2>We make sure your audiences know.</h2>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="slogan-section">
		<figure class="background">
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/loader.png" class="responsive" alt="" data-src='{"m":"<?php echo get_field('background_image')[1]['mobile_image']['url']; ?>","d":"<?php echo get_field('background_image')[1]['desktop_image']['url']; ?>"}'/>
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/loader.png" alt="background">
		</figure>
		<div class="content-container">
			<h3>If reaching the right people is your goal, you can get there from here.</h3>
		</div>
	</section>
	<section class="team">
		<div class="content-container">
			<div class="col-5">
				<div class="title">
					<span class="section-title">Meet the team.</span>
					<h2>Who you work with matters</h2>
					<div class="content">
						<p><?php the_field('team_description'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-7">
				<?php if( have_rows('team')): ?>
					<ul class="team-list">
					<?php while( have_rows('team') ): the_row();

						$img = get_sub_field('image');
						$name = get_sub_field('name');
						$role = get_sub_field('role');
						?>

						<li class="team-member">
							<img src="<?php echo $img; ?>" alt="Team Member">
							<div class="info">
								<h4><?php echo $name; ?></h4>
								<p><?php echo $role; ?></p>
							</div>
						</li>

					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endwhile; ?>
