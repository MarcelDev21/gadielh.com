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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '77c78caafb5441816f5a05877cec609c9c156c6fc3fd2a2e' );

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
define( 'AUTH_KEY',         '{7Rb7xvsmFOFTOvg|t{}by>x8)vy >o%sV;7{PMY~y.ml@O%YU1,BA[J{{i3u9h7' );
define( 'SECURE_AUTH_KEY',  '?ux^_A%W1c8KT>%6_%_@no!nB5BKu*},2,nbs[kkdt#yvT=JBow/iuOC%mk` DI2' );
define( 'LOGGED_IN_KEY',    'FOk/VP.q]){b850+9k1BBk,duWMeq;d(:8wv+o[nZ^{i5~dr=GFzV}6P}ZGz$uAd' );
define( 'NONCE_KEY',        '_?-)SkjlTyBU&aVm?XYbv mPkiJqy>I;-|sdk}da(xjlN@djxXG?37|0l~[/YIf+' );
define( 'AUTH_SALT',        '/(j;}%9%*6l-yFwb)vz/&HWc`-`,S*UG;iu#[ly5{vYE5tI;Qj2fl{ZE#Rx$;O8X' );
define( 'SECURE_AUTH_SALT', ';AFmyTmtCZj,iGCne5Li.QC0?%G#HvCP(`Wz<=c4k7>6yYZg*oVBT9%m_$E0)QW5' );
define( 'LOGGED_IN_SALT',   '`{219}q&@`8YY|xI-#IaYxV?c{uBWM!C:@v+ICI<L7qAH?L;}sseG74x:;<g# jL' );
define( 'NONCE_SALT',       '#x];h!eo-=[f!Bd9UE$fws&Vl}`LAA8NY3Ln7i&-W%|2<Q !_qhzBwUZoxN|-$7r' );

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
