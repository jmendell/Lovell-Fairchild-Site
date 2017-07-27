<?php
/**
 * Template Name: Clients
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/section', 'hero-slider'); ?>
	<?php
		$terms_array = new WP_Term_Query(array('taxonomy' => 'client_type'));
		$terms = sort_categories_by_order($terms_array->terms);
	?>
	<section class="client-types">
		<?php foreach ($terms as $term): ?>
			<?php
				$term_settings = json_decode($term->description)[0];
				$image_orientation = $term_settings->image ?: 'portrait';
				if ($image_orientation == 'portrait') {
					$client_count = 8;
				}else{
					$client_count = 9;
				}
			?>
			<section class="type">
				<div class="content-container">
					<h3 class="section-title"><?php echo $term->name; ?></h3>
					<?php
						$args = array(
							'post_type'      => 'clients',
							'posts_per_page' => $client_count,
							'orderby'        => 'menu_order',
							'order'          => 'ASC',
							'meta_query' => array(
								array(
									'key' => '_thumbnail_id',
									'compare' => 'EXISTS'
								),
							),
							'tax_query' => array(
								array(
									'taxonomy' => 'client_type',
									'field'    => 'term_id',
									'terms'    => $term->term_id
								)
							),
						);
						$loop = new WP_Query( $args );
					?>
					<ul class="client-feed">
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php
							//Getting the correct orientation if a thumbnail exists.
							// Otherwise using the defualt image
							if (has_post_thumbnail()) {
								if ($image_orientation == "landscape") {
									$image = get_the_post_thumbnail_url(null, 'client-landscape-thumb');
								}else{
									$image = get_the_post_thumbnail_url(null, 'client-portrait-thumb');
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
					<a href="<?php echo get_term_link($term); ?>" class="more-clients">More <?php echo $term->name; ?> Clients <span class="arrow">></span></a>
				</div>
			</section>
		<?php endforeach ?>
	</section>
<?php endwhile; ?>