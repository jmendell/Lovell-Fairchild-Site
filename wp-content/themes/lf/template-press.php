<?php
/**
 * Template Name: Press
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/section', 'hero'); ?>
	<?php if ('' !== get_post()->post_content): ?>
	<section class="content">
		<div class="content-container">
			<?php the_content(); ?>
		</div>
	</section>
	<?php endif ?>
	<?php
		$args = array( 'post_type' => 'press', 'posts_per_page' => -1);
		$loop = new WP_Query( $args );
	?>
	<?php if ($loop->have_posts()): ?>
	<section class="press-feed">
		<div class="content-container">
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php
				$date = explode(',', get_the_date('M,d', '', ''));
				$month = $date[0];
				$day = $date[1];
			?>
			<article class="press-post">
				<div class="inner">
					<div class="date">
						<span class="month"><?php echo $month; ?></span>
						<span class="day"><?php echo $day; ?></span>
					</div>
					<div class="info">
						<?php the_title('<h4>', '</h4>'); ?>
						<a href="<?php the_permalink(); ?>">( Read Here )</a>
					</div>
				</div>
			</article>
		<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</section>
	<?php endif ?>
<?php endwhile; ?>