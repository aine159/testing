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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY',         '$Gr)j/BW+5f+<U|x^%d|p7ei|Z-Wh`2nxJmn~KESmTh DEjJ0-g,-6,kF[;|-0!+');
define( 'SECURE_AUTH_KEY',  '<Kfnngs9*Xy4anF8mg`3qV=.8=S<B$8a15|=Jn/+Dz-Q/%76C/(R+=K @WE-MOkT');
define( 'LOGGED_IN_KEY',    'T8y-s)XJy#tj.~RX*fODvZS![^[:Q7U5fBrj;zc<%l|Zb6UD$x_n(cOx.,DBq2[a');
define( 'NONCE_KEY',        '4PW,?G21gUklU{#$p:c5tFv~|:oL`Y}j-J0=STm7>-{M2(s-dat97Sjw%fN&W+DW');
define( 'AUTH_SALT',        'X)Zz:kS<<wZZBJSX2%F8Id+{jFT1i:f1qP0`gKnbYWI^8_G=w.{uXS4&f|Q1|i5~');
define( 'SECURE_AUTH_SALT', 'h%z{b=DC|T_|YYSS`!6-S[@1HYT@ds.TD[m9dv-1LZ>=;PuXV*|U$}RKv&rN(5>>');
define( 'LOGGED_IN_SALT',   'B)aZM#AU08oa,68cLg:WOz9)i3Ih=0;C63R@yYX5Yp%E8mscvV;>.lZXH5XIp/tl');
define( 'NONCE_SALT',       '.t@5LEw21,Y3.R-x~iiJj,OK(lSMQ6p>zn[f@-DPVD[7)Cou4o)As8T^3G-7|ajO');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mysecureprefix_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
