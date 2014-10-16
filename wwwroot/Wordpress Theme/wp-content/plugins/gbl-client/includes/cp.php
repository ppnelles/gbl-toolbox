<?php

// add_action('init', 'create_cp');

// function create_cp() {

// 	register_post_type('realisations', array(
// 		 'label' => __('Réalisations'),
// 		 'singular_label' => __('Réalisation'),
// 		 'public' => true,
// 		 'show_ui' => true,
// 		 'show_in_menu' => true,
// 		 'menu_position' => 22,
// 		 'capability_type' => 'post',
// 		 'hierarchical' => true,
// 		 'has_archive' => true,
// 		 'rewrite' => array( 'slug' => 'realisation' ),
// 		 'supports' => array('title', 'revisions', 'editor', 'thumbnail')
// 	));

// 	$labels = array(
// 		'name'              => _x( 'Secteurs', 'taxonomy general name' ),
// 		'singular_name'     => _x( 'Secteur', 'taxonomy singular name' ),
// 		'search_items'      => __( 'Rechercher' ),
// 		'all_items'         => __( 'Tous les secteurs' ),
// 		'parent_item'       => __( 'Parent' ),
// 		'parent_item_colon' => __( 'Parent:' ),
// 		'edit_item'         => __( 'Editer' ),
// 		'update_item'       => __( 'Sauvegarder' ),
// 		'add_new_item'      => __( 'Ajouter un secteur' ),
// 		'new_item_name'     => __( 'Ajouter un nouveau secteur' ),
// 		'menu_name'         => __( 'Secteurs' ),
// 	);

// 	$args = array(
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'rewrite'           => array( 'slug' => 'secteur' ),
// 	);

// 	register_taxonomy( 'secteur', array( 'realisations' ), $args );


// 	register_post_type('temoignages', array(
// 		 'label' => __('Témoignages'),
// 		 'singular_label' => __('Témoignage'),
// 		 'public' => true,
// 		 'show_ui' => true,
// 		 'show_in_menu' => true,
// 		 'menu_position' => 22,
// 		 'capability_type' => 'post',
// 		 'hierarchical' => true,
// 		 'has_archive' => true,
// 		 'rewrite' => array( 'slug' => 'temoignage' ),
// 		 'supports' => array('title', 'revisions', 'editor', 'thumbnail')
// 	));


// 	$labels = array(
// 		'name'              => _x( 'Types', 'taxonomy general name' ),
// 		'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
// 		'search_items'      => __( 'Rechercher' ),
// 		'all_items'         => __( 'Tous les types' ),
// 		'parent_item'       => __( 'Parent' ),
// 		'parent_item_colon' => __( 'Parent:' ),
// 		'edit_item'         => __( 'Editer' ),
// 		'update_item'       => __( 'Sauvegarder' ),
// 		'add_new_item'      => __( 'Ajouter un type' ),
// 		'new_item_name'     => __( 'Ajouter un nouveau type' ),
// 		'menu_name'         => __( 'Type' ),
// 	);

// 	$args = array(
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'rewrite'           => array( 'slug' => 'type' ),
// 	);

// 	register_taxonomy( 'type', array( 'temoignages' ), $args );

// }
