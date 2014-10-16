<?php
/**
 * @package Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" class="h-entry">
	<?php
		if(has_post_thumbnail( $post->ID ) && ( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full') ) ) : 
				$thumb = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID), 'thumbnail' ); 
		?>
				<figure class="u-photo">
					<?php 
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID), 'medium' ); 
					?>
					<a href="<?php the_permalink(); ?>" class="u-url" title="Lire cet article sur notre blog">
						<img src="<?php echo $thumb[0]; ?>" alt="<?php the_title(); ?>" />
					</a>
				</figure>
		<?php endif;
	?>
	<div class="content">
		<header>
			<h1 class="p-name"><?php the_title(); ?></h1>
			<time class="dt-published" datetime="<?php the_time('Y-m-d G:i:s'); ?>">Le <?php echo get_the_date(); ?></time>
		</header><!-- .entry-header -->

		<div class="e-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<p class="p-category"><span><?php _e('Article publié dans : ') ?></span> <?php the_category(', '); ?></p>
			<?php edit_post_link( __( 'Edit', 'toolbox' ), '<p class="edit-link">', '</p>' ); ?>
		</footer><!-- .entry-meta -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
