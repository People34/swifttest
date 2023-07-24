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
define( 'DB_NAME', 'SwiftTest' );

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
define( 'AUTH_KEY',         'oS=671b=iX5wZqejZk(y@cn%$3.&GKQ7h&8*^7d1~L`c*k}T,rez15H=h[{uk.ZY' );
define( 'SECURE_AUTH_KEY',  'sU[nuAH:3dnWG0Y<*c7[,5@5~ncoK,G$/G9mU&%E.AWns~$=qr+ZO]Vi,F,PJ#|Y' );
define( 'LOGGED_IN_KEY',    '`CTi+#FBRid<HEPKU`2^L&@dB&D~Ntbf82FSuxI0Ko@6uBWatQ k;rnHbNd;)ime' );
define( 'NONCE_KEY',        'f7.r*~9bDW[bQa I|dSd,xFZ`Uz#{eltkpeBn^F[^1c!U#tKJY9{V|yN!~kJct]v' );
define( 'AUTH_SALT',        '_V^[>n &*8mv*&#6lcctqh.#U^z~~[c6br-v%t24mRs5IwHtEM,L#B8;EE+<J#;x' );
define( 'SECURE_AUTH_SALT', '1y$CeD$qcs^Q|25EYVA_w_gzP5QFj-wkw 7tMb!Q?W5vdQ VFVV<No3NoIHoDX:c' );
define( 'LOGGED_IN_SALT',   'LAFr`a!FzbFqC=vq.s$lNd)4/*YbLgbGY.cb%nhU-{sR+*DC2)CW4<#t?kkycf.:' );
define( 'NONCE_SALT',       'Lg_vJ}.4G#}BazN+Gv?Z25:#;dzO)%tu2dP[Ii)c&_Tf;%pgM[,3PaMeKmhq3-E&' );

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
