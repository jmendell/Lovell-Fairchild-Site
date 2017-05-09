<?php
	$title = get_bloginfo( 'name' );
	$bg = get_field('footer_bg','OPTIONS');
	$address = get_field('address','OPTIONS');
	$phone = get_field('phone','OPTIONS');
	$phone_clean = preg_replace('/\D+/', '', $phone);
?>

<footer class="content-info">
	<div class="footer-top" style="background-image:url(<?php echo $bg; ?>);">
		<div class="details">
			<p class="site-title"><?php echo $title; ?></p>
			<p><?php echo $address; ?></p>
			<a href="tel:<?php echo $phone_clean; ?>">P: <?php echo $phone; ?></a>
		</div>
		<a href="/contact" class="cta-button">Get In Touch</a>
	</div>
	<div class="footer-bottom">
		<div class="content-container">
			<p class="copyright">© <?php echo date('Y'); ?> LOVELL-FAIRCHILD COMMUNICATIONS. ALL RIGHTS RESERVED.</p>
		</div>
	</div>
</footer>
