<?php
/*
Template Name: Parent Portfolio Page
*/
get_header();
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'sort_order' => 'asc' ) );

	foreach( $mypages as $page ) {		
	?>
	
		<div class="portfolio-featured-images">
		
				<a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a>
			
				<?php echo get_the_post_thumbnail($page->ID, 'full'); ?>

		</div>

		</div>
	<?php
	}	

	get_footer();
?>