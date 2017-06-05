<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script>
  	$lf = {};
  	$lf.logo = "<?php the_field('site_logo', 'OPTIONS'); ?>";
	$lf.logoAlt = "<?php the_field('site_logo_dark', 'OPTIONS'); ?>";
	$lf.headerTheme = "<?php the_field('header_theme'); ?>";
  </script>
</head>
