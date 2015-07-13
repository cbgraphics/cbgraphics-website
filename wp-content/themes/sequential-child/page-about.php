<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sequential
 */

get_header(); ?>

	<div id="about-page" class="content-area">
		<main id="main" class="site-main" role="main">

			

			<?php while ( have_posts() ) : the_post(); ?>
				<img class="about-page" src="http://test.cbgraphics.net/wp-content/themes/sequential-child/img/aboutcover_cynthiabartz.png" />
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

			<?php while ( have_posts() ) : the_post(); 
				$main_profile_name = get_field('main_profile_name');
				$main_profile_title = get_field('main_profile_title');
				$main_profile_twitter_handle = get_field('main_profile_twitter_handle');
				$main_profile_description = get_field('main_profile_description');
				$profile_1_img = get_field('profile_1_img');
				$profile_1_name = get_field('profile_1_name');
				$profile_1_title = get_field('profile_1_title');
				$profile_1_twitter_handle = get_field('profile_1_twitter_handle');
				$profile_1_description = get_field('profile_1_description');

			?>

			<article id="staff-profiles">
					<div>
					<h2><?php echo $main_profile_name; ?></h2>
					<h3><?php echo $main_profile_title; ?></h3>
					<p><a href="http://www.twitter.com/<?php echo $main_profile_twitter_handle; ?>">@<?php echo $main_profile_twitter_handle; ?></a></p>
					<p><?php echo $main_profile_description; ?></p>

				<!--<?php // if ($profile_1_name) {
					//echo wp_get_attachment_image( $profile_1_img );
					//<h2><?php echo $profile_1_name; ?></h2>
					//<h3><?php //echo $profile_1_title; ?></h3>
					//<p><a href="http://www.twitter.com/<?php //echo $main_profile_twitter_handle; ?>">@<?php //echo $profile_1_twitter_handle; ?></a></p>
					//<p><?php //echo $profile_1_description; ?></p>
				} ?>-->

					</div>
				</article>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>
			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>