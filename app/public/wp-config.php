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
define( 'AUTH_KEY',          'ohHh1dIp4nz.rHwG%i4Aikj>#oW $B5AHecdPcdMC<gV1p=jji_o|Lp%]{gS%DJL' );
define( 'SECURE_AUTH_KEY',   ',p(9+f`tU]/bmr*CFvuc`4q-w;Wt5a3|jC9vUKS*7@~2i<2onDyp9)s:6-xj5Ij^' );
define( 'LOGGED_IN_KEY',     'aFJ/d#8Bf{WJR]}RS&QG}WKYCE.h,d`JugfA<>P`_6&O~.2G2,?PuoTmHQrXV`me' );
define( 'NONCE_KEY',         '9y)_%}Lc)W>aA;I/tU&}+I:e9^]f! #sF^)AmR[~7bY:~l{AhN5znVJlBRww<`MU' );
define( 'AUTH_SALT',         'pu(vK<x:BJSD1LQD9ujI})eV2hRKT$tOK^#<RTXnOB62+vW:t! -QGD=;Q?.}Mia' );
define( 'SECURE_AUTH_SALT',  'J%{~XmL)>-3JvQ4wb^@}47uhK 0GFN22&$G?&ELTxY-0SQh08P?@J[1#eZb?Y[x*' );
define( 'LOGGED_IN_SALT',    'mx@|@?II5+!w:gj|Mrd0T%ToZ9=iz9!H]nZfO?k[]~pJ%Kw4]lB+DkKH3Ovc?2n6' );
define( 'NONCE_SALT',        'PL3,0tWtKK#t!}[@BGK7mU_nh3;J41Fv0/YKejlryK}R0f))szr8Kx,$g{7B^UE+' );
define( 'WP_CACHE_KEY_SALT', 'Tx9, L2Hi2{I~p!|Hk-u~`1mNRX#h6u,Py}j6anYW;~#*v(lloBp-0#]L;d!U-.,' );


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
