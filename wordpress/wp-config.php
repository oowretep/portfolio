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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'wordpressUser');

/** MySQL database password */
define('DB_PASSWORD', 'P1e6t1e6r3redgolden5!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I#E8zl,^qN/*{DqfEyD|.Y6[!)x!*-gLxfE4Sg.wYBWn:p~5d,TrF@w8sEN&wHI{');
define('SECURE_AUTH_KEY',  'LvwhnIX{r^@S6qY|g &<6_.3|zf[XGW$lRL1tZ;I+7zp21`birQYVNEirKr*?Q^/');
define('LOGGED_IN_KEY',    '1#1d:WH.<Ty[$c){rY@P]:k_{5s~21DEvGlX(ST`1aeA{|I2*J$kAP@!|@y#h;#5');
define('NONCE_KEY',        ';WkZy97%u#x0>/@XnUq0UH!{I}2tY)y#gl+w@$}Or%]t]?`YaQ^r^!usUsy!-ji)');
define('AUTH_SALT',        '~G/C7,(y;?ctSveEpV~^:!^qC@d_,:gt1h[u;O+Z25qoe1VmQ~lpvyX8cRgU9gg`');
define('SECURE_AUTH_SALT', 'pim9!U&uXb8ak4i__TsaPPrizR8(E#u,d<WV2D.Vn.)rEP-X&k(Y8UGe7)F.czHo');
define('LOGGED_IN_SALT',   'u%GC +~H[FD,Ko|W%D(Z-4i`&E>)tNcX]hF|u/R56mBX^UbC5wctEZwhVT/CPTA|');
define('NONCE_SALT',       '=$01[{ hF=S[/lpvB2 ~#nYMmEj|JK48`hjD}!2+6YZU{*fY%`nwGTN*G !DfjL2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

