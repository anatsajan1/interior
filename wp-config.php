<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'interior' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ue1c9RDZT5gWbEniMzNmWXk5nZRttrNlrgjriVN4NnqX2vPSEQ86OLZGAepLB7ju' );
define( 'SECURE_AUTH_KEY',  'jVTdWoxRCvdpiauBPTY7NsAZBJcHnTHjGd5Y4WcQzcsKrT5n8I7MbgwAozk6sog9' );
define( 'LOGGED_IN_KEY',    'NzTXSc7SaIYtdgYZKLsqqg3hGHUDi7YIPTCQMJQ4tY6PXOKfiBtETYxgdO5iHZG6' );
define( 'NONCE_KEY',        'hGYr4jHa2W0sumZogCfVl8DbpiD2IOTVL2FdQtjnhj5D0gogsi5jq6xBbeZeXsKW' );
define( 'AUTH_SALT',        '7nStRPB3Kn7WAS7HjWqEcCT7D2YgCgNT2YqKBuJb407rAFDLV051OA5vZzUyOKGA' );
define( 'SECURE_AUTH_SALT', 'D9C7PeSKHT58ppzmIBjTqeGIITgOWo3xM6R0s7AKSd7nBE33YyYC0qrysR54sFwH' );
define( 'LOGGED_IN_SALT',   'bUnJOEasEq4idX428hd8EPtkMLzmhvicwcjxjIrkHg8kBCqi1XSfvfOBU9ez7zlN' );
define( 'NONCE_SALT',       'tAk4lzGdTIrMwK0FlIoeooouQVAOtuzfcYEkFTVNzTDYDXRryJlgKNH0gNg3dQsY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
