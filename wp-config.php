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
define('DB_NAME', 'wp_lm');

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
define('AUTH_KEY',         'J{<nT=cXdYJ!)E]S *HP&1dTq4v<}5.>QI/OU~PK,=}00- mj^>D*fuF^Sw9a<k(');
define('SECURE_AUTH_KEY',  'n*PirS/aQqkL$K[@LY;GoEDz<YWNDJZr|{B&um+<{Z+]g#/+4F/#O;M)aT:8M/Z+');
define('LOGGED_IN_KEY',    'd,H~:;3N0tm#>t5Xg)_8d)&C.PeCE<@^lX]!,bxy*j<l9RG8{%EM1l^&QFgnc!A4');
define('NONCE_KEY',        'Es*j$%I7Lz&i~skIy*0AgoUVRSc6Jr^BWv}QuSYB&0q-,9Azo>#w;W`eHhluA3wB');
define('AUTH_SALT',        'Uc,r9C*U]$Ji;z=^CDs~|2U?{v(s16[lup^6gD/:u#ktIl{R8ju)$hn>Z_@fk]M?');
define('SECURE_AUTH_SALT', 'xx] uVX|=*?LyAbX|2ct(_D^jlM)wjJE+wVP+Hc*L[ja j}xIX>Ptg)a)?n-J3j;');
define('LOGGED_IN_SALT',   'J7&nRh?O~+`tZN&mv7N}$pP:e,>ZmsEa$MQ[#>Huy,>jc3d(TY:2/83%W`?^#8Oz');
define('NONCE_SALT',       'ls_o-Y10}(/?~G1Z/#N-r*@fav~MgVN[nAg+!X]MEsiF6|/@B/Dj&(+>P^o-xBiE');

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
