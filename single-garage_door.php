<!-- Custom posts * using get_terms and previous/next posts and also getting the title and content of post -->
<?php get_header();

$categories = get_terms('garge_door');

foreach( $categories as $category ) { $cat_name = $category->name;}
 ?>

		
	
			
						
				 <a href="<?php echo  get_site_url() ?>/garage-doors">GARAGE DOORS</a> &nbsp; | &nbsp; <a href=""><?php echo $cat_name ?></a></h6>    
				<?php the_title(); ?>
				<?php echo $cat_name  ?></h1>
				<p><?php the_content(); ?>

				<?php partial('addthis') ?>



	 <?php the_title(); ?> 

		<?php
		
		
		$prev_post = get_previous_post();
		if (!empty( $prev_post )): ?>
		
		

		
				<?php echo get_the_post_thumbnail($prev_post->ID); ?>

				 <h2><?php echo $prev_post->post_title ?></h2>
				<p><?php echo $prev_post->post_content ?> </p> <br>
				<a href="<?php echo $prev_post->guid ?>" class="home-button">Enquire now</a>
		
		<?php endif ?>

		<?php
		$next_post = get_next_post();
		if (!empty( $next_post )):  ?>
			
		
				<?php echo get_the_post_thumbnail($next_post->ID); ?>
	
				 <h2><?php echo $next_post->post_title ?></h2>
				<p><?php echo $next_post->post_content ?> </p> <br>
				<a href="<?php echo $next_post->guid ?>" class="home-button">Enquire now</a>
		
		<?php endif; ?>






<?php get_footer(); ?>