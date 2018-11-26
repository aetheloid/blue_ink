<?php
/** 
 * Template for displaying the lower header - buttons.
 * 
 * @package WordPress
 * @subpackage blue_ink
 */
?>
<<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <div class="col-sm-12">
            <h1>ÖH <span class="span-dot">.</span> MED <span class="span-dot">.</span> Wien</h1>
        </div><!-- /.col-sm-12-->
        <div class="col-sm-8 col-sm-offset-2">
            <div class="piece-descr">Österreichische HochschülerInnenschaft der Medizinische Universität Wien</div>
            <a class="header-button-left" href="https://oehmedwien.at/oeh-med-wien" title="Mitmachen">Mitmachen</a>
            <a class="header-button-right" href="#contact-us" title="Öffnungszeiten">Öffnungszeiten<a>
        </div><!--/.col-sm-8.col-sm-offset-2-->
    </div><!--/.container-->
</body>
</html>