<?php if( have_rows('social_items', 'OPTIONS')): ?>
	<div class="social-nav">
		<ul>
			<?php while( have_rows('social_items', 'OPTIONS') ): the_row(); 

			//declare variables
			$social = get_sub_field('social_network');
			$link = get_sub_field('link');

			?>

			<li>
				<a href="<?php echo $link; ?>">
					<?php get_template_part('templates/svg/' . $social); ?>
				</a>            
			</li>

			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>