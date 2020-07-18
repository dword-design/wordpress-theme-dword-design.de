<?php

	function jquery_enqueue() {
		wp_enqueue_script('jquery');
    wp_enqueue_script('animsition.js', get_template_directory_uri() . '/node_modules/animsition/dist/js/animsition.js', array('jquery'), '1.0.0', true);
  }
	add_action("wp_enqueue_scripts", "jquery_enqueue");

	if (function_exists('register_sidebar')) {

		register_sidebar(array('name' => 'Menu',
								'id' => 'sidebar-1',
								'description' => '',
								'before_widget' => '',
								'after_widget' => ''));
	}

	if (!function_exists('iweb_reverse_comments')) {
		function iweb_reverse_comments($comments) {
			return array_reverse($comments);
		}
	}
	add_filter ('comments_array', 'iweb_reverse_comments');

	function add_menuclass($ulclass) {
		return preg_replace('/<a /', '<a class="animsition-link"', $ulclass);
	}
	add_filter('wp_nav_menu','add_menuclass');

	/*
	| Inspired by http://tutorialshares.com/youtube-oembed-urls-remove-showinfo/
	*/
	function sky_oembed_filter($code) {
		$return = str_replace('frameborder="0" allowfullscreen', 'style="border: none"', $code);
		return $return;
	}
	add_filter('embed_oembed_html', 'sky_oembed_filter');
?>
