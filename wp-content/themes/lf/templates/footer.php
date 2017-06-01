<?php
	$title = get_bloginfo( 'name' );
	$bg = get_field('footer_bg','OPTIONS');
	$address = get_field('address','OPTIONS');
	$phone = get_field('phone','OPTIONS');
	$phone_clean = preg_replace('/\D+/', '', $phone);
	// $social = get_sub_field('social_network','OPTIONS');
	// $social_link = get_sub_field('link' , 'OPTIONS');
?>

<footer class="content-info">
	<div class="footer-top" style="background-image:url(<?php echo $bg; ?>);">
		<div class="details">
			<p class="site-title"><?php echo $title; ?></p>
			<p><?php echo $address; ?></p>
			<p><?php the_field('email', 'OPTIONS') ?></p>
			<a href="tel:<?php echo $phone_clean; ?>">P: <?php echo $phone; ?></a>
			<div class="footer-social">
				<?php echo get_template_part('templates/social-nav'); ?>
			</div>
		</div>
		<a href="/contact" class="cta-button">Talk To Us</a>
	</div>
	<div class="footer-bottom">
		<div class="content-container">
			<p class="copyright">© <?php echo date('Y'); ?> LOVELL-FAIRCHILD COMMUNICATIONS. ALL RIGHTS RESERVED.</p>
		</div>
	</div>
</footer>
