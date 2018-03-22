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
define('DB_NAME', 'sncanon_wp4.7.2');

/** MySQL database username */
define('DB_USER', 'sncanon');

/** MySQL database password */
define('DB_PASSWORD', 'Skittle12');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'P2HXw}~jOj<On6iplbHv|q4vixm?J2L]4d,(1t}C<d5FIz2?n-*[sE<V9i:# #<b');
define('SECURE_AUTH_KEY',  'yst$&`YDqc;q9my0Tdt5mteRF~Nc<L<)wL7RTA.qW)*L{>JQeE{$X f+/(PnTP0O');
define('LOGGED_IN_KEY',    'G|Aiih Gy`#W?*k|/; fyTZ,(n@)ZI8FF!&&wlRzyXo.%sBg171C08MX7j]FrS$K');
define('NONCE_KEY',        '5-g:S5OVoFx@*U.KD_Ur_Iyb166O42Z>El3OCCIX&p_+*Lb<59fQV0~J5|8hdt#@');
define('AUTH_SALT',        'T[g:AMzfwY~?*/4R;e1bQ]rUoS`lbl;Eg!&A5H+cg/~o[nN%n{I,QzuN-W>R>TEt');
define('SECURE_AUTH_SALT', 'r*n,VK!_a!v1?Tnh~]/_)X.MXCJ|]EFZ@/g kpw]4DO]=j0eGCdL-+3^z>*+lo4j');
define('LOGGED_IN_SALT',   '|dx;P]}Kb%j$xzwXZ^p-Ib#<L49GnVazn%s<wF=-0iF|h^Lx<_UqLJ%HCtCZZvZk');
define('NONCE_SALT',       'gM{sqfwx4CK^Mt-xy`j?W}<g7iK2WXb4}bnF6xu6,3}]XPM 8I7tD*]SHjV|WTxB');

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

/* SARAH ADDS THIS FOR EASY UPDATING */
define('FS_METHOD','direct');
/* SARAH ADDS THIS FOR EASY UPDATING */

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
