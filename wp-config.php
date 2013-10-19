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
define('DB_NAME', 'wp_db_2');

/** MySQL database username */
define('DB_USER', 'wp_user_2');

/** MySQL database password */
define('DB_PASSWORD', 'pR3aK9yRFyzmJnNC');

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
define('AUTH_KEY',         ']Zi!&o&IZE 6SUQ-o$]]?{G.c.|4~-!xUoGYg$DRwL{&l(w3FAj/c;d>aMapBf=r');
define('SECURE_AUTH_KEY',  'z.9~|-Zu5]?-w-`GDTC/>g1Rc+Ug~+=+Gy!ex?VzHB>moiwrPJi,~y-b;-0ni4O2');
define('LOGGED_IN_KEY',    '4j:$N_A:[P(~DP)dQ;<Xc$Zq>h1)^]OX$?%lfW5~Qg]C+?p&1/8oe+|)=` %h@?&');
define('NONCE_KEY',        '33[}0EbE|k.fM`|$%A_%I}3XRmUR4F{s}tc02`TTp+[S!bNf@LIa{QCq0UZx/zCf');
define('AUTH_SALT',        '>|#D;]Z$Q/@K+8ySAL|e|go5tpPtWD)#T9{d)L:|^u*)eHkL8v[7:G4m|,GL(-Px');
define('SECURE_AUTH_SALT', '7&-d$a33dgJfrI2|_wCiqW@Nv+-UoO%ojE3;fGye9p1z!oL-*Kiv/2A.7i`!cWA9');
define('LOGGED_IN_SALT',   'NvhO2TJ=c&]*~W=W<|*x&x_(@#iA]-:bl~HBuq!N-o5a5SiXay}Vr9Bx)8HX-wn*');
define('NONCE_SALT',       'Wh[:|5+965d,Hx{yNYtr~<9J|N/ &k/ABkJ~P|[3F.{_MeMS,b=.5<k(M2Qo*RYS');

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
