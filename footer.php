<?php wp_footer(); ?> <!--llamando a los script del footer -->

<?php if ( has_nav_menu( 'social' ) ) : ?>

	<nav>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'social',
				'container_class' => 'social-links-menu'
			) );
		?>
	</nav><!-- .social-navigation -->
<?php endif; ?>