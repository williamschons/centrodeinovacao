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
define('DB_NAME', 'centrodeinovacao');

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
define('AUTH_KEY',         '%#9rFM(K_!~~e|eA;:B+CW`^.X+|~)&rDKF9%ZCe[liwGCvpvm/&DA74YSq(6+C1');
define('SECURE_AUTH_KEY',  '#7$U$mI^kTGY>}{!Jk#&4/<tnp6Uo)w/gl1cPy/S)uU_,ER(]XLdL1**+ix.g.Qb');
define('LOGGED_IN_KEY',    'p6[c_pvmGo7]P28XB6}{+A]dCrqt2%T?5nF0P|PS&aYBFI3bL*[C>8rBa91:YFkt');
define('NONCE_KEY',        't`STg&{I%H!_1k.ZWsUFMbB)HKS8j.R*1rw{c%$E8vmXG3E=*+$h_1pdiS^rd}_[');
define('AUTH_SALT',        'Vi{KF}d~wsoZ>m_|I=?=p~p%|3,Z<L5@%CFhke ZolW-ABA/7dMm4HC:hJCIA!Uf');
define('SECURE_AUTH_SALT', 'fH,;@<_$(,k0;^4V;XG$4+l Mo[}nE;-oy_c9_K9NQ.84cDzLC`6F*[m}a,:8aZu');
define('LOGGED_IN_SALT',   'Ak31~3Rh)#nv>b3n2m&x1w8Ws_&yS5gXW,gQ~807.L]@-[.9z;l!L,;ot?S+7B2]');
define('NONCE_SALT',       '[{tq=Z[(D$^.f{}vk%HyEYc{}^HOtDRo@NeY{AN0!])(7CW9ti(V>+hnQltR}lq6');

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
