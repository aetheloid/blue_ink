<?php
/**
 *  Template for displaying the footer.
 * 
 * @package     WordPress
 * @subpackage  blue_ink
 */
?>
<?php

if ( current_user_can( 'edit_theme_options' ) ) {
	$footer_copyright  = get_theme_mod( 'blue_ink_footer_copyright', __( '&copy; Copyright 2018. All Rights Reserved.', 'blue_ink' ) );
} else {
	$footer_copyright  = get_theme_mod( 'blue_ink_footer_copyright' );
}
?>

<?php wp_footer(); ?>
</body>
</html>