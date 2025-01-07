<?php
/**
 *  @package greyd-child-theme
 * 	@since 1.0.0
 * Enqueue Greyd Theme styles.
 *
 * @return void
 */
function greyd_child_enqueue_styles(): void {
	wp_enqueue_style( 'greyd-child-style', get_stylesheet_uri(), array( 'greyd-theme' ), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style('custom_css', get_stylesheet_directory_uri() . '/assets/css/custom-styles.css', array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_script('custom_js', get_stylesheet_directory_uri().'/assets/js/custom-js.js', array('greyd-theme'), wp_get_theme()->get( 'Version' ), true);
}
add_action( 'wp_enqueue_scripts', 'greyd_child_enqueue_styles' );
?>
