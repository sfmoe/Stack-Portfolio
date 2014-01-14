<?php 
/*
Template Name: Masonry
*/

get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="main-container masonry">
			<article id="masonry-<?php the_ID(); ?>">
			
				<section id="masonry-gallery">
					<?php the_content(); ?>
				</section>
				<footer>
					
				</footer>
			</article>
		</section>

	<?php endwhile; else: ?>

		<section class="main-container masonry">
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>


<style type="text/css">

.main-container{
	margin-top: 25px;
}

	.gallery-item {
	display: inline-block;
	background: #FEFEFE;
	border: 2px solid #FAFAFA;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 2px 15px;
	-webkit-column-break-inside: avoid;
	-moz-column-break-inside: avoid;
	column-break-inside: avoid;
	padding: 15px;
	padding-bottom: 5px;
	min-height: 250px;
	position:relative;
	float: left;

	}
	.gallery-icon{
		text-align: center;
	}
	.gallery-item .gallery-caption{
		display: block;
		position: absolute;
		bottom: 0;
		width: 100%;
	}


	@media only screen and (min-width: 320px) and (max-width: 768px) {
	.gallery-item {
	display: inline-block;
	background: #FEFEFE;
	border: 2px solid #FAFAFA;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 2px 15px;
	-webkit-column-break-inside: auto;
	-moz-column-break-inside: auto;
	column-break-inside: auto;
	padding: 15px;
	padding-bottom: 5px;
	min-height: 250px;
	width: 100%;
	position:relative;
	float: left;

	}

	}
</style>
<?php get_footer(); ?>