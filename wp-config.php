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
/** The name of the database for WordPress */
define( 'DB_NAME', 'community' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D@DyS9;V;B&H9!T!PDmBC?sBD)F2BENRs?a&0[,QfM3TzVe @:RGPuXJ>kc3;?,e' );
define( 'SECURE_AUTH_KEY',  'Az{MR?-i9!FKG.n*#jq?ZLKlnkbpg;;P{F25E*lU|f3ne(f`>tlM9FCwSZZRIVOZ' );
define( 'LOGGED_IN_KEY',    '#miszX72b?=w}8J0{R-2-!aT/&5:NEa0+X?%).A<ebKD[~rcsdb<O8fWg(|_]wPP' );
define( 'NONCE_KEY',        '_$+-9`UT@!3QP8#[lSSww[_K)#XFM3eiLwBqr(hv`yAnN1^NR.GK%^dxxlv>QGbm' );
define( 'AUTH_SALT',        'ag.nx6Lm/<bdTzA)uq|+8p?X&9qRObl,]p:.K,]E.M 6-$KW(!)2t(oy`@iz(z,m' );
define( 'SECURE_AUTH_SALT', '1lNdCW8Do/dfRWqi~~)Noj=Y<GvG=#T*Iw8@J0i>)Zl9E.AQ18Lj-%}fIs5frqEY' );
define( 'LOGGED_IN_SALT',   ' d4jC-:PpMRYmVr}3~W7>w<?S]IN_6VHW=ys[2w!*Zj-]?Ku1gNlN-evi%AZf.aX' );
define( 'NONCE_SALT',       'u[X.,6SJ!n]eV<gy/,rIdO4*!O{d:KF,e%V-g$.U%X<-r|Yv.]NU|EvYDW(WR.4~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cm_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
