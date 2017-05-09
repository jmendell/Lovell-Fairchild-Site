<section class="bullets">
	<div class="content-container">
		<?php $section_title = get_field('bullet_section_title'); ?>
		<?php if ($section_title): ?>
			<h2 class="section-title"><?php echo $section_title; ?></h2>
		<?php endif ?>
		<?php if( have_rows('bullet_items')): ?>
			<ul>
			<?php while( have_rows('bullet_items') ): the_row();
		
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				$copy = get_sub_field('copy');
				$link = get_sub_field('link');
		
				?>

				<li>
					<?php if ($icon): ?>
						<div class="bullet-image">
							<img src="<?php echo $icon; ?>" alt="icon">
						</div>
					<?php endif ?>
					<?php if ($title): ?>
						<h3><?php echo $title; ?></h3>
					<?php endif ?>
					<?php if ($copy): ?>
						<p><?php echo $copy; ?></p>
					<?php endif ?>
					<?php if ($link): ?>
						<a href="<?php echo $link; ?>" class="cta-button">Learn More</a>
					<?php endif ?>
				</li>
		
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>