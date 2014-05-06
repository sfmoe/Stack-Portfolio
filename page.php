<?php get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section id="main-container">
			<article id="post-<?php the_ID(); ?>">
				<header class="display-none">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
				</header>
				<section>
					<?php the_content(); ?>
				</section>
				<footer>

				</footer>
			</article>
		</section>

	<?php endwhile; else: ?>

		<section id="main-container">
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif;

	 get_footer(); ?>