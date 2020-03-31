<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/* Make WordPress install plugins directly */
define('FS_METHOD', 'direct');
/** The name of the database for WordPress */
define( 'DB_NAME', 'cglaw-db');

/** MySQL database username */
define( 'DB_USER', 'julesruby');

/** MySQL database password */
define( 'DB_PASSWORD', 'sait9_k_0sait');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a41c66df262f111d940ae2a720390dc5b133231a');
define( 'SECURE_AUTH_KEY',  '2d65d4bac576bc7273d38566dc9f24334297230a');
define( 'LOGGED_IN_KEY',    'a0ad19b63c252580a13ca3cf5cd0f3936095dd91');
define( 'NONCE_KEY',        'af9cc7c85d74eba938e7614600f16a3bb5602604');
define( 'AUTH_SALT',        'ed20d1e7443c5bff0cf58a03e9f8db4b7f1d7fe1');
define( 'SECURE_AUTH_SALT', '485a0ffc079a8ca302c357690fb2852f7b297a99');
define( 'LOGGED_IN_SALT',   '4944abfa1a58af6c697596320538b962c140e4d2');
define( 'NONCE_SALT',       'c737b9efb995af5bf182e6594316dfec7f8cbf02');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
