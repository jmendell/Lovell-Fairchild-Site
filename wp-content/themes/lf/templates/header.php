<?php
	$header_position = get_field('header_position') ?: 'default';
	$header_theme = get_field('header_theme') ?: 'default';
	$logo = get_field('site_logo', 'OPTIONS');
	$logo_dark = get_field('site_logo_dark', 'OPTIONS');
?>
<header class="header position-<?php echo $header_position; ?> theme-<?php echo $header_theme; ?> <?php echo header_theme_overrides(); ?>" role="banner">
	<div class="container">
		<a class="brand" href="<?= esc_url(home_url('/')); ?>">
			<?php if ($header_theme == "dark" || header_theme_overrides()): ?>
				<img src="<?php echo $logo_dark; ?>" alt="logo">
				<?php else: ?>
				<img src="<?php echo $logo; ?>" alt="logo">
			<?php endif ?>
		</a>
		<div class="menu-options">
			<a href="/contact" data-modal="contact" class="cta-button alt">Request an Interview</a>
			<div class="menu-toggle">
				<span class="center-line"></span>
			</div>
		</div>
	</div>
</header>