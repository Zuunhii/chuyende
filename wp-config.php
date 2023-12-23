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
define( 'DB_NAME', 'chuyende' );

/** Database username */
define( 'DB_USER', 'manhdeptrai' );

/** Database password */
define( 'DB_PASSWORD', 'manhdeptrai' );

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
define( 'AUTH_KEY',         'h=-tZ;q<qq*0 ?31*_dGJ%;/n*m]qVGBFX)Ed#T%l>6UHSyX}tBnE17IWex[U|Nx' );
define( 'SECURE_AUTH_KEY',  'kj6<zsVyR):<F0z%dh-CH{dWF#y.N]PT1S@x8|,-`R$f9iSjx`7s>Lt{@ed]^ 8q' );
define( 'LOGGED_IN_KEY',    'L= `GPO&[E.(nS4L0 _zauO,MJ3=<:ZI%}Ma7:u}l[Z[rkzu5ZL:&#*SeesbT9wb' );
define( 'NONCE_KEY',        'dXuw)Z0z`n&5m5VAA.q-oB;R>[A63xVpDr$E]YDT{#&&%?EZ5rV]$.G&@)PFa@%)' );
define( 'AUTH_SALT',        '02uqN6/Vr&Wo3_VVn;duY^(5{3m-y#zEW}ktI<:qc8Hf,y5N=bbeHs#&Ofl%R1is' );
define( 'SECURE_AUTH_SALT', '9v(P$6o(4s}5h/>ZRSMe#!Q&G=4oj3jRof4VI7HJv(l]H0kjYyv$g[M,Z|lO9-v9' );
define( 'LOGGED_IN_SALT',   '9T-,8}Zez[36*N:90nYm}!Nv]>H3E9}HKJ1G[D4cdJQ?6-qu=f`~2Khh!nQ8z=0k' );
define( 'NONCE_SALT',       'FVvL)s+.U0J(&lkT~Jm1^P(rmx0Un%QR-akKgaJHcB)F>mdqsG9utTKYVS?g__e%' );

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
