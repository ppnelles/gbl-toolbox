<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
<aside role="complementary">
	<?php //do_action( 'before_sidebar' ); ?>
	<?php //if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<div class="search">
			<?php get_search_form(); ?>
		</div>

		<div class="archives">
			<h1><?php _e( 'Archives', 'toolbox' ); ?></h1>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</div>

		<div class="meta">
			<h1><?php _e( 'Meta', 'toolbox' ); ?></h1>
			<ul>
				<?php wp_register(); ?>
				<aside><?php wp_loginout(); ?></aside>
				<?php wp_meta(); ?>
			</ul>
		</div>

	<?php //endif; // end sidebar widget area ?>


</aside><!-- #secondary .widget-area -->