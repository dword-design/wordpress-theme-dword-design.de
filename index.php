<?php
	get_header();

	if ( have_posts() ) {
		while ( have_posts() ) :
			the_post();
			echo "<h1>";
			the_title();
			echo "</h1>";
			the_content();
		endwhile;
	}

	get_footer();
?>