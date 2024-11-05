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
define( 'DB_NAME', 'db_caldenia' );

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
define( 'AUTH_KEY',         'G=5W}Y)-@x`7^Tb|.1SfO/7R[lm#a6X5qK]-)V,~C&j|pZ&c^;^E(mN[k[;hC}1A' );
define( 'SECURE_AUTH_KEY',  'M8Z39)ldzO1u2M:f;pzI/_SI)F7U,b_OW!afdyo0t~vkY|umL0yT2G|XO0X Y|G4' );
define( 'LOGGED_IN_KEY',    'y20x~:^5N2e++XB{_bZn4vio?@hVf_/0k!-R~5oX>m(PCVvaida;Xn;dv]`HGLF/' );
define( 'NONCE_KEY',        'EcqiL*[vX!j=TVSLmv+eAZF>8r,mLU@pr?.szd|<KDPBfU=QM+In>y0I?a!$&ppW' );
define( 'AUTH_SALT',        'rfw#?@{RN`6`3gW4-?z`*j(Sxd%pbp.yr]we03l/^F4k|jdFoJWNPM;[7g!}yZAy' );
define( 'SECURE_AUTH_SALT', '0ox37cKpk%UqZ3HZKh,5VX%Lm~JyeeX?;OCyvK fxOQK@SwF:]nn{uw5av@c+_Jg' );
define( 'LOGGED_IN_SALT',   'N}R0{5#W4$uX ey_]UO61@gE$&VJIud=fez:1-uFuyyU=B]43vOlF4be[3#&{YnD' );
define( 'NONCE_SALT',       '~zHTt@b/15Hr#LKE v3v{b)[SsFkvuJxR/Z?`AmfWc!`kxh*.G]Sp@St9_rfhlJw' );

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
