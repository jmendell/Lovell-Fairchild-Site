<?php if( have_rows('social_items', 'OPTIONS')): ?>
	<div class="social-nav">
		<ul>
			<?php while( have_rows('social_items', 'OPTIONS') ): the_row(); 

			//declare variables
			$social = get_sub_field('social_network');
			$link = get_sub_field('link');
			$class = get_sub_field('class');

			?>

			<li>
				<a href="<?php echo $link; ?>" target="_blank" class="<?php echo $class; ?>">
					<?php get_template_part('templates/svg/' . $social); ?>
				</a>
			</li>

			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>

