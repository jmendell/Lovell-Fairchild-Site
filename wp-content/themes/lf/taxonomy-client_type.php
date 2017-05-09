<?php
	$term_object = get_queried_object();
	$term_settings = json_decode($term_object->description)[0];
	$image_orientation = $term_settings->image ?: 'portrait';

	$args = array(
		'post_type'      => 'clients',
		'posts_per_page' => -1,
		'orderby'        => 'menu_order',
		'order'          => 'DEC',
		'tax_query' => array(
			array(
				'taxonomy' => 'client_type',
				'field'    => 'term_id',
				'terms'    => get_queried_object()
			)
		),
	);
	$loop = new WP_Query( $args );
?>
<section class="client-type-full-list">
	<div class="content-container">
		<ul class="client-feed">
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php
				//Getting the correct orientation if a thumbnail exists.
				// Otherwise using the defualt image
				if (has_post_thumbnail() && get_field('portrait_image')) {
					if ($image_orientation == "landscape") {
						$image = get_the_post_thumbnail_url(null, 'client-landscape-thumb');
					}else{
						$image = get_field('portrait_image')['sizes']['client-portait-thumb'];
					}
				}else{
					$image = get_field('clients_default_image', 'OPTIONS');
				}
			?>
			<li class="client image-orientation-<?php echo $image_orientation ?>">
				<a href="<?php the_permalink(); ?>">
					<figure class="client-bg" style="background-image:url(<?php echo $image; ?>);"></figure>
					<div class="info">
						<div>
							<?php the_title('<h5>', '</h5>'); ?>
							<span class="accent-color-brand more">(Read More)</span>
						</div>
					</div>
				</a>
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</section>