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
define( 'DB_NAME', 'metaverse' );

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
define( 'AUTH_KEY',         '_iv/Y7$X3*>))5y=,=.m}&@XZMiX|7Ti2K`? MPn9Ninn(z_SH:CBks%xAv@,>vq' );
define( 'SECURE_AUTH_KEY',  'siO5(nQ5[Zn2vd{X$nx!h|9^fYHRozj6OAl&L%({?Gu%/^lLDM@EinLgaBaxT/e:' );
define( 'LOGGED_IN_KEY',    'N|baRKj) 60qfwFtvd)~xH7KzkRYip<hJNug<IDPo2F%ns[]Cru(LT#<oBjA9_?L' );
define( 'NONCE_KEY',        'bC?xoD@r*9/L@!Jgc @<<sXQ>#b!%w6}?WNKN<HeB|[iAD,o8pKENtf_HLVw6UU2' );
define( 'AUTH_SALT',        '8S-m?ZC<8O9bJ aVBCwvhc/!T|72Iu.yYWNBRlX+3Wg&%$JlCK>747+P6F/ol|6,' );
define( 'SECURE_AUTH_SALT', '9a7.[U0%RJ=9/(nA4/s$SHmV:{GbtMz*QP6mWCA%dlovw]<st3BXmtb`0xxE1;0g' );
define( 'LOGGED_IN_SALT',   '!(P,-H?{}Eu@G.[Bf{P/faKBHC<>2$&C3M9 -{HWRTluOU2FG7,]}^mzf3`],tZX' );
define( 'NONCE_SALT',       'f*FpfUI.~p5._gEv8;c5*aH3IY}!] ZTfVgE^[-f!PC?c$arL4/MJ@;NHggouo^O' );

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
