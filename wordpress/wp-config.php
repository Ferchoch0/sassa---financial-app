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
define( 'DB_NAME', 'pt_wordpress' );

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
define( 'AUTH_KEY',         'Y*=2qHww.u{eOI)G)ig*]~Jc)*tmUkY:R8t%?y2Z<h)[9HE~{!%[Y>Pc^4AaZRi_' );
define( 'SECURE_AUTH_KEY',  'EZEe(O;W|+;Fn!uuOX8>@seD qv3lXXJKtri]zk8+CH@C+6RJ9Zqsv0v/;?o_[(j' );
define( 'LOGGED_IN_KEY',    '%=v)pjx!C %EKVe>LstHK}f7/U?*<+23F+*lu_;$8#P6+b>Xa.<n$S$F1 fOIV4K' );
define( 'NONCE_KEY',        '=%shu)3iouRaL> ^m6a&Mv9C;<`{_v9fK,>xf(acNoG(< WJ0xZ?Lyi-^aqv<R[5' );
define( 'AUTH_SALT',        'C~kr(VL=&R~>HpX`>SlF&qn+k}h^`#`.H^qQBz8xQB3 gO+f>!b)%LEb+B!@PTKk' );
define( 'SECURE_AUTH_SALT', 'q?(DwaSO V-S}$iE+|fNLVwUmx;YEU3tDW#z{Yr-|>+c+4,a#*-w:)o0Mzja|78Z' );
define( 'LOGGED_IN_SALT',   '*oS6?v#bb:SKrgCz9?t*J?vjr}x=yZh9fJ-XXOX}WPWuLwTI|T)ZVJJP-`$kr]*$' );
define( 'NONCE_SALT',       'E|]54=pCq}D@R.+[cL_ei(JrYc-[.Md.c#-^#(q>}o-4|06vFevuZt9P(ncZu)Ez' );

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
