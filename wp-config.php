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
 
/*define('WP_HOME','http://biz104.inmotionhosting.com/~micha158');
define('WP_SITEURL','http://biz104.inmotionhosting.com/~micha158'); */
 
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'micha158_wp768');

/** MySQL database username */
define('DB_USER', 'micha158_wp768');

/** MySQL database password */
define('DB_PASSWORD', '74v5S2vPwd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xl2e65admqeikhb9wbvk9behxonvnmocyphxd4fmrbehdcojdr6qqn0mn8m6i0wa');
define('SECURE_AUTH_KEY',  'ofojbgmqvef1a5g67mzdp2tymtartajzs1phubgnaz5e9cgrk2kus4ihpbn5rovr');
define('LOGGED_IN_KEY',    'ocuzsmupfphlrsorfbirkrc7uzjn70dhubk0d4c5bqxdyiqlvkh9z8elk6xnwn0o');
define('NONCE_KEY',        'hifoq9nuelaliphu2wnas0nkckzvqggwzswdum5mjuk8jjawwidemor5w5bkg4ts');
define('AUTH_SALT',        'xrxvfo9mtlwbn8ftepe1pt9aha1vtxrfrqvwep8x80ikn2phpyfdqqceysquwtxe');
define('SECURE_AUTH_SALT', 'ddytisorwvgj5qezq2r8jh0kah7n1iii7ezeui8uoecfystqhizrb56oirnr7yuh');
define('LOGGED_IN_SALT',   'oubpbbektlllnsfk7zomz76z0kdccgwa208bgepabz0dgtk5ivamwtqytunfc1ey');
define('NONCE_SALT',       'w9qu9ufmsps7mvlocmbfishvjypmgrdnqx7mnevvrq9a7l4tixcrrv6ablehn5pr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
