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
define( 'DB_NAME', 'wp-objetiva' );

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
define( 'AUTH_KEY',         '_m8uHltHG!D;s6h4Of<Pw;2k<7[@d^&o_UB,z7_LZ.pHHu#2!bbTgXw$g-;d6HkN' );
define( 'SECURE_AUTH_KEY',  'Kzh{$WChLzRW-SO(@n4l9/8nDb`J<h uarI{>WW55]v(Wz29OvL_qKY_qLP2[D*{' );
define( 'LOGGED_IN_KEY',    'J=0!$4#t3^i~tEu{5H$Y adwD,0x%.ltV!vyWm4U setCPd4j/:6Exmu=ASNBH_m' );
define( 'NONCE_KEY',        'VU+0g3;fy|6cyTi&gsq58)~ZLPltV9p`3f|2J%};3qPnPxmnn|.<B,!pJI2=Qe8H' );
define( 'AUTH_SALT',        '=(CV}xTtn2]m?&A/@?,;upv:$o&5r+dX <O7k:-%uv-%f/%m>l~ba]!gXupIaAB<' );
define( 'SECURE_AUTH_SALT', '*GYH`E%VrtC|G~cxC$?TtuI=]iuii)^tC(85w#Wd%P*7^,IQQ_l~!xUY45M[k4(a' );
define( 'LOGGED_IN_SALT',   'c??(n6 l~IhYh!9L@@A}O3,7Y_iF] htg0D&%~%nNnS!%1u]#I6H0$@`-;2L((kR' );
define( 'NONCE_SALT',       'U-jj9xgrofybR3k%~JvB UHLZ+`Y+L:=7!VZ-)Y3 $.&+Xg@/aH}@|t%+c~,==it' );

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
