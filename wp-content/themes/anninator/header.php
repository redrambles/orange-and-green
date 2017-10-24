<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Anninator
 * @since Anninator 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="container">
		
		<header class="site-header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="header-search">
				<?php get_search_form(); ?>
			</div>
			<div class="clearfix"></div>
		</header>
		<nav class="primary">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
		</nav>
	