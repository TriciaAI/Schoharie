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
define('DB_NAME', 'Schoharie');

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
define('AUTH_KEY',         'UdaC^ktbYPhcm>D^ac2t%!K)!Fv2m2HwdK5?%OD#va^&o04}v!p7 qmhvPOw1S$*');
define('SECURE_AUTH_KEY',  '6TjT7v3m>@kkDU*nGk&#=4%TVahXG*4&Z}=?HQv<GsnI`)G8E{w[i,%NTTvc6Rrj');
define('LOGGED_IN_KEY',    '*I1u{fBROZWCn)lY44`ywfl?/RqR/,*prh!f#JK z[y-0UG**u^b:-G`?-#cc5X|');
define('NONCE_KEY',        '^2^YvA}N>yBEI [O]^zYccLI[vWyrwY*t^*]*X|rMqNMV-z/;DpcNp?1Bgmkwjb|');
define('AUTH_SALT',        'pHNCOgi-7X}8mlk*b!MgDcCwKyA=_js2;njLL.Eh/H|)x-/wtgkv0?;7y6S10pyf');
define('SECURE_AUTH_SALT', '4L1mjj3c5KC1J~W0>oSl12[*VZ/==Hv3g0|lvQD?Yep!BAO$/6{O+2Njrp-T*L5`');
define('LOGGED_IN_SALT',   '4B-J4Nz!2)^Ce&)(nJE9S QtF~Q7,SZ*GM8TY_2!E wf8)v&j~]=@][QTU]8n0 <');
define('NONCE_SALT',       'H{Huq`<?nh@p(Y4GCevKHJVuk{}8,&*^%7ECPY.i5YHRnR|x,<Vp@v4~`4{N;&/#');

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
