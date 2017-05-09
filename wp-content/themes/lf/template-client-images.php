<?php
/**
 * Template Name: Client Images
 */
?>
<?php
	$args = array(
		'post_type' => 'clients',
		'posts_per_page' => -1,
		'meta_query' => array(
			array(
				'key' => '_thumbnail_id',
				'compare' => 'NOT EXISTS'
			),
		),
	);
	$loop = new WP_Query( $args );
?>

<div class="container first">
	<div class="content-container">
	<h2>Need Image</h2>
	<style>
		.container{
			margin-bottom:25px;
		}
		.first{
			padding-top:100px;
		}
	</style>
	<ul>
	<?php $i = 0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php echo $i; ?> <?php the_title(); ?></a>
		</li>
	<?php $i++; endwhile; wp_reset_postdata(); ?>
	</ul>
	</div>
</div>
<?php
	$args = array(
		'post_type' => 'clients',
		'posts_per_page' => -1,
		'meta_query' => array(
			array(
				'key' => '_thumbnail_id',
				'compare' => 'EXISTS'
			),
		),
	);
	$loop = new WP_Query( $args );
?>

<div class="container">
	<div class="content-container">
	<h2>Has Image</h2>
	<style>
		.container{
			padding:100px 0;
		}
	</style>
	<ul>
	<?php $i = 0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php echo $i; ?> <?php the_title(); ?></a>
		</li>
	<?php $i++; endwhile; wp_reset_postdata(); ?>
	</ul>
	</div>
</div>