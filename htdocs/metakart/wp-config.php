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
define( 'DB_NAME', 'metakart' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2qc3ET%[bxpnNhZ:Gf%X+=]_+]DPyiqUbs1aZ*og:j28(+Ws}w?910]&S8t:sUKI' );
define( 'SECURE_AUTH_KEY',  '@B3TKp6kWNJoXA1[3s;IPh: NZ8`fvsRA![G=%K[oQ!M7.WfLJzooML?0(5@_J`D' );
define( 'LOGGED_IN_KEY',    'o0C6AjJ>lKNInL8XCZ9a$MIsg</5)eFr[|Pmbs4$v7f(bvTZ]*ab?3M(7N5>wL-!' );
define( 'NONCE_KEY',        'DUgqo!G>+.gvP$6Is0WMf.BL.VtDNo]P@lUf>a%8LZ/14cE gv1/xXt*/U 5DD1}' );
define( 'AUTH_SALT',        'C^db2rkeVXL)r&Yc>D(I=ei{x+)*gBWQ:qCYI+aBG4$UHN;bxUt+pC1AqSe#0ckk' );
define( 'SECURE_AUTH_SALT', 'e5)$uqU%a,FqLNeuX5U>|SJ2-zwWc&}+SF!8IrY{.6=iQ],%i@lW|`/oV0P&eT;-' );
define( 'LOGGED_IN_SALT',   'X=WK~CxA--lO%jEcP,B!V1{ZSN8M*tBdQOT?NZLKCl|ua7DNXO5XWc*Bx.P6PQ+N' );
define( 'NONCE_SALT',       'l@`&Pt|S7JibI 9aEo!G}XWRBKCP1%Wpeqa*@y%Q/F>#_W;~5hoFE^AU[(2-DF%.' );

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
