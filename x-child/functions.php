<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// For building static site urls with version querystrings
require_once 'version-querystrings.php';

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );


// Enqueue styles for child theme
// =============================================================================

function child_enqueue_styles() {
	
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'));

}
add_action('wp_enqueue_style', 'child_enqueue_styles');



// Additional Functions
// =============================================================================
function my_custom_scripts() {
	$urlHost = "https://static-test.mastercontrol.com";
	$site_env = "stage";
	wp_enqueue_script( 'tracking-js', getStaticSiteUrl($urlHost, "/assets/js/tracking/TagManager/loadAdobeTagManager-stage.min.js"), array( 'jquery' ),'', true );
	wp_enqueue_script( 'custom-js', getStaticSiteUrl($urlHost, "/assets/js/mcui-megamenu-scripts-v2.min.js"), array( 'jquery' ),'', true );
	wp_enqueue_script( 'above-fold-js', getStaticSiteUrl($urlHost, "/assets/js/above-fold/wp-abovefold-us.min.js"), array( 'load-adobe' ),'', true );
	wp_enqueue_script( 'hide-menu-footer-js', get_stylesheet_directory_uri(). "/framework/dist/js/site/hide-menu-footer.js", array( 'jquery' ),'', true );
	wp_enqueue_script( 'getresourceandform', get_stylesheet_directory_uri() . '/framework/dist/js/site/getresourceandform.js', array( 'jquery' ),'', true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

?>