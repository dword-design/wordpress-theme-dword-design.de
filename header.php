<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title('|', 1, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta property=og:image content="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail.jpg" />
		<link rel="image_src" href="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail.jpg" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16" />
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

		<link rel="pingback" href="<?php bloginfo('wpurl'); ?>/xmlrpc.php" />
		<link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="<?php bloginfo('wpurl') ?>/feed/" />

		<?php wp_head(); ?>

		<script>
			jQuery(document).ready(function($) {

				$('.animsition').animsition({
					inClass : 'fade-in-left',
					outClass : 'fade-out-right',
					inDuration : 1500,
					outDuration : 800,
					loading : true,
					linkElement: '.animsition-link'
				});

				$('.gallery-item').hover(function() {
					var caption = $(this).find('.gallery-caption');
					caption.css('transform', 'scaleY(1)');
				},
				function() {
					var caption = $(this).find('.gallery-caption');
					caption.css('transform', 'scaleY(0)');
				});
			});
		</script>
	</head>
	<body <?php body_class() ?>>
		<div id="top" class="clearfix">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></img></a>
			<div id="portrait"></div>
			<div id="menu"><?php if(!function_exists('dynamic_sidebar') || dynamic_sidebar('Menu')) {} ?></div>
			<div id="border"></div>
			<div id="privacy">
				<a href="<?php echo esc_url(home_url('/impressum')); ?>">Impressum</a> | <a href="<?php echo esc_url(home_url('/datenschutz')); ?>">Datenschutz</a>
			</div>
		</div>
		<div class="content" class="animsition">
