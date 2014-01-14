<?php
/*
* Portfolio Stack Options and Custom Functions
*/

//require_once ( get_template_directory() . '/admin/theme-options.php' );


add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); //add support for featured image to post and pages


/*gallery override for cleaner html5 formatted gallery*/
include("plugins/gallery.php");

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


/*
* Custom function for certain pages that need a cover background image. this uses the featured image of a page 
*/
add_action("wp_footer", "stack_featured_image_background");

   function stack_featured_image_background() {
   	global $pagename;
    $bg_pages = Array("", "about");
      if(in_array($pagename, $bg_pages)){


				if ( has_post_thumbnail()) {
           $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
           echo "<div id='bg-image'>  <img src='{$large_image_url[0]}' />    </div>";
                                             }
	
                                       }
   }


