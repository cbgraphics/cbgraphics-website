<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sequential
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<?php if ( has_nav_menu( 'footer' ) ) : ?>
		<nav class="footer-navigation" role="navigation">
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'footer',
					'container_class' => 'menu-footer',
					'menu_class'      => 'clear',
					'depth'           => 1,
				) );
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>