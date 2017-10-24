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

	<section class="front-page-slider">
	  <div class="flexslider">
		<ul class="slides">
			<?php
				$args = array (
							'posts_per_page' => 3,
							'category_name' => 'Featured',
						);
				$slider= new WP_Query($args); 
				if($slider->have_posts()) : while($slider->have_posts()) : $slider->the_post();
			?>	
			  <li class="featured-post">
				<?php the_post_thumbnail('slider-image'); ?>
				<div class="caption">
					<a href="<?php the_permalink(); ?>" class="slider-title"><?php the_title();?></a>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn">Read More!</a>
				</div>			
			  </li>
		  
			<?php
			    endwhile; endif;
				wp_reset_postdata(); ?>
		</ul>
	  </div>
	</section>

	<div class="inner-content frontpage-inner">
		<section class="featured clearfix">
			<div class="col-1-3">
				<div class="individual-featured">
					<?php dynamic_sidebar( 'home-1' );?>
				</div>
			</div>
			<div class="col-1-3">
				<div class="individual-featured">
					<?php dynamic_sidebar( 'home-2' );?>
				</div>			
			</div>
			<div class="col-1-3">
				<div class="individual-featured">
					<?php dynamic_sidebar( 'home-3' );?>
				</div>				
			</div>
		</section><!-- .featured -->

		<section class="blog clearfix">
			<div class="content-left frontpage-left">

				<h1 class="frontpage-posts-title">Latest Posts</h1>
				<div class="latest-posts">
					<?php $args = array (
						'posts_per_page' => 4,
					);

					$featured = new WP_Query($args);?>

					<?php while ($featured-> have_posts() ) : $featured->the_post(); ?>
					 	<div class="col-1-2">	
						 	<div class="latest-post">
						 		<?php the_category('&nbsp/&nbsp;');?>
						 		<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 		<figure class="frontpage-thumbnail">
						 			<?php the_post_thumbnail( 'front-blog-thumbnail'); ?>
						 		</figure>
						 		<?php the_excerpt(); ?>
						 		<div class="tags"><?php the_tags('Tags: ', '&nbsp;/&nbsp;') ?></div>
						 	</div>						
						</div>
					<?php endwhile; //end the while loop
					wp_reset_postdata();?>
				</div>
			</div>
			<div class="content-right">
				<?php get_sidebar(); ?>
			</div>


		</section>
	</div><!-- .inner-content .frontpage-inner-->

</div><!-- .page-content -->

<?php get_footer(); ?>
