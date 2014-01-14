<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<meta name="description" content="Moe Martinez is an Editorial and Portrait Photographer in Chicago and the Midwest">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php 

	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), false, '1.10.2');
	wp_enqueue_script('jquery');

	?>
		<?php wp_head(); ?>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/stack-portfolio.js?v=0.71"></script>
	</head>
	<body <?php $post_data = get_post($post->post_parent); body_class("{$post->post_name} {$post_data->post_name}"); ?>>
		<header class="tophead">
			<div class="nav-button"><i class="nav-select"></i></div>
			<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?> <span><?php bloginfo('description'); ?></span></a></h1>
</header>
<?php

$defaults = array(
	'theme_location'  => 'header-menu',
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => 'nav',
	'container_id'    => '',
	'menu_class'      => 'nav-list',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => "\n",
	'after'           => "\n",
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
 wp_nav_menu($defaults); 

?>

