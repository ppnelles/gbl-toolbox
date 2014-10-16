<?php if(has_post_thumbnail( $post->ID ) && ( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full') ) ) : 
		$thumb = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID), 'full' ); 
?>
		<figure class="thumbnail">
				<?php 
					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID), 'full' ); 
				?>
				<img src="<?php echo $thumb[0]; ?>" alt="<?php the_title(); ?>" />
		</figure>
<?php endif; ?>