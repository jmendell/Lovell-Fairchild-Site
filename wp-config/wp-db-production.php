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
// Prevent file from being accessed directly
if (!defined('ABSPATH')) exit();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lovellfa_lf_07_20_17');
/** MySQL database username */
define('DB_USER', 'lovellfa_star');
/** MySQL database password */
define('DB_PASSWORD', 'UH4PirJTKryUgQxKXFaKeken');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_HOME','http://lovell-fairchild.com');
define('WP_SITEURL','http://lovell-fairchild.com');
define('FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DkC6!|wR+|3+5Cx@ZQ?9q<U?5/$eCWU}|:YS[51%N7lBT:p<-<,,j9yY8a_8d|d8');
define('SECURE_AUTH_KEY',  'OvL =OQ+1aEuz;I8&Fs-?+o=n!h+V`D$6q?9d4@`+c+?U]k !hy[%%#NXIAQ/|WI');
define('LOGGED_IN_KEY',    ',ibK1#tHu+ZnhaQ<f+{7DIOtGw-`&%D:q8k:yY/jm3wOjW4B+A;%rsR(lyy[-)K=');
define('NONCE_KEY',        'Zu2|4ZyU(iPeS3brd1+Pvbbk[`a]J&+5o>,;W-Y=>#K@0=]E}D&/80]4 :W:u(=;');
define('AUTH_SALT',        ' q;OIWI*vStv|-si)/fY&rF{8u7VWT%_NNe*hH+dcRl|mJe`]_N>CR|R+cxR~y[:');
define('SECURE_AUTH_SALT', 'Zb2Kbb Q|U*}3j pQ&L~RxpQFw/jBJ*e07-C)HkW!r|C&`|31,tKnb6u?zVF-nih');
define('LOGGED_IN_SALT',   '_skLhE@d[G1xXe/W/nhQc  NGO(Dh4%.z$i+y:CQ]WZSt(60K^/8H_c*n>p~NVdf');
define('NONCE_SALT',       'D@nvLWtdu7@+H!Yb2d6K<O5gw.jK6[/.g4nKO%r,t2M=X-L==$W9;KJgBq>S }J3');

/**#@-*/


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_CACHE', false);     // disable the cache
define('DISABLE_CACHE', true); // disable the cache
define('WP_POST_REVISIONS', false);
define( 'EMPTY_TRASH_DAYS', 15 );

define('WP_MEMORY_LIMIT', '128M');
