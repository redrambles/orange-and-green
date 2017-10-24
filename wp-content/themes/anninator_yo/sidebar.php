<?php
/*** Right Sidebar ***/
?>

<aside class="sidebar">
	
	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
		<?php dynamic_sidebar('right-sidebar') ?>
	<?php endif; ?>

</aside>