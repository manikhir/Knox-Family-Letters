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

/** MySQL database username */

/** MySQL database password */

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
define('FS_METHOD', 'direct');
define('AUTH_KEY',         ']1`ejhvYv7oRDTU6+Kg3 C!0&auX@VihgM)82]WOp-1k[C2L$x1`>-w.|FYZ8@FM');
define('SECURE_AUTH_KEY',  'r|c`SW{J.C?(;W8a|IfHT<i-hKOb,(J:D@,Y}(WJ5+uNbV1-+sFwmQJbVny+y|I.');
define('LOGGED_IN_KEY',    '  L,Wpw<f$#_yv5#0/-L8*wjuP$M}>_KvX16RvF+Nh{w!`6HdCOPt;l!kCR<0jSE');
define('NONCE_KEY',        'Z-DZ~0ex5KxI/-]{qxgQ` <X#i #j)wp<[c]})Vig081uwBlB~g/p~B2VM}3Ii3x');
define('AUTH_SALT',        'A#/&G;;q~~jpuZMcK_`D(8R73^H%Ce6ZZ*|IpL_@SD1%J|JB/Jsea;QP_~KDgjMB');
define('SECURE_AUTH_SALT', 'B!$+H716MY%<E}&qH%`>kqJ[@l@LFwRyO*(!A*:!@%[ou-00ehD=K`sPL{{#5*7J');
define('LOGGED_IN_SALT',   'HT[%bx(8_S+P:+o:ii5W,&)D(R.gr,Y4bSFD^@V|GL|*rug[eD0}BILG.h9vzlE(');
define('NONCE_SALT',       '>+n2#ezF!>-*G|fUX05qd|nEZZ!UejdF|z`|z1^hW3{27<A2U]-g8{u9SJv:R=Ys');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'RsrGoRUrkv');
require_once(ABSPATH . 'wp-settings.php');
