<?php
/** @noinspection PhpUnused */

/**
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://ahmadraza.ga/
 * @since             1.0.0
 * @package           WP Footer Text
 *
 * @wordpress-plugin
 * Plugin Name:       WP Footer Text
 * Plugin URI:        https: //github.com/AhmadRaza9/wpfootertext.git
 * Description:       Update WordPress Admin Footer Text.
 * Requires PHP:      7.0
 * Requires at least: 5.0
 * Tested up to:      5.3
 * Version:           1.0.0
 * Contributors:      ahmadraza420
 * Author:            Ahmad Raza
 * Author URI:        
 * License:           GPL-2.0+
 * License URI:       https: //www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-footer-text
 * Domain Path:       /languages
 */

// If this file is called directly, abort.

if (!defined('WPINC')) {
    die;
}

require_once "wp-footer-text.php";