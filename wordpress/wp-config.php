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
define('DB_NAME', 'vertwo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'my5ql');

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
define('AUTH_KEY',         'I~X.g/Oi+i-~t]||1Ifu.Cbh}I/Ub79~&!R<F});2G=|iu~hjV(J;w/.W-p-tyKV');
define('SECURE_AUTH_KEY',  'BRu,Ha7!)+{h[CUMguuv<7=7^8x%5&}EG~>oQR ,3OzoewHlS&-Q.@5t$kVrvIpj');
define('LOGGED_IN_KEY',    'bZJZ67y5s!@Of6G2+aUuqFSb1}.j!Yw{Bs||fLjzU9eH)WC}P|)#@tqe}5Q!k.|-');
define('NONCE_KEY',        '#AwJwXPOLxV-6t7_>:4ll|@O%4MdzHE*?W[W*AyI-#UIrI&M}=V,;(MCr@{~#H;6');
define('AUTH_SALT',        'kZ|otx:1zv}GGlVab 6zPW!Hl,,tvf+a&F=P)NK &v-P2O<&4c0FMz.5B.v[_-&s');
define('SECURE_AUTH_SALT', 'lbxk)-@m)^ikfR $BW}qj )h$(6k7NiN7X7)*O!c#q4bT{}QR`-to$~-L?Y7LDl?');
define('LOGGED_IN_SALT',   'z<)n<x*Y+cZ-MC{[z{n$T5UETN8F|9:MeC[d2Q;1Xb+0IwI_U>5n?*2ZI6:|Y9/u');
define('NONCE_SALT',       'Yg}FK@jbusEKzFUYQR!-/DF@N|-2c.<Xd9SFPY;.pn7FFA(c$(eZiJlxSGeQJZR!');

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
