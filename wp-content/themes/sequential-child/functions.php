<?php

/*Functions */


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Custom post types function
function create_custom_post_types() {
	//Portfolio Projects
	register_post_type('portfolio_projects',
		array(
			'labels' => array(
				'name' => __('Portfolio Projects'),
				),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array(
				'slug' => 'portfolio_projects'
				),
			)
		);
}

add_action( 'init', 'create_custom_post_types' );



?>
