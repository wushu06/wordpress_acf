<?php
 /*
	Calling this block will return the custom posts using wp_query
	what you call here will be showing up on created pages in wp and the permalink will be the custom posts
	for the custom posts use single-cusomtpost.php 
 */
?>
<?php
	// Page gallery 
	$args = array(
		// Only get published posts..
		'post_type'              => array( 'garage' ),
		'post_status'            => array( 'publish' ),



		// Get the latest results
		'order'                  => 'DESC',
		'orderby'                => 'rand',
	);

	// The Query
	$garage = new WP_Query( $args );
?>



			<?php   // The Loop
		 if ( $garage->have_posts() ) { ?>
		

			<?php
			while ( $garage->have_posts() ) {
				$garage->the_post();?>

			
						<img src="<?php echo get_the_post_thumbnail_url( ); ?>" > 
					
							<h1><?php the_title(); ?></h1><br>
							<a href="<?php the_permalink(); ?>" >View</a>
			

		<?php } } ?>	





