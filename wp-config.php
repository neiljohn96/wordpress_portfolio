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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'v=LJIt(RAVh=6mwJS`>Cp}e<hVV#FJe-Jpu6Q6qv=<c^z|fPSQQpfYeBev>vYYb?' );
define( 'SECURE_AUTH_KEY',  '(dcC$saH2Y;ygO^a:8kV:7:GRL.xu;^6v#L$SRg%$&$O7^ibTIwPXDXYSpYUNhq$' );
define( 'LOGGED_IN_KEY',    'q~ u&bqcB=u7KP)1_jO[2NE<xhstf8I]fo_5bgV[V *-A7%ewRy&z}~p7?qQd&Mk' );
define( 'NONCE_KEY',        'inX_mh0GfIS^G$&ck4F2NVG/a.rAAXM$N$e&Pj<7tTu@d$5=|_K_FYdT<+xd9fas' );
define( 'AUTH_SALT',        '(2*kynlVx`&>z/o{wX]V^#VMdP[_-lJhj8r_[KPNTD7_+i=VP:-^`xhXc~@#AI0]' );
define( 'SECURE_AUTH_SALT', 'zjd>>N-*~3t@ ry#LY50IFa*=}c%Lv]u4r{: TNPTFBb;>fn`-8B924?cbb)<fp(' );
define( 'LOGGED_IN_SALT',   ';q`y)drhs8e7mC[)&2MK}HbL%aC{s53i/l+<U (cUO)PP-GCEeiILL&?OYddUy.L' );
define( 'NONCE_SALT',       'FN-JY$~B`mU-N.A 1My8}&Xu]}sMAKD$p;c$C;)QGSf%nxaL`~eAR0vxz12Q*cV_' );

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
