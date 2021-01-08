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
// * The name of the database for WordPress
define('DB_NAME', 'my-db');
// define('DB_NAME', getenv('MYSQL_DATABASE'));

/** MySQL database username */
// define('DB_USER', 'wp-user');
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysecurepass');
// define('DB_PASSWORD', getenv('MYSQL_ROOT_PASSWORD'));

/** MySQL hostname */
// define('DB_HOST', '192.168.88.198:30851');
define('DB_HOST', '192.168.88.200:30259');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}q1D$in1Ump?iP5=3o j7~0uiwyl*~P42WuRZug-SgHK<)MMdNbh#m}SQwMq]Tkj');
define('SECURE_AUTH_KEY',  'u$MA:~-u`i}FV+(uCKz?R;gbHO!:yZ+||zge@3A[[JJ+EggA$z7Rpd(C^5|_&^A+');
define('LOGGED_IN_KEY',    '+U%$53~REY`|%in.NNMrl$/e0hWVxDF#O9R&XABBO2h%A4FQ`s[csV@>0U798<-l');
define('NONCE_KEY',        '&d?DNjA6l[QCw0zO;dl.9.d-+6*$J<0LasA{~.MZ|>MGNK-kH-,:3Q3v=rTQ=LO[');
define('AUTH_SALT',        'AN,]_f}6(d9?/+Xa%%=%#gY-Ok95trh;1-eQOnX+@eru%c`q?+~<JOn1PEZC,89&');
define('SECURE_AUTH_SALT', 'nTL@BQ3w02q.wM|xAq(|9yTnw?!]o!+UAQcf~+Jit`cu(cnN8J.i;lKTb~Di<CZM');
define('LOGGED_IN_SALT',   'R}Vqaz0[>[<Y=pX?^JGo66=a=Q`fG]Mn=DgcR}6c-:j1e-p/>YJ9FDXJc*DH*Ti~');
define('NONCE_SALT',       'ath+>dAe?q^jX_c^kT9|L7E<^[[%<;!xs5&f.$hPRt?[287.KFA*c/d6wqm:h%v-');

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
define('WP_DEBUG', true);
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
