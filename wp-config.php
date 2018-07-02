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
define('DB_NAME', 'wp_wordpress');


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
define('AUTH_KEY',         '&xSxx3 {`{k5-v.tYAY,A87)GU`z9pm#9~oI;b+16#1aXy13-j:t$zYv?WG[n9a[');

define('SECURE_AUTH_KEY',  '9[z<Yk!nS9_`xn@Td N+%NS=~:.YQ [gs~gq+L|WpQ0<x/VxehkfM4r}x/F51Q[]');

define('LOGGED_IN_KEY',    '~|sF}<VEsTc9_0ZL8hd0VGD/~~s)SvF<0Iez,B44*ey$<7,z,Ujz]R1` q]%i<$t');

define('NONCE_KEY',        '.BBrBW[RHv9gUinW&]V>}$bq 9)Vl#?i1pZ/CGXzjKFK?nhz_nNcpl>`_XNK0P)2');

define('AUTH_SALT',        '2054T8GZwr0xW <!,AD[j+fOeT#8k#KCljk.W4kV=-jljFCzY/gB{RDGN8g^YLkF');

define('SECURE_AUTH_SALT', '`},ws?xY/,cp!xP:T`+&s$I+;Pn_()Ugm$i7uRq`vY!4(5:bMl4.Z%N$gEC=GX?}');

define('LOGGED_IN_SALT',   'lz$^.mBO{IyVuLl]u<JqXe/RCH2.?t!J!S}`Q[2D`^LqD![0zcO`>Xu;`uT52,i#');

define('NONCE_SALT',       'bt=tt9KD#`o(a`H+_8,AO6Omc=(aL>Zlb?*Wma^@yC+I*DQo~=@,%JeB:X$~lKE3');


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

define('WP_HOME', 'http://localhost/wordpress');
define('WP_SITEURL', 'http://localhost/wordpress');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
