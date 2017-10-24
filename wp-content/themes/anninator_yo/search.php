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
			<h1>Search Results for <em><?php the_search_query(); ?></em></h1>
		</div><!-- .page-title -->
		<div class="content-left">
			<div class="blog">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<div class="post <?php if (has_post_thumbnail() ){ ?> has-thumbnail<?php } ?>">
						<?php if (has_post_thumbnail() ) { ?>
							<figure class="blog-thumbnail"><?php the_post_thumbnail( 'small-thumbnail' ); ?></figure>
						<?php } ?>
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="author">
							Posted by 
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
								<?php the_author(); ?>
							</a> 
							on the <?php the_time('dS, F, Y'); ?>
						</div>
						
						<p><?php the_excerpt(); ?></p>
						<div class="btn"><a href="<?php the_permalink(); ?>">Read More</a></div>
					</div>
				<?php endwhile; else: ?>
					<p class="no-posts-found">No posts match your search criteria. Please search again.</p>
				<?php endif; ?>

			</div>
		</div>		
		<div class="content-right">
			<?php get_sidebar(); ?>
		</div>
		<div class="clearfix"></div>
	</div><!-- .inner-content -->

</div><!-- .page-content -->

<?php get_footer(); ?>
