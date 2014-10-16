<?php
add_action('init', 'create_gbl_homepage');

function create_gbl_homepage() {
	register_post_type('gbl_homepage', array(
		 'label' => __('Page d\'accueil'),
		 'singular_label' => __('Bloc'),
		 'public' => true,
		 'show_ui' => true,
		 'show_in_menu' => true,
		 'menu_position' => 22,
		 'capability_type' => 'post',
		 'hierarchical' => true,
		 'supports' => array('title', 'editor', 'revisions', 'thumbnail')
	));
} 
?>
