<?php
/**
 *  Template for displaying the header.
 * 
 * @package     WordPress
 * @subpackage  blue_ink
 */
?>


<?php

$logo_id                    = get_theme_mod( 'custom_logo' );
$logo_image                 = wp_get_attachment_image_scr( $logo_id, 'full' );
$text_logo                  = get_theme_mod()
$jumbotron_general_image    = get_theme_mod()
$jumbotron_single_image     = get_theme_mod()
$jumbotron_parallax_enable  = get_theme_mod()

$style = '';


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="<?php make conditoin between header-frontpage and header-blog?php>">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-8">
                        logo here
                    </div>
                    <!--/.col-sm-2-->
                    <div class="col-sm-8 col-xs-4">
                        <nav class="header-nav">
                            navigation here
                        </nav>
                        <button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
                    </div> <!--/.col-sm-10 -->
                </div> <!--/.row-->
            </div><!-- /.container -->
        </div><!-- /.top-header -->
        <nav class="responsive-menu">
            <ul>
                <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'primary-menu',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'items_wrap'      => '%3$s',
                        ));
                        ?>
            </ul>
        </nav><!-- /.responsive-menu -->
        php_::__sjfgasdhasdfkjahsdf
    </header><!--/#header -->
</body>

</html>