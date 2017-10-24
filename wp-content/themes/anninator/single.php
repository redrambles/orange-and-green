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
		<div class="blog">
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<div class="page-title">
					<h1><?php the_title(); ?></h1>
				</div><!-- .page-title -->
				<div class="author">
					Posted by 
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
						<?php the_author(); ?>
					</a> 
					on the <?php the_time('dS, F, Y'); ?>
				</div>
				<?php the_post_thumbnail('banner-image'); ?>
				<p><?php the_content(); ?></p>

			<?php endwhile; else: ?>
				No posts found.
			<?php endif; ?>

		</div>
		<?php comments_template(); ?>
	</div><!-- .inner-content -->

</div><!-- .page-content -->

<?php get_footer(); ?>
