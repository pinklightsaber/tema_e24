<?php if ( is_active_sidebar( 'sidebar1' )  ) : ?>
	<div class="container">
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar1' ); ?>
	</aside><!-- .sidebar .widget-area -->
	</div>
<?php endif; ?>