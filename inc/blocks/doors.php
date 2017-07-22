<?php
 /*
	Calling this block will return the categories from wp core
	the category link will be send you to archive.php 
 */
?>
<?php 


	$categories = get_categories( array(
	'orderby' => 'name',
	'order'   => 'ASC'
) );
 



?>



					<?php $i = 0; ?>
					<?php foreach( $categories as $category ) {
						  $category_link = sprintf( 
							'<a href="%1$s" alt="%2$s">%3$s</a>',
							esc_url( get_category_link( $category->term_id ) ),
							esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
							esc_html( $category->name )
						);
						?>
						<?php //if( $i % 2 == 0 ) { ?>
				
					
								<a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>" >

									<img src="<?php echo get_template_directory_uri(); ?>/images/300x300_switch.png" class="img-responsive"  />
								 </a>

					
					 <?php echo $category->name?>  
							  
								<p><?php echo $category->description; ?></p>
						
							   <a class="choose-link" href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>">VIEW OUR RANGE</a>
							

					   <?php ++$i; ?>
			 
			  
				 
			   
	
