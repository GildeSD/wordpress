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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{]*UqIAj.tj}d%G7SlSA9]|2=8fwN?Tpo^>niN%qZb90(/{mLP?*NDDZv[p%9/a;' );
define( 'SECURE_AUTH_KEY',  'A,*#JO9d,ZH;e)Wg]u>:+3/O*s__hXnZ0d]d+$#CzviqHRMDlN9LPTb^?=(mfX#e' );
define( 'LOGGED_IN_KEY',    'IIftkb|_.O]K*8rd][pWXJoz9M8un7e:`O;Y;]5#|t 0Ulp!P5/tD e36J6R(/#`' );
define( 'NONCE_KEY',        'c5;dz$VlbepX#D.KW6w3j7]]V4{A!i^ej/@m7H xhVxV/_!/;ZNgR<o]LdOq?*l~' );
define( 'AUTH_SALT',        '_(;Qd#jRy@H/q(K-];w+I4Dr(XV_#=xTdKYe3?}GA#QcM?IS!L8jyhQi=*f]4H2d' );
define( 'SECURE_AUTH_SALT', 'z$s4E5V!hJ5 9r.mOIiRZ4Gb_wpM}<{o*c(b4`zejOaNWQ[%-7>Md2h@ekf_-hg7' );
define( 'LOGGED_IN_SALT',   'Agx||5QP`K+FhzN6_w3F|S4=WIX}BHp?auJsXLywND6ol,E3:WY8:[,{(Xj+[~I]' );
define( 'NONCE_SALT',       'K#-?{Y93VHRZ~Yo%{duV1o~i{<f:@lC)R(OIW5;7~A-Ql@y>.3B@T&Z7%cm$f~J|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
