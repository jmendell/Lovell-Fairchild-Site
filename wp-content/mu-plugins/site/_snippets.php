<?php


if ( ! function_exists( 'site_get_background' ) ) :
/**
 * Display featured image when available.
 */
function site_get_background() {
	$background_image = get_field('background_image');
	$has_background = is_array($background_image) && $background_image[0]['desktop_image'] != '0' && $background_image[0]['mobile_image'] != '0';
	return $has_background ? $background_image : false;
}
endif;



if ( ! function_exists( 'site_background_image' ) ) :
/**
 * Display background image when available.
 */
function site_background_image($background = null, $figure_class = 'background', $image_class = 'responsive') {
	$background_image = (!$background) ? site_get_background() : $background;

	if ( $background_image ) :
		$desktop_image = $background_image[0]['desktop_image'];
		$desktop = $desktop_image['url'];
		$alt_text = $desktop_image['alt'];
		$mobile = $background_image[0]['mobile_image']['url'];
	?>
	<figure class="<?php echo $figure_class; ?>">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/loader.png" class="<?php echo $image_class; ?>"
			alt="<?php echo $alt_text; ?>" data-src='{"m":"<?php echo $mobile; ?>","d":"<?php echo $desktop; ?>"}'
		/>
	</figure>
	<?php
	endif;
}
endif;