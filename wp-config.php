<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// https://jonsuh.com/blog/configure-wordpress-for-multiple-environments/
// Set your environment/url pairs
$environments = array(
  'localhost'   => 'lovell-fairchild.dev',
  'development' => 'lf-dev.sandovalcustom.website',
  'staging'     => 'lf.sandovalcustom.website',
  'production'  => 'lovell-fairchild.com'
);



// Get the hostname
$http_host = $_SERVER['HTTP_HOST'];

// Loop through $environments to see if there’s a match
foreach($environments as $environment => $hostname) {
  if (stripos($http_host, $hostname) !== FALSE) {
    define('ENVIRONMENT', $environment);
    break;
  }
}

// Exit if ENVIRONMENT is undefined
if (!defined('ENVIRONMENT')) exit('Hey there developer, there is no database configured for this host');

// Location of environment-specific configuration
$wp_db_config = 'wp-config/wp-db-' . ENVIRONMENT . '.php';

// Check to see if the configuration file for the environment exists

if( file_exists(dirname(__FILE__). '/' . $wp_db_config) ) {
  require_once($wp_db_config);
} else {
  // Exit if configuration file does not exist
  exit('No database configuration found for this host');
}

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');