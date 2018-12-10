<?php

<<<<<<< HEAD
require_once plugin_dir_path(__FILE__) . 'inc/class-blue_ink-support-icons.php'

require_once plugin_dir_path(__FILE__) . 'inc/class-blue_ink-support-import-data.php';

=======
//helper file
require_once plugin_dir_path( __FILE__) . 'inc/class-blue_ink-support-icons.php';

// importer
require_once plugin_dir_path( __FILE__) . 'inc/class-blue_ink-support-import-data.php';

/**
 * Widgets
 */

 require_once plugin_dir_path( __FILE__) . 'pieces/class-blue_ink-piece-wwd.php';
 require_once plugin_dir_path( __FILE__) . 'pieces/class-blue_ink-piece-project';

 if ( ! function_exists( 'blue_ink_support_admin_scripts')) {

    /**
     * enqueue admin resources (css/js)
     */
    function blue_ink_support_admin_scripts($hook_suffix) {

        wp_enqueue_style( 'blue_ink-support-admin-css', plugins_url('/assets/css/admin.css',__FILE__));
        wp_enqueue_style( 'font-awesome', plugins_url('/assets/css/font-awesome.min.css',__FILE__), array(), '5.2.0', 'all');
		wp_enqueue_style( 'blue_ink-support-iconpicker-css', plugins_url( '/assets/css/jquery.fonticonpicker.css', __FILE__ ) );
		wp_enqueue_style( 'blue_ink-support-iconpicker-theme-css', plugins_url( '/assets/css/jquery.fonticonpicker.grey.min.css', __FILE__ ) );
		wp_enqueue_script( 'blue_ink-support-iconpicker-js', plugins_url( '/assets/js/iconpicker.min.js', __FILE__ ), array( 'jquery' ) );
        wp_enqueue_script( 'blue_ink-support-admin-js', plugins_url( '/assets/js/admin.js', __FILE__ ), array( 'jquery' ) );
        
        wp_localize_script(
            'blue_ink-support-admin-js', 'adfasdfsdf', array(
                'ajaxurl' => esc_url (admin_url( 'admin-ajax.php')),
            )
        );

        if ('widgets.php' == $hook_suffix) {
            wp_enqueue_script( 'blue_ink-widget-text-editor', )
        }
    }
 }
>>>>>>> 1845240fea57b3db593161f15622fbfd7d156300
