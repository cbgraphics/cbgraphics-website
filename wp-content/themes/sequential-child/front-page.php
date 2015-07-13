<?php
/**
 * Front-Page for Sequential-Child theme. Custom header on this page only.
 *
 * @package Sequential
 */
?><!DOCTYPE html>
<html id="front-page" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body id="front-page" <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sequential' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php
			$sequential_top_area_content = get_theme_mod( 'sequential_top_area_content' );
			if ( '' != $sequential_top_area_content ) :
		?>
		<div class="top-content">
			<div class="wrapper">
				<?php echo wp_kses_post( $sequential_top_area_content ); ?>
			</div>
		</div><!-- .site-top-content -->
		<?php endif; ?>
		<div class="wrapper">
			<div class="site-branding">
				<img class="front-page-logo" src="http://test.cbgraphics.net/wp-content/uploads/2015/05/frontpage-cbgraphics-logo-white.png" />
			</div>


		</div><!-- .wrapper -->
		<?php if ( function_exists( 'jetpack_breadcrumbs' ) && is_page() && ! is_front_page() ) : ?>
			<div class="breadcrumb-area">
				<div class="wrapper">
					<?php jetpack_breadcrumbs(); ?>
				</div><!-- .wrapper -->
			</div><!-- .breadcrumb-area -->
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="frontpage-content" class="site-content">

	<div id="front-page" class="content-area">
		<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post();

						$about_content = get_field('about_content');

							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content-frontpage', get_post_format() );
						?>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>about" class="button" id="front-page-cta">Learn More</a>

						<div class="front-page-bottom-content">
							<p><?php echo $about_content; ?></p>
						</div>


					<?php endwhile; ?>

					
					<?php sequential_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
/**
 * Custom Footer
 */
?>

	</div><!-- #content -->

	

	<footer  class="site-footer-front-page" role="contentinfo">
		<!--footer disabled
		<div class="site-info">
			<p class="site-footer-front-page">Follow me on <a href="http://www.twitter.com/cbgraphicsatl">Twitter</a></p>
		</div>
	-->
	</footer><!-- #colophon -->
</div>
</div><!-- #page -->

</body>
</html>