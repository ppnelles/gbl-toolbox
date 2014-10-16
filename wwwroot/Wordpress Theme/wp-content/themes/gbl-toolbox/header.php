<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

//Admin mode
//admin_maintenace_mode();
?><!DOCTYPE html>
<!--[if IE 6]>
<html class="ie lte-ie9 lte-ie8 lte-ie7 ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="ie lte-ie9 lte-ie8 lte-ie7 ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie lte-ie9 lte-ie8 ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html class="ie lte-ie9 ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="UTF-8" />	
<title><?php get_meta_title();?></title>
<meta name="description" content="<?php get_meta_description(); ?>">

<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="author" content="Paul-Philippe Nelles" />


<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon.png" />

<link rel="alternate" type="application/rss+xml" title="S'abonner au flux rss de <?php bloginfo('name'); ?>" href="<?php bloginfo( 'url' ); ?>/feed" />

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5.js" ></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php do_action( 'before' ); ?>

	<header id="header-main" role="banner">
		<div id="branding">
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></a></h1>
		</div>

		<button id="access-trigger" role="widget">Open-Close the menu</button>
		<nav id="access" role="navigation">
			<div>
				<button id="access-trigger" role="widget">Ouvrir/fermer le menu principal</button>
				<?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>
			</div>
		</nav><!-- #access -->

	</header><!-- #branding -->

	<main role="main" class="hfeed site">