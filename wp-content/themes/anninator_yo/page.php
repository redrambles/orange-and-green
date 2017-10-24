<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 * @since Anninator 1.0
 */

get_header(); ?>
<div class="page-content">
	
	<div class="inner-content">
		<div class="page-title">
			<h1><?php the_title(); ?></h1>
		</div><!-- .page-title -->
		<div id="post-<?php the_ID(); ?>" <?php post_class('blog'); ?>>
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<p><?php the_content(); ?></p>
			<?php endwhile; else: ?>
				No posts found.
			<?php endif; ?>

		</div>
	</div><!-- .inner-content -->

</div><!-- .page-content -->

<?php get_footer(); ?>
