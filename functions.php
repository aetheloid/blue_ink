<?php
/**
 * stylesheets
 */

function blue_ink_enqueue_style() 
{
    //wp enqueue style
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/layout/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/layout/css/font-awesome.min.css', array(), '4.5.0', 'all' );
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/layout/css/owl-carousel.min.css', array(), '2.3.4', 'all' );

    wp_enqueue_style( 'blue_ink-main', get_template_directory_uri().'/layout/css/main.css', array(), '', 'all' );
	wp_enqueue_style( 'blue_ink-custom', get_template_directory_uri().'/layout/css/custom.min.css', array(), '', 'all' );
	wp_enqueue_style( 'blue_ink-style', get_stylesheet_uri(), array(), '1.0', 'all' );
}

/**
 * scripts
 */

function blue_ink_enqueue_javascripts()
{
    wp_enqueue_script( 'blue_ink-bootstrap', get_template_directory_uri().'/layout/js/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.1.3', true );
	wp_enqueue_script( 'blue_ink-carousel', get_template_directory_uri().'/layout/js/owl-carousel/owl-carousel.min.js', array( 'jquery' ), '2.3.4', true );

    wp_enqueue_script( 'blue_ink-parallax', get_template_directory_uri().'/layout/js/parallax.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'blue_ink-plugins', get_template_directory_uri().'/layout/js/plugins.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'blue_ink-scripts', get_template_directory_uri().'/layout/js/scripts.min.js', array( 'jquery' ), '1.0', true );
	if ( is_front_page() ) {\
		wp_add_inline_script( 'blue_ink-scripts', 'if( jQuery(\'.blog-carousel > .blue_ink-blog-post\').length > 3 ){jQuery(\'.blog-carousel\').owlCarousel({\'items\': 3,\'loop\': true,\'dots\': false,\'nav\' : true, \'navText\':[\'<i class="fa fa-angle-left" aria-hidden="true"></i>\',\'<i class="fa fa-angle-right" aria-hidden="true"></i>\'], responsive : { 0 : { items : 1 }, 480 : { items : 2 }, 900 : { items : 3 } }});}' );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/**
 * set up
 */
if ( ! function_exists('blue_ink_setup')){
    add_action('after_setup_theme', 'blue_ink_setup');
    function blue_ink_setup() {
        //theme support
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo' array(
            'height'        => 75,
            'flex-height'   => false,
            'flex-width'    => true,
        ));

        // nav menus
        register_nav_menus( array(
            'primary-menu' => __('Primary Menu', 'blue_ink'),
        ) );
    }
}

/**
 * widgets
 */

 function blue_ink_widgets()
 {
     # code...
 }