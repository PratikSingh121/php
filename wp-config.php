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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Yu@8@$)^^#^%&' );

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
define( 'AUTH_KEY',         'MG_bH&PjUaEiZ7L%sl<RH%;YBblM1$/HEgEr8{OXxe,+;)m?.%gkId,y]NxJmjM<' );
define( 'SECURE_AUTH_KEY',  'u$eyGbm-L{.TrMqdHf}56)0`[kfP{ 3>p]_jq#R7Qbk[^[;?s/~l+_;9-/E>~U|,' );
define( 'LOGGED_IN_KEY',    '*Ba-@9p0-VyAI@D /z)n0!|K:N%B?sEK[nTL]}r<x#uPYsZno4W%E/Co7_C#@MOT' );
define( 'NONCE_KEY',        'BMJc@X)iV$6^J+=:+Iie/GmK6w[@)PI[].j  uZ:PbWZ)@t]^L%HCJC&.`X3[k%B' );
define( 'AUTH_SALT',        'N(N/$|hCq340qN0eA1>u(Rx]t>!EZ`sR;FP9:yO,-/SoUY=v~p7g]; +0ZXJP3wC' );
define( 'SECURE_AUTH_SALT', 'maFy`<tWN^chvY[bKp Vd0FFviXe8D;&(^ZbB!3j+u(FpFJJfS}dQO? p`lfC0[ ' );
define( 'LOGGED_IN_SALT',   '1E[pf5z(#1?=Im-3g<DPIe5;b`;Lbr+%-t=dgFOi#`gl[HidEOp$1_h/QH`VP?@b' );
define( 'NONCE_SALT',       'tUgYTSRTnpd5qBp`P=%{Uk M61{ Omz,*p|@?eG9-~5$I=D9[es!RXx:Feetv5d=' );

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
