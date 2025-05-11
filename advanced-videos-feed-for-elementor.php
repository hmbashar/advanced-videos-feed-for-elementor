<?php
/**
 * Plugin Name: Advanced Videos Feed for Elementor
 * Description: Display YouTube videos from channels and playlists in a beautiful grid or list layout.
 * Version: 1.0.0
 * Author: Md Abul Bashar
 * Author URI: https://facebook.com/hmbashar
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: advanced-videos-feed-for-elementor
 * Domain Path: /languages
 * Requires at least: 5.0
 * Requires PHP: 8.0
 * Elementor tested up to: 3.28.4
 * Elementor Pro tested up to: 3.28.4
 * Requires Plugins: elementor
 *
 * @author Md Abul Bashar
 * @package advanced-videos-feed-for-elementor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Define plugin constants
define( 'AVFFE_VERSION', '1.0.0' );
define( 'AVFFE_FILE', __FILE__ );
define( 'AVFFE_PATH', plugin_dir_path( AVFFE_FILE ) );
define( 'AVFFE_URL', plugin_dir_url( AVFFE_FILE ) );

/**
 * Check Elementor is installed and activated
 */
function avffe_check_elementor_installed() {
    if ( ! did_action( 'elementor/loaded' ) ) {
        add_action( 'admin_notices', 'avffe_elementor_missing_notice' );
        return false;
    }
    return true;
}

/**
 * Admin notice for missing Elementor
 */
function avffe_elementor_missing_notice() {
	// phpcs:ignore WordPress.Security.NonceVerification.Recommended -- Safe use on plugin activation admin notice only.
    if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
    
    $message = sprintf(
		// translators: 1: Plugin name, 2: Required plugin name
        __( '"%1$s" requires "%2$s" to be installed and activated.', 'advanced-videos-feed-for-elementor' ),
        '<strong>Advanced Videos Feed for Elementor</strong>',
        '<strong>Elementor</strong>'
    );

    printf( '<div class="notice notice-error"><p>%1$s</p></div>', wp_kses_post($message) );
}


/**
 * Initialize the plugin
 */
function avffe_init() {  
    
    // Check if Elementor is installed
    if ( ! avffe_check_elementor_installed() ) return;
    
    // Register Widget
    add_action( 'elementor/widgets/register', 'avffe_register_widget' );
    
    // Register styles
    add_action( 'wp_enqueue_scripts', 'avffe_register_styles' );
}
add_action( 'plugins_loaded', 'avffe_init' );


/**
 * Register Elementor Widget
 */
function avffe_register_widget( $widgets_manager ) {
    require_once( AVFFE_PATH . 'widgets/class-videos-feed-widget.php' );
    $widgets_manager->register( new \AVFFE\Widgets\Videos_Feed_Widget() );
}

/**
 * Register Widget Styles
 */
function avffe_register_styles() {
    wp_register_style(
        'advanced-videos-feed-for-elementor',
        AVFFE_URL . 'assets/css/videos-feed.css',
        [],
        AVFFE_VERSION
    );
}