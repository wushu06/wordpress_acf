<!-- All pages created will be have a block and the function get_page_structure() assign which block will be used -->

<?php
get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		get_page_structure( 'page_structure' );

	}
}

get_footer();