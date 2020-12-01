<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'pmelinda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'cip-mysql:3306' );
define( 'WP_HOME', 'http://192.168.99.102:5050/' ); # EXTERNAL IP
define( 'WP_SITEURL', 'http://192.168.99.102:5050/' ); # EXTERNAL IP

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pcCj,MCCPYlK^%ew6J{zGLy(zcMs5>V*egMm{|+B2!53+$|j3LQg2z@XCPTNe}kS');
define( 'SECURE_AUTH_KEY',  ':w`7pUBim.hR@xQL0S>P;T+{EpTQf$1GcTUa[C.|>9_7ppadu[:QAJk>5({(Iyxa');
define( 'LOGGED_IN_KEY',    'MtcU+p)!(+F)n*H]3_j^OGC+RF&ooF;/e+:25N*r>!fBXM]O-_6DesSHeGsHKr+Y');
define( 'NONCE_KEY',        'a+xldYN%6Hvp:*Y>H0E`^5o[Td9|p@rX7A_wx2<ReHI;qB]OS:F[-E%DF;j7GYuA');
define( 'AUTH_SALT',        '4JoNn9e*+[A;8[N8#^*U(5Av|J@B(X}5d2ZNydy;~[%obn<g*_^fdXWDC8yVcw6x');
define( 'SECURE_AUTH_SALT', '0[&#% |G)-|.;SBRpkgWa1n#?yRts<B]ix2 kQYlCXe+oWmQB;BTwyVT$a#,06SD');
define( 'LOGGED_IN_SALT',   'x!@@qM8/ztbwn02(1:wA!R|2osp-iQFT^h_!uDRA]|rJ--x YKbG)t*wnYvJnWw7');
define( 'NONCE_SALT',       '-& 85>^cM<p5*aq,@}v u;7E QY J<VL4i7yLLbvoJEikO:4e;}&_ `sS][UZOHA');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
