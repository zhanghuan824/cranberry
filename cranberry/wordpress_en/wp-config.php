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
define('DB_NAME', 'cranberry_en');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'j)U<Z9T}+4qtKbJ:GmF0 >;e]ipg,>?o:~SN^T?-4(t;$9+t)B8E<1XB2P2*WC7]');
define('SECURE_AUTH_KEY',  '~0DR!!?p=ohnnZaPg-VH, b|w1m&F/SDyxGs];^{ i;zT<jYrzY7QztZ?T|fQQkM');
define('LOGGED_IN_KEY',    '>eM<]MH@M19-mFzqBA<P|,0=;ZR/I@vX`78CXQvWh+s)87VNG(4spP8gr+r0pD%~');
define('NONCE_KEY',        '1O&2w(5xD7!5/gd|=T:=t7zPXCc8{m?[bqZ&<0BZx87is+<(>j0;+gORpH.XF;Sz');
define('AUTH_SALT',        ']r||aM&K0l43:+z40~7&oxI6M+Vl*fiRD]L/Q(% xQcXU~Cxzrkk-gfCRdS=(^,^');
define('SECURE_AUTH_SALT', 'v%@y/F*(CarvHS8k*tT!+@{8C?5&VKlI#O~PdK_qRZBG-k?rcON4}zK2kE%>>.+-');
define('LOGGED_IN_SALT',   '25|@^oA C++uzY&0+^XY)nNn_t|%I*i+@k%2j$F:P5}#,GS m|RK/A-w?G|IV:Wo');
define('NONCE_SALT',       '(-A-NX]MUxt7&Zph c{3keik<tM&XS;RZ>9c;|fIs$Mu(|5`]l&N$]|DR *.Ra9-');

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
