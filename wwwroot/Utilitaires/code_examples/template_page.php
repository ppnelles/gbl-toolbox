<?php
/**
 * Template Name: my template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
		<?php 
			$the_query = new WP_Query('post_type=foo&posts_per_page=-1');
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
			
						// do stuffs
			
					endwhile;
				endif;
			wp_reset_query();
		?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>