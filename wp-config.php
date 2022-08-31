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
define( 'DB_NAME', 'e-commerceSport' );

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
define( 'AUTH_KEY',         'S4t4quDroeMNouwNZAyIM3Gr3G5WUF82uCOK9iO5QvtuI3uNyZ31lMso6rS7eutv' );
define( 'SECURE_AUTH_KEY',  'wyrXnwpv7PYAr8RETF4KcHoPBMRIVYiNC6d1ko6fDobr7TPVGULF7HHTSDFL1Mqe' );
define( 'LOGGED_IN_KEY',    '9G0ybdlC3MdJ5xvUVjjzMvGZEmUnYBsD7yUdstZrkvHxKug7SO6EMEeHzy1l0cDe' );
define( 'NONCE_KEY',        'eTMWfIS7Uz41cf4qZ8XsCjj0e7BjlIIYrUcJuQj4jh34DZWz0YomFQbQut8EtRJX' );
define( 'AUTH_SALT',        'xPVkzklAJXvjptinmJ6f8jowi5MeRhUYeATOYEDL9FG1LTGdYJJ1AnTMqKUTFkNS' );
define( 'SECURE_AUTH_SALT', '1TN4Ub38PCUBuNIsYoYUlGpbcHS5FRsA7GBuqaV6YRVNZDOsuJj24J4vBbO7jpNW' );
define( 'LOGGED_IN_SALT',   'WYH7Yslxq9NTLp7RMaRVs875XLF7LYmimBSqtPh6WQEsNj7k5Fnmn8zRiVOscsXx' );
define( 'NONCE_SALT',       'cNghbM8gMzCWR2rG0HXh2c81fgmwZPqLD7751irmoD6VmIwi7jNcYouskAlD5PNq' );

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
