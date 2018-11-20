<?php

function blue_ink_enqueue_style() {

    //wp enqueue style
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/layout/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/layout/css/font-awesome.min.css', array(), '4.5.0', 'all' );
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/layout/css/owl-carousel.min.css', array(), '2.3.4', 'all' );
}