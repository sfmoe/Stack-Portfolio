<?php 
/*
Template Name: Home Page
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="main-container">
			<article id="post-<?php the_ID(); ?>">
				
				<header class="display-none">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
				</header>



				<section class="home-page">
			
				<div class="inner-container">
					<div class="main-content" style="display:none;">
					<?php the_content(); ?>
					</div>

					<div class="recent-posts">
<?php

 $args = array(
    'numberposts' => 1,
    'offset' => 0,
    'category' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => ' publish',
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );

    foreach( $recent_posts as $recent ){
?>

<section>
	<article>
					<header>
					<h1>
						<a href="<?php echo $recent['guid']; ?>" rel="bookmark" 
							title="Permanent Link to <?php echo $recent['post_title']; ?>">
							Latest Post: <?php echo $recent['post_title']; ?>
						</a>
					</h1>
					
				</header>
				<section>
								<a href="<?php echo $recent['guid']; ?>" rel="bookmark" 
							title="Permanent Link to <?php echo $recent['post_title']; ?>">

								<?php

								preg_match_all('/src="([^"]+)"/', $recent['post_content'], $arr);
							
								 echo (get_the_post_thumbnail($recent['ID'], 'full')? get_the_post_thumbnail($recent['ID'], 'full'): "<img src='{$arr[1][0]}'>"); ?>

								</a>
				</section>


	</article>
</section>


<?php
	}
?>
</div>
</div>
				</section>
				<footer>
					
				</footer>
			</article>
		</section>

	<?php endwhile; else: ?>

		<section class="main-container">
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>


<?php get_footer(); ?>