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
define('DB_NAME', 'wp_project_container');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.=<be8o7_+gY_%#L&an_0*$Q-4[%|.cUq3gziZO%@v0AC9p9&OdewwVT<#-r2I4W');
define('SECURE_AUTH_KEY',  'xj<5[u>7;Eqo#(l*MVoz<xuTx0nWYRaMH!^JN(Y0Tw/gNxk19m1 &a|/fpci;Ll9');
define('LOGGED_IN_KEY',    'C5q:_xVx^5w_;j7LGB=Wh357(+d}y6C=<n2[t~B6ODPZP.=Lp5OQp1V&B-WA_Ec8');
define('NONCE_KEY',        't;;C3y4M[m)<r|VwpqwItjV7$k<]1MM5CeOQ).:6S-dt$;EByHC)HJ ZiftDy)%U');
define('AUTH_SALT',        'BtBAQh>=(4-P*ZP[=`/V&90J$r#:,+PT#46+8dT4c&KC~;*[+Q04ola<gx&B=E#8');
define('SECURE_AUTH_SALT', '?1:2<h4;)3w!bZndM;7t*^%/e^jYRE7?$<JlbTM~N(fxS/Y]i230ce=saeaIT@(E');
define('LOGGED_IN_SALT',   'e$Tx2 F6UW7)X~@I N<#uP-mE{K`<zh2uH5aUm=1Wr-qwQNHa&h(M.Ye?#X5O;1z');
define('NONCE_SALT',       'ovyp~X!&6:j@#R+gqJ=qiT9PD7GF).+sP=KUXAozk!`Ps5Tj*mxh~:+<=W=]ehsg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppc_';

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
