<!-- Archive for showing categories you get here by coming from pages (blocks) -->

<?php get_header(); ?>

 <a href="<?php echo  get_site_url() ?>/garage-doors">GARAGE DOORS</a>                    
			<?php single_cat_title(); ?> </h2>
				 
				<?php echo category_description(); ?>
				
				 <?php   $categories = get_categories( array(
							'orderby' => 'name',
							'order'   => 'ASC'
							) ); ?>     
				<!--// foreach( $categories as $category ) { -->
				<?php if( have_posts() ) {
								while( have_posts() ) {   the_post(); 
								
									?>
									
				
										<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'preview-thumb' ); ?>" class="img-responsive">
							<?php the_title(); ?>
										<?php the_excerpt( ); ?> 
										<a class="home-button" href="<?php the_permalink(); ?>">ENQUIRE NOW</a>
					
					
			
				<?php  } else{ ?>

			
										<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'preview-thumb' ); ?>" class="img-responsive">
									
						
										<?php the_excerpt( ); ?> 
								
						
			
						 
				<?php }  $i++; ?>                       
					
				 <?php }  }   ?> 




<?php get_footer(); ?>