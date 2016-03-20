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
define('DB_NAME', 'francysanchez');

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
define('AUTH_KEY',         'WUTKOJ8J8V]j<9|mA{orZZ|.7*[~v$}^Tla:>V{m4L7DU$[!.1Ui>,*8|5S~NuYy');
define('SECURE_AUTH_KEY',  'u75/@S+N_[%-B>pLyc:9D@m_*30}%X+Fdc1A^9Kn8USV9Le_ygRikvzK] XC!Odn');
define('LOGGED_IN_KEY',    'jtbm=5Nck{[~[SuO-v/,KF[3{t!Hojohu0D1+2N:@|PVNI(|`bXgr_>mg1Bm5<hb');
define('NONCE_KEY',        'yv|%-wY~}QR$8,[^!cA^ P>`E2FN94C<<bm(|ktCYNo8aH,N;JtZkA:m<jRH%V#N');
define('AUTH_SALT',        'wapr%-C09n~33HE1T2f&|i`t.o6da0E-W2QJE:jGG}O0P:HuXn]w~WLE8CGa+N(c');
define('SECURE_AUTH_SALT', 'FJo@D6>i]+tvSV ]!Z1,=/^Z9`3gWqf>c$|HxC-qB({N7,-(Am))Co[v<wMC!|ZO');
define('LOGGED_IN_SALT',   's}D;|k$|^BzK@tLQ5W|jif?%:6i:gZE<;y?;>n[0Ku5QRe|aA|pWM&_LX7;#^V46');
define('NONCE_SALT',       '[*v p+%l_je^239FoblLod57,8YD^`a=IVaXf=oFZMM}#ug|*k>jcW6l<+N~eaYi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fs_';

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
define('WP_ENV', development);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
