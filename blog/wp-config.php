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
define( 'DB_NAME', 'u433337908_04RrJ' );

/** Database username */
define( 'DB_USER', 'u433337908_7T9Wx' );

/** Database password */
define( 'DB_PASSWORD', '7P24kOBkWS' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '37)2a==8%)jX){l?V[ppyCJ7KkTP;+n5u#;OQWD_IS;OZ@PW i=M8]oV-[^(5d6P' );
define( 'SECURE_AUTH_KEY',   'N<$(VWO8W@k&Zes&[*4X@(|@f*Ci>O%(*-l(a G>@WzlUFey]wRpzlGmg:MFFr?1' );
define( 'LOGGED_IN_KEY',     'k}Y^QU:U/v?W:]1b}IIoD:0~|@b[ZOL!quR;z_qb+y&dsAkZpS.}6a9|D_D;02}-' );
define( 'NONCE_KEY',         '2|stqPgoAA$GOL6(7b=5S1d69~ngs@*Q^1JCcWtOCFeAEIjYYc 4U5KAza:@_Qf ' );
define( 'AUTH_SALT',         '[&:NSVwz9`Si?Tj}c$`+<{5us&Ic[A1``1U~nK-qd1sigW VICjmJR%JUE*HT?iw' );
define( 'SECURE_AUTH_SALT',  'ozeaY9[<}P,Xp`Fq:Jch,tDh%aOFlV.PQ!@Vh|{L}00#kGyq!j$JC}s[st0e]@ju' );
define( 'LOGGED_IN_SALT',    'vTY6,m:@ksEz7(euPsZ&(sJ0T(/h201sVh!nK9=Q5vB*D7!d@%zH6.E|7Cvm.S-0' );
define( 'NONCE_SALT',        'xE9[w8Y7G|)FS@|azP9Tdah;}f$~C3pq@ftC|w3j5Kjqt<aw0VPMhuqQB<cL_>L,' );
define( 'WP_CACHE_KEY_SALT', 'bN?`MT</sQWq^^wrqY*d0y)jScy-8O^#@?<VW`O!;{NqaP~*=?^rI8q%vDM?`H=Q' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
