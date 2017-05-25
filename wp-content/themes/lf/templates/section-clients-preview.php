<?php

	$feed_sizes = array(
		0 => array(
			'cols'  => 'cols-2-3',
			'image' => 'client-large',
		),
		1 => array(
			'cols'  => 'cols-1-3',
			'image' => 'client-small',
		),
		2 => array(
			'cols'  => 'cols-1-3',
			'image' => 'client-small',
		),
		3 => array(
			'cols'  => 'cols-2-3',
			'image' => 'client-large',
		),
		4 => array(
			'cols'  => 'cols-2-4',
			'image' => 'client-medium',
		)
	);

	$i    = 0;
?>
<?php if( have_rows('clients_preview')): ?>
<section class="clients-preview">
	<div class="section-header">
		<div class="content-container">
			<h2 class="section-title"></h2>
			<h2>Communication is a vast power, and PR is the key. </h2>
		</div>
	</div>
	<ul class="client-list">
	<?php 
		while( have_rows('clients_preview') ): the_row(); 
		$id        = get_sub_field('client');
		$title     = get_the_title($id);
		$cats      = get_the_category($id);
		$permalink = get_permalink($id);
		$cols      = $feed_sizes[$i]['cols'];
		$image     = $feed_sizes[$i]['image'];
		$terms     = get_the_terms($id, 'client_type');
	?>
	
		<li class="client-item <?php echo $cols; ?>">
			<a href="<?php echo $permalink; ?>">
				<figure class="client-image" style="background-image:url(<?php echo get_the_post_thumbnail_url($id, $image); ?>);"></figure>
				<div class="info">
					<h3><?php echo $title; ?></h3>
					<?php echo format_terms($terms); ?>
				</div>
			</a>
		</li>

	<?php $i++; endwhile; ?>
	<a href="/clients" class="client-item alt cols-2-4">
			<div class="info">
				<p>View</p>
				<h3>All Clients</h3>
			</div>
		</a>
	</ul>
</section>
<?php endif; ?>