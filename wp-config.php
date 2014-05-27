<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '?Cf8_UztCPQ+YD2G|,{8==?+b?i+v[+g0h`1g_2Ga_FrC<Y3Ep+a4 JAhrfD8>3N');
define('SECURE_AUTH_KEY',  '&W|t,IG${bz/NJuT-N+m6u7Y)aVn>u|<k~:|KX!Ugh?Xjg+XHWH+_JWxz|`n]D4@');
define('LOGGED_IN_KEY',    'I/VnvY+U$Mgs4,^dZS{ /tK73_<2D&o-+7_j5)ePhv4.T?;[bCXpqBa?+O/9 Vx%');
define('NONCE_KEY',        '3i)/zh{V 5`cH=DuHWq+xzI*4@d4L2`5`[k~=>)z|fM}:w!{xaBtih-rq&Z;dX5{');
define('AUTH_SALT',        '[B+-BFjuyh,c$eXU3sl4-x#6=9BB7VRH5FV{ U3ff)LccdZVYfim_&;lSLT_P+~&');
define('SECURE_AUTH_SALT', 'h_n2Ov8|{:gcb$%^Fk:B*0WMb9w5FGlWYonlVXz>]+_AD-6 40hd|_^(xMYA&27k');
define('LOGGED_IN_SALT',   'PFOZ-&G$NRpMRKGK,B>X?_a3:BaR^ayh[U>H/N0u0+Z0s1~7Zy__F.!HJPW>cjO]');
define('NONCE_SALT',       'NRn2b%boAwee4ha2YnVP>xS@d^J)Swvw?~Lkw`FTy=Q:NDonLgRr/k]0t16I3p@F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
