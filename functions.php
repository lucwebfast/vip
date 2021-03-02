<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'AGENCIES_THEME_DIR', get_template_directory() );
define( 'AGENCIES_THEME_URI', get_template_directory_uri() );
define( 'AGENCIES_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'AGENCIES_THEME_NAME', $themeData->get('Name'));
	define( 'AGENCIES_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( AGENCIES_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/
if( ! class_exists( 'CSFramework' ) ){

	define( 'CS_ACTIVE_TAXONOMY',   false );
	define( 'CS_ACTIVE_SHORTCODE',  false );
	define( 'CS_ACTIVE_CUSTOMIZE',  false );

	require_once AGENCIES_THEME_DIR .'/cs-framework/cs-framework.php';
	
	/* ---------------------------------------------------------------------------
	 * Create function to get theme options
	 * --------------------------------------------------------------------------- */
	function agencies_cs_get_option($key, $value = '') {
	
		$v = cs_get_option( $key );
	
		if ( !empty( $v ) ) {
			return $v;
		} else {
			return $value;
		}
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'AGENCIES_LANG_DIR', AGENCIES_THEME_DIR. '/languages' );
load_theme_textdomain( 'agencies', AGENCIES_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function agencies_admin_scripts() {
	wp_enqueue_style('agencies-admin', AGENCIES_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'agencies_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( AGENCIES_THEME_DIR .'/framework/register-functions.php' );
require_once( AGENCIES_THEME_DIR .'/framework/utils.php' );

// Header -----------------------------------------------------------------------
require_once( AGENCIES_THEME_DIR .'/framework/register-head.php' );

// Menu -------------------------------------------------------------------------
require_once( AGENCIES_THEME_DIR .'/framework/register-menu.php' );
require_once( AGENCIES_THEME_DIR .'/framework/register-mega-menu.php' );

// Hooks ------------------------------------------------------------------------
require_once( AGENCIES_THEME_DIR .'/framework/register-hooks.php' );

// Likes ------------------------------------------------------------------------
require_once( AGENCIES_THEME_DIR .'/framework/register-likes.php' );

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'agencies_widgets_init' );
function agencies_widgets_init() {
	require_once( AGENCIES_THEME_DIR .'/framework/register-widgets.php' );

	if(class_exists('DTCorePlugin')) {
		register_widget('Agencies_Twitter');
	}

	register_widget('Agencies_Flickr');
	register_widget('Agencies_Recent_Posts');
	register_widget('Agencies_Portfolio_Widget');
}
if(class_exists('DTCorePlugin')) {
	require_once( AGENCIES_THEME_DIR .'/framework/widgets/widget-twitter.php' );
}
require_once( AGENCIES_THEME_DIR .'/framework/widgets/widget-flickr.php' );
require_once( AGENCIES_THEME_DIR .'/framework/widgets/widget-recent-posts.php' );
require_once( AGENCIES_THEME_DIR .'/framework/widgets/widget-recent-portfolios.php' );

// Plugins ---------------------------------------------------------------------- 
require_once( AGENCIES_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) ){
	require_once( AGENCIES_THEME_DIR .'/framework/register-woocommerce.php' );
}

// WP Store Locator -------------------------------------------------------------
if( agencies_is_plugin_active( 'wp-store-locator/wp-store-locator.php' ) ){
	require_once( AGENCIES_THEME_DIR .'/framework/register-storelocator.php' );
}
?>