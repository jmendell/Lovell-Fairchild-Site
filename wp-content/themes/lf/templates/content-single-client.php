<?php while (have_posts()) : the_post(); ?>
	<?php
		$url = get_field('website_url');
		$press_url = get_field('press_assets_external_url');
	?>
	<article <?php post_class(); ?>>
		<div class="entry-content">
			<div class="content-container">
				<?php # 2 column layout if the thumb exists ?>
				<?php if (get_the_post_thumbnail_url()): ?>
				<div class="col-6 center">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</div>
				<div class="col-6">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php if ('' !== $post->post_content): ?>
					<div class="content">
						<?php the_content(); ?>
					</div>
					<?php endif ?>
					<?php if ($url): ?>
						<div>
							<a href="<?php echo $url; ?>" class="cta-button">View Website</a>
						</div>
					<?php endif ?>
					<?php if ($press_url): ?>
						<div>
							<a href="<?php echo $press_url; ?>" class="cta-button" target="_BLANK">Press Assets</a>
						</div>
					<?php endif ?>
				</div>
				<?php endif ?>
				<?php # Single Column layout if there isn't a thumb ?>
				<?php if (!get_the_post_thumbnail_url()): ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php if ('' !== $post->post_content): ?>
					<div class="content">
						<?php the_content(); ?>
					</div>
					<?php endif ?>
					<?php if ($url): ?>
						<a href="<?php echo $url; ?>" class="cta-button" target="_BLANK">View Website</a>
					<?php endif ?>
					<?php if ($press_url): ?>
						<a href="<?php echo $press_url; ?>" class="cta-button" target="_BLANK">Press Assets</a>
					<?php endif ?>
				<?php endif ?>
			</div>
		</div>
	</article>
<?php endwhile; ?>