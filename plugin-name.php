<?php

/**
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       Place here your plugin name
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       Place here your plugin description
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// Security check
if ( ! defined( 'WPINC' ) ) {
	die;
}

// function call on plugin activation
function activate_plugin_name(){

}
// register the activation function
register_activation_hook( __FILE__, 'activate_plugin_name' );

// function call on plugin deactivation
function deactivate_plugin_name(){

}
// register the activation function
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );
