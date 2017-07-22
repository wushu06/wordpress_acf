<?php
 /*
	Calling this block will return the custom posts with repeater field 
 */
?>

		<?php $i = 0; ?>
		<?php if( $items = theme( 'items' ) ) { ?>
			<?php foreach( $items as $item ) { ?>
				
				<?php if( $i % 2 == 0 ) { ?>
					
							<img src="<?php echo $item['image']['sizes']['technical']; ?>" title="<?php echo esc_attr( $item['title'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="img-responsive"  />
							
						<?php echo $item['title']; ?>



								<?php echo $item['body']; ?>
				
				<?php } else { ?>
				><?php echo $item['title']; ?></h2>


								<?php echo $item['body']; ?>
						
						
							<img src="<?php echo $item['image']['sizes']['technical']; ?>" title="<?php echo esc_attr( $item['title'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="img-responsive" />
					
						

				
				<?php } ?>

				<?php ++$i; ?>
			<?php } ?>
		<?php } ?>

		
