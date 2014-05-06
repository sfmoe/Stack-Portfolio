<?php
/*
* Portfolio Stack Options and Custom Functions
*/

require_once ( get_template_directory() . '/admin/theme-options.php' );


add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); //add support for featured image to post and pages


/*gallery override for cleaner html5 formatted gallery*/
include("plugins/gallery.php");

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function herotag_func( $atts ) {
	extract( shortcode_atts( array(
		'ids' => '',
	), $atts ) );
	$ids=explode(",",$ids);
 $left = wp_get_attachment_url($ids[0]);
 $right = wp_get_attachment_url($ids[1]);
 $hero_html = <<<EOD
		<section id='hero'>
		<div class="ampersand"></div>
		<div class='hero-inner'>
		<div class="rotate code"><div class='img' style="background:url('{$left}'); background-size: cover;"></div></div>
		<div class='rotate photo'><div class='img' style="background:url('{$right}');  background-size: cover;"></div></div>
		</div>
		</section>

EOD;
return $hero_html;
}
add_shortcode( 'hero', 'herotag_func' );

function box_func($atts, $content){

extract( shortcode_atts( array(
	'image' => '',
	'color' => '',
	'title' => 'Box'
), $atts ) );

$image = (is_numeric($image) ? wp_get_attachment_url($image) : $image );
$aname = strtolower($title);

$color = empty($color)? $color: "style='background-color: {$color}'";
$formatted = <<<EOD

<section id="about" {$color}>
<a name='{$aname}' ></a>
<h2 class='maxed'>$title</h2>
<div class="maxed wrap">
<div class="image"><img src="$image" alt="$imgalt" /></div>
<div class="about">
{$content}
</div>
</div>
</section>

EOD;
return $formatted;
}

add_shortcode( 'box', 'box_func' );
