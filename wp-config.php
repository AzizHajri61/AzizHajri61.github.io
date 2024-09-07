<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_37210828_wp288' );

/** Database username */
define( 'DB_USER', '37210828_2' );

/** Database password */
define( 'DB_PASSWORD', 'p5E4]SO2V.' );

/** Database hostname */
define( 'DB_HOST', 'sql113.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'fx9w6m2ujsqaptnbczumtbescvmpqsqmgo8zail5tdhcprx1ko4mo2ew6tbupx02' );
define( 'SECURE_AUTH_KEY',  'eki0v3nlcnavqqrbhfmjpzrygdvg5se3b2nucmubcjj2vvxammvaetrevtyelo6v' );
define( 'LOGGED_IN_KEY',    'yzlilslhcefi74zzul8aenxlxq2yc59ubanvx7wcpxebidwzlhbsor90tzju6ixl' );
define( 'NONCE_KEY',        'c7e40cjwqqvjtdg0aitgynumeejabksjlscpz1oa4lb56855o1kutf1ebcpwtjts' );
define( 'AUTH_SALT',        'i3bqkm8vtwswjmpzq1iwch5ykejtt8kodbm63iqhwv6hgsj4fux41z1z36l4u8tm' );
define( 'SECURE_AUTH_SALT', 'tyyuxpf0r0lb3kwvzugn0sgiee7fnpdfle3gvuy16dzym4enndqhnjupohc05kg0' );
define( 'LOGGED_IN_SALT',   'ltgdqilrldnwjyul75jwhryejoa9tma6sirlg8dxwibur61aadikqu99vgvyw3lv' );
define( 'NONCE_SALT',       'xv7zayggtakqjg5z6u2hzpzsbheylabjidofmcnzbb6iwvtdzroehl3way7lc1jk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyt_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
