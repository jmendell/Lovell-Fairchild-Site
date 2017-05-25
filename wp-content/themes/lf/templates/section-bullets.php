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
				$sub = get_sub_field('sub_description');
				$details= get_sub_field('details');

		
				?>

				<li>
					<?php if ($icon): ?>
						<div class="bullet-image">
							<img src="<?php echo $icon; ?>" alt="icon">
						</div>
					<?php endif ?>
					<?php if ($title): ?>
						<h2 class="title-copy"><?php echo $title; ?></h2>
					<?php endif ?>
					<?php if ($sub): ?>
						<p><span class="accent-color-brand"><?php echo $sub; ?></span></p>
					<?php endif ?>
					<?php if ($details): ?>
						<p class="details-copy"><?php echo $details; ?></p>
					<?php endif ?>
				</li>
		
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>