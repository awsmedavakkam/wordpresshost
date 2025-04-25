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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'FvfQyC/H@Wd1Tp+`4(_}cx+-M+fs:sYh2}tM}qD=V/DHI$@*(n_!/OQN?[*/qSz$' );
define( 'SECURE_AUTH_KEY',   '/O#T|]LX2PJ:X-P(O~&WZ7Y7e)u^`j]+y;Q(d_Ob-D|%4BG4Zk$W&m^5BgD` n7)' );
define( 'LOGGED_IN_KEY',     'o>>j}ToCNu3:E<]mxs+P1/c;T(h[pEZ]zg6HMUs^:HP<uZjsuGyZt<rau9jVEO`o' );
define( 'NONCE_KEY',         '-W&KkMKmWHNE^( m5l,Z5@Q{COrvUbn:;S.MA/%8Gm|14BOps0,.r%!}46tAL{qI' );
define( 'AUTH_SALT',         'O1HGVxOJOb[gc]qW5+>`$XjGzx+zg2+xNqy/T/sV/i(dbm1}h.Lu<n!J@hva|J[f' );
define( 'SECURE_AUTH_SALT',  '7{?fMIUhE_ bfe&>1Lf&hr p_;LPr b<|mXwd1:dqFjiw*`ctz>ci4aS}TKUI 0Y' );
define( 'LOGGED_IN_SALT',    'ANm@@nVn3Nhw|_5T=|`c|9%CZjnfQ%.@VZFcbaIc<9iKHb:Vp!W FTSQ_4y<T =r' );
define( 'NONCE_SALT',        '>Q_{S+L0:P1>KRdf[~*F4dl_5z|;,>9Fg0{*OOlh,~`BPL@}b=o-IWXF0d45$ 9B' );
define( 'WP_CACHE_KEY_SALT', 'pNrr(y4x%2EdAW!,@Kx@)_Q:8K+YuerWfD+)KQ{X.{9;<n# 6N>%qCb:2A7)cd}5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
