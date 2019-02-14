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
define('DB_NAME', 'restaurant');

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
define('AUTH_KEY',         'rE&8BwmZ(AG]VYQ9,.[^xWlq w5QqS[2emgEnVwxJ10yP:da<0GEm4$7m&^.#cd}');
define('SECURE_AUTH_KEY',  'cJ3Ut#3LT1O?+n^~fwx%1Q%oX)WxH.,nss{o?tL/0<2jM|-M$*?934Xe3DA!EoI0');
define('LOGGED_IN_KEY',    'yAf4Ea,c;F=(,hK{,C&oX*xAt3u2a8ulPTOQwFyFd>w,`q^!})Pqe*w~vW2Z:M;9');
define('NONCE_KEY',        'Epmb,Ug0H~V.&%6g$gP]vj.A^(aWKRD%t{m0c3O|^)6t%q6T 1AWE5@(gFH`$!7~');
define('AUTH_SALT',        '?WK@&~?^F:Ne <vE9qkjEO`!?Nq/OL3bh)~W-Pn+L& R~tNh{<h!XG,I0j2Hx[n8');
define('SECURE_AUTH_SALT', 'p!ah96Q+G4bv]xV(;Pb[L,Eb ,7ZJwH!@`u|OrF7b|&r[FS%]8/l=X^n8u}5+kcr');
define('LOGGED_IN_SALT',   'B#=a]9Lq<@wum39?0DWV?#~]C5YoR9!#gS}|vmy;d!:)(/V5s}2%w>B(XAV]rGz{');
define('NONCE_SALT',       'c:!tRew.:]muiu$P}F10%je*l[< >5r !u(lbe`<[@c+K0?VDfr5DFRWZ JXzpuQ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
