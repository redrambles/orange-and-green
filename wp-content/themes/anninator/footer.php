<?php
/*
*/

?>

<div class="site-footer">
	<div class="footer-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu') ); ?>
	</div>
	<p class="copyright">
		Redrambles <span>&copy; </span><?php echo date('Y'); ?>		
	</p>
</div>

</div><!-- .container -->
<?php wp_footer(); ?>

</body>

</html>