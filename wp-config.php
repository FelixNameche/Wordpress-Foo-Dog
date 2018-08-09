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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'user');

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
define('AUTH_KEY',         'a,d8T%Uj;75FMx*45;n7}0TK(KDcQhGmZ;[ua1/D1Fy/4TlV}%>) 1|G&i,8Wy_t');
define('SECURE_AUTH_KEY',  'H-bY//S&@f1<]w4<9]e.`P}#/2xU;{GK C>FG)s6;+SOD3H=N*vwCCEuH @SlR+3');
define('LOGGED_IN_KEY',    'P#@FM1a$=->y imx:VhT4C-m!$I<qy3[G,Nk[#oANkRBnF[xyR=s|)e,_)U2(^1c');
define('NONCE_KEY',        '1i-*h-<ag0UAc6Z.v42t^>=:h.?`7QbxxhPtSuG[BORHr3gO>l*bde-8&e#l38Qq');
define('AUTH_SALT',        't<5s^7}J+vHTDk}R:/%.+|_HNV;7jwZX@V#rS(^%yx}/E.@[1mK9}ijk@mgkN#&}');
define('SECURE_AUTH_SALT', 'k+d9..e>E8.9]h(#Zfr/g~*wPp$Y?e0i7Ey;x1Y.).oIV;Ada+vV&t~5!-Zm-w4[');
define('LOGGED_IN_SALT',   '/C=jDDGIs6S]=UV`p/L?p#8`7SK]~DmWLV&Y&J&1!wU>c 7vJV5uQctIM,&!=1KD');
define('NONCE_SALT',       'N-Snkg:d1)0%b6`*evLp#{=`pNJhy2 MBmVATC7?a)W,>-Z{8;D|%R3#A*JmJS:n');

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
