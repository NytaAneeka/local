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
define('DB_NAME', 'dbwebsite1');

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
define('AUTH_KEY',         '}U[3v|{Zs?ML-j`.bN#ye/+xe;gF1gD[(pN<qKK[*^&bBn]/pl&*Y]to$5D@`nH6');
define('SECURE_AUTH_KEY',  'rmC7H~-2F-19i]y%>O]A7W<3,Rrq_eJ&f~6T},p<3q0`L.,1`<k~X5G<G2wtx+~x');
define('LOGGED_IN_KEY',    'B=v,OM:[{k?Y%[oKfpCJ5 ()s~gI>(;#.34!c)=H@~nR,]BF;iR_)U[9LQWDIEQe');
define('NONCE_KEY',        '0J-dU?DGY.##j#vHE-o,jra[pf,57w* ~h*Z9S/$LLk-Gb9GU 98$2vtL;~wW *_');
define('AUTH_SALT',        '&+:1kp00IK5~_3<r:}Vjo~YNb}f}gh.-Yo-V4[4=^_sjB!IQ%4Uk@uJ.mEP8Au72');
define('SECURE_AUTH_SALT', 'vTdYZ[;Q,0r: #/U!ccFWuxb*>J@15_GQlLr=Hjt~K%2;!d~ysXdp4QI;m^.(Oq{');
define('LOGGED_IN_SALT',   '!dH,nkn;ZPEbwaj=VRD.`vhdJeVll,<TmV!psTeopzi>WO >K^Jk_(6(s%h|_0wn');
define('NONCE_SALT',       'ed`OyOQpd{wsD&Q5/~P{fc+P9HF^M~(PTFPsH=o>4D04m+b4aA73p p|9r`;0Q)h');

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
