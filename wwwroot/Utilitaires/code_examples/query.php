<?php 
	$the_query = new WP_Query('post_type=foo&posts_per_page=-1');
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
	
				// do stuffs
	
			endwhile;
		endif;
	wp_reset_query();
?>