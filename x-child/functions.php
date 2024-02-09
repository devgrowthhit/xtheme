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
//   02. Enqueue custom scripts and styles
//   03. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );


// Enqueue custom scripts and styles
// =============================================================================

function custom_styles() {
	$urlHost = "https://static.mastercontrol.com";
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'), true);
	wp_enqueue_style( 'font-awesome', getStaticSiteUrl($urlHost, "/wp/assets/css/library/fontawesomepro.min.css"), array(), true);
}


function custom_scripts() {
	$urlHost = "https://static.mastercontrol.com";
	// $site_env = "stage";
	// wp_enqueue_script( 'tracking-js', getStaticSiteUrl($urlHost, "/wp/assets/js/tracking/TagManager/loadAdobeTagManager-stage.min.js"), array( 'jquery' ),'', true );
	wp_enqueue_script( 'tracking-js', getStaticSiteUrl($urlHost, "/wp/assets/js/tracking/TagManager/LoadScript/loadGtm-prod.min.js"), array( 'jquery' ),'', true );
	wp_enqueue_script( 'custom-js', getStaticSiteUrl($urlHost, "/wp/assets/js/mcui-megamenu-scripts-v2.min.js"), array( 'jquery' ),'', true );
	wp_enqueue_script( 'above-fold-js', getStaticSiteUrl($urlHost, "/wp/assets/js/above-fold/wp-abovefold-us.min.js"), array( 'jquery' ),'', true );
	wp_enqueue_script( 'setup-prospect', getStaticSiteUrl($urlHost, "/wp/assets/js/tracking/setupProspect.min.js"), array( 'jquery' ),'', true );
	wp_enqueue_script( 'hide-menu-footer-js', get_stylesheet_directory_uri(). "/framework/dist/js/site/hide-menu-footer.js", array( 'jquery' ),'', true );
	wp_enqueue_script( 'getresourceandform', get_stylesheet_directory_uri() . '/framework/dist/js/site/getresourceandform.js', array( 'jquery' ),'', true );
}


function custom_scripts_and_styles (){
	custom_styles();
	custom_scripts();
}

add_action( 'wp_enqueue_scripts', 'custom_scripts_and_styles' );


// Additional Functions
// =============================================================================

// Nothing here yet

?>