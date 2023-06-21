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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joelgross' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Info@123' );

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
define( 'AUTH_KEY',         '`pbZUH2_nyYTBHKA<7.BqQfYGZn;*TFQ8K4F`v:rN`SrS{bXj#`>ldPhw-X?^+%R' );
define( 'SECURE_AUTH_KEY',  '|:<L&  },MO$6te|}0T%[_aHAkw*2?NX,$vu-FBhC~lpcnhefG6fNe1-CS<cL{[[' );
define( 'LOGGED_IN_KEY',    '[EgZa`ZFtTwPR!.524I9ROpkj,`}/LQ1x}.vQ>EUV{B~iz`tp`rUT!DE+9h:3#o?' );
define( 'NONCE_KEY',        'U9AGDIpRh<gJvGzq _a=a(9zlyG83927Adf,XL>H;#c]!Y;zlS$7$fp[BJ4~E^}0' );
define( 'AUTH_SALT',        'qnoS?e4xi8yU*:]*m2o%OY=s2D+JR_5%~Dn]V:l1n3ERv07mx>qua?M%GP%V7/No' );
define( 'SECURE_AUTH_SALT', ':b8(_lm|9hLH=wG7WzwjFyAqbS$|n=AI}(*Qqv&6$8F1=L@coO?:|)nl>Yp<U^}O' );
define( 'LOGGED_IN_SALT',   '}MC8*}TO)/ Kcyn!90]w>OnR79@,@CYFAWWUQqrb#CNes^l}L1VF@d7^52El}A<w' );
define( 'NONCE_SALT',       ';Rjz,$bXmnTl<PPO#Y%o1)?4K+sOiY[S/cK0OpA*{LYP,.O=z=@rRlmJe4se[aKO' );

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

/** define read write permission */
define( 'FS_METHOD', 'direct' );

define('ALLOW_UNFILTERED_UPLOADS', true);