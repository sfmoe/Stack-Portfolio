<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<title><?php  echo (is_single() ? single_post_title('', true)." | " : '' );
	bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<meta name="description" content="<?php  echo (is_single() ? single_post_title('', true) : get_option( 'site_description', 'Stack Porfolio for Wordpress') ); ?>">
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='//fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<?php

	wp_deregister_script('jquery');
	wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"), false, '1.11.0');
	wp_enqueue_script('jquery');

	?>
	<?php wp_head(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/stack-portfolio.js?v=0.71"></script>
</head>
<body <?php $post_data = get_post($post->post_parent); body_class("{$post->post_name} {$post_data->post_name}"); ?>>
<header id="mast">
	<section class='maxed'>
	<h1>
		<a href="<?php bloginfo('url');?>/">
			<?php bloginfo('name'); ?> <span class='subh'><?php echo str_replace("&amp;","<span class='ampersand'>&amp;</span>", get_bloginfo('description')); ?></span>
</a>
	</h1>

<div class="nav-button"><i class="nav-select"></i></div>

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
	'fallback_cb'     => '',
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
</nav>

</section>
</header>