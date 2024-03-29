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

	<header class="entry-header">
		<div class="entry-meta">
			<?php sequential_entry_meta(); ?>
		</div><!-- .entry-meta -->

		<a href="<?php the_permalink(); ?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sequential' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php sequential_entry_footer(); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-## -->
