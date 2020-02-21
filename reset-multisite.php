<?php

/**
 * Reset multisite
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/my-language-skills/reset-is_multisite
 * @since             1.0
 * @package           reset-multisite
 *
 * @wordpress-plugin
 * Plugin Name:       Reset Multisite
 * Plugin URI:        https://github.com/my-language-skills/extensions-for-pressbooks
 * Description:       Reset the configuration in a multisite
 * Version:           1.0
 * Pressbooks tested up to: 5.10
 * Author:            My Language Skills team
 * Author URI:        https://github.com/my-language-skills/
 * License:           GPL 3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       reset-multisite
 * Domain Path:       /languages
 * Network: 					True
 */


defined ("ABSPATH") or die ("No script assholes!");

define('MY_PLUGIN_VERSION', 1);


//loading network settings only for multisite installation
if (is_multisite()){
	//include_once plugin_dir_path( __FILE__ ) . "rmu_reset-theme.php";
	//include_once plugin_dir_path( __FILE__ ) . "rmu_reset-permalink.php";
  }
}
