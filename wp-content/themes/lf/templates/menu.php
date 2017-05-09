<section class="main-menu-modal menu-modal" data-header="dark">
	<figure style="background-image:url(<?php the_field('menu_background', 'OPTIONS') ?>);" class="menu-bg"></figure>
	<div class="content">
		<nav role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
			endif;
			?>
		</nav>
		<?php get_template_part('templates/social', 'nav'); ?>
		<ul class="contact-details">
			<li><?php echo get_bloginfo('name'); ?></li>
			<li><?php the_field('address', 'OPTIONS') ?></li>
			<li><?php the_field('phone', 'OPTIONS') ?></li>
		</ul>
	</div>
</section>