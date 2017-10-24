<?php
/**
 * Template Name: Right Sidebar
 */

get_header(); ?>
<div class="page-content">
	<div class="inner-content">
		<div class="content-left">
			<div class="page-title">
				<h1><?php the_title(); ?></h1>
			</div><!-- .page-title -->
			<div class="blog">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<p><?php the_content(); ?></p>
				<?php endwhile; else: ?>
					No posts found.
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
