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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sibaneh' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u+dFnGTG66J>;(<sJlmb2N?od_t{V&TqX7Wb?zaz.c-~q1rzvz{@eh^:=GSEtaE9' );
define( 'SECURE_AUTH_KEY',  'F~)1s/NHH+}NOEtb3?s{]Smk,O:w2CaWs~Auo_c!?G)s3N #Jf_}LIKb!@x,f%LR' );
define( 'LOGGED_IN_KEY',    'H~c%65WX:0k07OgWyrR&~Aw_R|1eUU_1`>H[1cUo`EZSLx#Gf e P!dy4~bvMgp.' );
define( 'NONCE_KEY',        'mY?1Cd*O%[v`8%B``X{?)jp3.<HD)-rh#JOcR>bX Q{N0~KE:/B!lda.==M uer]' );
define( 'AUTH_SALT',        'ZC!;F:`Z]*.lRAeL>n);2m9HXe^2J[jCSVKJ=LvxnP8yDpypP#CtL.TX&`-}fHJB' );
define( 'SECURE_AUTH_SALT', 'W9V.,7}G[@?=VwOwS Z?isV{R0p^&A4X}k)#8bhm*sPxA5Cp+yTnxG E,yP*xDw,' );
define( 'LOGGED_IN_SALT',   'X*NeA>Q9g7s<l|yfze#EiQIIv~&UZZ|G>:aNKvZw)*WUvKey;@OTa`3aV~0bzhj#' );
define( 'NONCE_SALT',       'C v:735%r|+yfRi  cf$u,GsL,6g8R9>wMAA zdug@$~>lb&y$5I0u[v=L`|+cY:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
