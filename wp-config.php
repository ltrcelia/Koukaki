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
define( 'DB_NAME', 'Koukaki' );

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
define( 'AUTH_KEY',         'hK+9UePB}$G&RN_GHG7]YOII}TX p3g12*DvyJV<^N_)<P-I8)Cj[^mx|Fn:N,m1' );
define( 'SECURE_AUTH_KEY',  '~f6I`RO~t,xKw{#Sb&ny8&3d};|;QZI&=Ubd>S~C=J{U+crARN5TM!IaG)M[6uqn' );
define( 'LOGGED_IN_KEY',    '6gfb{y1}}&3^Fkv4L=/PoiJu5KcN)D9wMI%ImC<?NzXi(bRP OL6eWuV8@[g/gbx' );
define( 'NONCE_KEY',        'x!kqf2B)AH{v/H%wk ^<|p#?ubf%hD`CH|%isr on!=`U5253BSWMf|O=V40@xD^' );
define( 'AUTH_SALT',        'cen-qR_%06L#}_^@G3LrL FF0~rk{@rU,=uMe#o[8i)y/mH?U{>=#12hr xFN8K;' );
define( 'SECURE_AUTH_SALT', 'f=c:bIez.,rI7-L4Jz1r|U|8 8A=]XS1jwP.t<Dq8}?pQ1b15V[l99P6b;aIUch}' );
define( 'LOGGED_IN_SALT',   '@Y3=n7gMo{+EW90j%=mJi+|!Gz`xbz8d@H9~FtA8`RdONi}-tU!$ Zr[D|-.4S&w' );
define( 'NONCE_SALT',       'r7Br3H`DLKi4uzQK)(HY3I+ddi&K0.*9~:5y8=B$H!{TYd~i=MV1,f;9k`L25J0%' );

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
