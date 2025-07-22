<?php
/**
 * Plugin Name: HumanFirst Accessibility – by Accesstive
 * Plugin URI: https://accesstive.com
 * Description: Accesstive is an all-in-one accessibility platform that helps websites become inclusive, compliant, and user-friendly. It combines powerful tools like an accessibility assistant widget, AI-based live audits, monitoring, and an intelligent assistant. Designed for businesses, developers, and agencies—Accesstive makes accessibility simple, scalable, and smart.
 * Version: 1.0.0
 * Author: Accesstive
 * Author URI: https://accesstive.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: accesstive
 * Domain Path: /languages
 * Requires at least: 4.0
 * Tested up to: 6.4
 * Requires PHP: 7.0
 * Network: false
 *
 * @package Accesstive
 * @author Accesstive
 * @since 1.0.0
 * @license GPLv2 or later
 * @copyright 2025 Accesstive
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('ACCESSTIVE_VERSION', '1.0.0');
define('ACCESSTIVE_PLUGIN_FILE', __FILE__);
define('ACCESSTIVE_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ACCESSTIVE_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Main Accesstive Plugin Class
 */
class AccesstivePlugin {
    
    /**
     * Constructor
     */
    public function __construct() {
        add_action('init', array($this, 'init'));
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('wp_footer', array($this, 'add_assistant_script'));
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));
    }
    
    /**
     * Initialize plugin
     */
    public function init() {
        load_plugin_textdomain('accesstive', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }
    
    /**
     * Add admin menu
     */
    public function add_admin_menu() {
        add_menu_page(
            __('Accesstive', 'accesstive'),
            __('Accesstive', 'accesstive'),
            'manage_options',
            'accesstive',
            array($this, 'admin_page'),
            'dashicons-universal-access-alt',
            30
        );
    }
    
    /**
     * Admin page content
     */
    public function admin_page() {
        echo '<div id="accesstive-admin" style="min-height: 80vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">';
        echo '<h2 style="font-size: 2rem; margin-bottom: 1rem;">' . __('Accesstive Dashboard Launched', 'accesstive') . '</h2>';
        echo '<p style="font-size: 1.1rem; color: #333; max-width: 420px; margin-bottom: 1.5rem;">' . __('We\'ve just opened the Accesstive Dashboard for you in a new browser tab. You can manage all your accessibility settings and features there.', 'accesstive') . '</p>';
        echo '<p style="font-size: 1.05rem; color: #444; max-width: 420px; margin-bottom: 1.5rem;">' . __('If the dashboard didn\'t open automatically, <a href="https://dashboard.accesstive.com/app/login" target="_blank" rel="noopener" style="color: #0073aa; text-decoration: underline;">click here to open it manually</a>.', 'accesstive') . '</p>';
        echo '<div style="margin-top: 2rem; color: #888; font-size: 0.95rem;">' . __('You may safely close this tab and continue working in your WordPress admin.', 'accesstive') . '</div>';
        echo '<script type="text/javascript">window.open("https://dashboard.accesstive.com/app/login", "_blank");</script>';
        echo '</div>';
    }
    
    /**
     * Add assistant script to footer
     */
    public function add_assistant_script() {
        if (!is_admin()) {
            echo '<script async src="https://cdn.accesstive.com/assistance.js" type="module"></script>';
        }
    }
    
    /**
     * Plugin activation
     */
    public function activate() {
        // Add any activation tasks here
        flush_rewrite_rules();
    }
    
    /**
     * Plugin deactivation
     */
    public function deactivate() {
        // Add any deactivation tasks here
        flush_rewrite_rules();
    }
}

// Initialize the plugin
new AccesstivePlugin();