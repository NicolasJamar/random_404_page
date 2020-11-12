<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/NicolasJamar
 * @since             1.0.0
 * @package           Random_404_page
 *
 * @wordpress-plugin
 * Plugin Name:       Random 404 page
 * Plugin URI:        http://becode.test/
 * Description:       Generate a 404 page randomly
 * Version:           1.0.0
 * Author:            Nicolas Jamar
 * Author URI:        https://github.com/NicolasJamar
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       random_404_page
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('RANDOM_404_PAGE_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-random_404_page-activator.php
 */
function activate_random_404_page()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-random_404_page-activator.php';
	Random_404_page_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-random_404_page-deactivator.php
 */
function deactivate_random_404_page()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-random_404_page-deactivator.php';
	Random_404_page_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_random_404_page');
register_deactivation_hook(__FILE__, 'deactivate_random_404_page');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-random_404_page.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_random_404_page()
{

	$plugin = new Random_404_page();
	$plugin->run();
}
run_random_404_page();
