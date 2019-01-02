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
define('DB_NAME', 'trj-2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?L5zv-*iib!eG%f2NSa@%Z24icr2J_(^3-LNa+XoV),Ghkn&AZNM`<3r=,t #rky');
define('SECURE_AUTH_KEY',  '[/Vk.}_D@]Czf4=+V9X+roUxi@ q9nFRcQ.y&Qw0kMGV,&6O:+Ao1 lZ2`L/P.kL');
define('LOGGED_IN_KEY',    '~ZI%i{0@j1.x7ntikH]q0SevylZx!2SIhySMBr{!*?j2{AOXZ4+qAW-;ndFPH7s}');
define('NONCE_KEY',        'kT3T(Rc*6X:XW?yxaFp_0psYxiVMhyTIxibUj%RUzN|w<hkT8+?k%o7Wp6_~_ai+');
define('AUTH_SALT',        '!h5di](q?V%D-9|L=oUH[tR:Ww$uW2C7T@5iWhLF0d0zKzk!*)$&~H}^QKOi0tq?');
define('SECURE_AUTH_SALT', '/3ZB+:>I=ko3l(<^=0=0|}a?4F5^g)1x]|h)>JqDH(YhE?=MkBHG.h;zjSm#O~K^');
define('LOGGED_IN_SALT',   'bYq4h4G(AjmJ=701vW}wn)_E6].E7V3[q7*#@9ZU>8}:-U18-/Rim_w<2@;8j[h>');
define('NONCE_SALT',       'PBxLsWw=$ePMZ||r!nG8gQ-?]_A0q(Qg7v%Y[}l8j&5!}tA%.awjKD7{`zL9I/d%');

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
