<?php
/**
 * @package Sequential
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( 'post' == get_post_type() ) {
			sequential_post_thumbnail();
		}
	?>

	<div class="entry-content">
		<?php
			if ( ! is_search() ) {
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sequential' ) );
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sequential' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			} else {
				the_excerpt();
			}
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

