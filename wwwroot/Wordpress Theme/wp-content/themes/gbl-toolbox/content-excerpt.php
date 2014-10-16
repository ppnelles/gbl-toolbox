<article class="h-entry excerpt">
	<?php
		if(has_post_thumbnail( $post->ID ) && ( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full') ) ) : 
				$thumb = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID), 'thumbnail' ); 
		?>
				<figure class="u-photo">
						<?php 
							$thumb = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID), 'thumbnail' ); 
						?>
						<a href="<?php the_permalink(); ?>" class="u-url" title="Lire cet article sur notre blog">
							<img src="<?php echo $thumb[0]; ?>" alt="<?php the_title(); ?>" />
						</a>
				</figure>
		<?php endif;
	?>
	<div class="content">
		<header>
			<time class="dt-published" datetime="<?php the_time('Y-m-d G:i:s'); ?>">Le <?php echo get_the_date(); ?></time>
			<h1 class="p-name"><a href="<?php the_permalink(); ?>" class="u-url" title="Lire cet article sur notre blog"><?php the_title(); ?></a></h1>
		</header>
		<div class="p-summary">
			<p><?php echo gbl_truncate((strip_tags(get_the_content())), 200, $etc = '... ', $break_words = false, $middle = false);?> </p>
			<a href="<?php the_permalink(); ?>" class="u-url" title="Lire cet article sur notre blog">Lire la suite</a>
		</div>
	</div>
</article>