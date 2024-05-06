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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'number1_db' );

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
define( 'AUTH_KEY',         '6|I~)e6;,hA3</_(+S>8[1?y$.YR7|F91F4jxY,$)cM ~GaTjL/`m<}83fXX,9v@' );
define( 'SECURE_AUTH_KEY',  ';{tFNtD4^Y}rc=j85y1_hGz(/UN/+UhWwT#j>j9>%qRICaqF~jb:] ngfS-=b[:[' );
define( 'LOGGED_IN_KEY',    'd[6.>Lg~NUi6m.6YW3V-&iXyN9ba5e>6n$^8&Bac bG1h-U#mba)hmFgwiL 3B?w' );
define( 'NONCE_KEY',        'rZLMfviphMxI3X~M/1a&^r6a20I^Iy-VG~V#k2f-Q13 P.e9PcrTRUcn/,qi#Q;C' );
define( 'AUTH_SALT',        'jQB0[6KB%M7(iHl^f~`(2|GMlB:?,c MNmP}V&n+s,E) C3bfr5*YbCQc*mPg9hA' );
define( 'SECURE_AUTH_SALT', '@)wI!,f-9wQgR>XusIC0)<fqdS2&p[%R1h$Vm4JF3 8-l|Z)bt*N2Ew>PXUneWXQ' );
define( 'LOGGED_IN_SALT',   'kH|>}9#4Qz@[F1FZObXI}.rl~WB,)PDDT91&[MCPg3EuNk`-(7JDx{UZrSczCLwc' );
define( 'NONCE_SALT',       'T~vhzg``i[nOK?0<xpK,_GKI)E0oR@ZP3)y:~>)5C<-w0/JD&8j)P;hE9v;#aP^7' );

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
