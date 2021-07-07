<?php
/**
 * Plugin Name: Footer Mega Grid Columns
 * Plugin URL: https://www.wponlinesupport.com/plugins/
 * Text Domain: footer-mega-grid-columns
 * Description: Footer Mega Grid Columns - Register a widget area for your theme and allow you to add and display widgets in grid view with multiple columns.
 * Domain Path: /languages/
 * Version: 1.2
 * Author: WP OnlineSupport
 * Author URI: https://www.wponlinesupport.com
 * Contributors: WP OnlineSupport
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
if( ! defined( 'FMGC_VERSION' ) ) {
	define( 'FMGC_VERSION', '1.2' ); // Version of plugin
}
if( !defined( 'FMGC_DIR' ) ) {
	define( 'FMGC_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'FMGC_URL' ) ) {
	define( 'FMGC_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}
if( ! defined( 'FMGC_PLUGIN_LINK' ) ) {
	define( 'FMGC_PLUGIN_LINK', 'https://www.wponlinesupport.com/wp-plugin/footer-mega-grid-columns/?utm_source=WP&utm_medium=Footer-Mega-Grid&utm_campaign=Features-PRO#fndtn-lifetime' ); // Plugin Link
}

/**
 * Load Text Domain
 * This gets the plugin ready for translation
 * 
 * @package Footer Mega Grid Columns
 * @since 1.2
 */
function fmgc_load_textdomain() {
	global $wp_version;

	// Set filter for plugin's languages directory
	$fmgc_lang_dir = dirname( plugin_basename( __FILE__ ) ) . '/languages/';
	$fmgc_lang_dir = apply_filters( 'fmgc_languages_directory', $fmgc_lang_dir );

	// Traditional WordPress plugin locale filter.
	$get_locale = get_locale();

	if ( $wp_version >= 4.7 ) {
		$get_locale = get_user_locale();
	}

	// Traditional WordPress plugin locale filter
	$locale = apply_filters( 'plugin_locale',  $get_locale, 'footer-mega-grid-columns' );
	$mofile = sprintf( '%1$s-%2$s.mo', 'footer-mega-grid-columns', $locale );

	// Setup paths to current locale file
	$mofile_global  = WP_LANG_DIR . '/plugins/' . basename( FMGC_DIR ) . '/' . $mofile;

	if ( file_exists( $mofile_global ) ) { // Look in global /wp-content/languages/plugin-name folder
		load_textdomain( 'footer-mega-grid-columns', $mofile_global );
	} else { // Load the default language files
		load_plugin_textdomain( 'footer-mega-grid-columns', false, $fmgc_lang_dir );
	}
}

// Admin Class File
require_once( FMGC_DIR . '/includes/admin/class-fmgc-admin.php' );

// Script File
require_once( FMGC_DIR . '/includes/class-fgmc-scripts.php' );

// Function File
require_once( FMGC_DIR . '/includes/fmgc-functions.php' );