<section class="video-bullets">
	<ul>
	<?php if( have_rows('video_bullets')): ?>
		<?php while( have_rows('video_bullets') ): the_row();

			$placeholder = get_sub_field('placeholder');
			$type = get_sub_field('type');
			$video_id = get_sub_field('video_id');
			?>
			<li data-video-modal="<?php echo $video_id; ?>" data-video-type="<?php echo $type; ?>">
				<figure style="background-image:url(<?php echo $placeholder; ?>);">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/play.png" alt="Play Button">
				</figure>
			</li>
	
		<?php endwhile; ?>
	<?php endif; ?>
	</ul>
</section>