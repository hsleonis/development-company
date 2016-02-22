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
define('DB_NAME', 'doreendev');

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
define('AUTH_KEY',         'RqV 0&C/<qi`*+jyw}j9i `pn3eFafLXOBi|wO~=9g?{r5B:,!I!sE2DFBptw-{8');
define('SECURE_AUTH_KEY',  'XZ4dtS^Ya!{t>$g|_Z.`_Rrwuk#S+&^+zFBOqyZ0Wtb%fb s0l*_d3$,{gu,iFen');
define('LOGGED_IN_KEY',    'Xg`*4X@DsA9:&bHHBVPl31ced8Dg-U[*#]Cp_0..+exr;mrbxYXh]3c)+*b?J25&');
define('NONCE_KEY',        'h+K0rMP.S{Qh_PqFIxt]umK6@}HPe8vx6WINvNr-tSO|v&*]V12n7sWUWN<-# eM');
define('AUTH_SALT',        'x!l(/6t#&7dv8DD@WAlm/- %aU0k_?DPI~u94ads--@U pA5p?-G0|;)?fL`@X0y');
define('SECURE_AUTH_SALT', '4#yHGctE_&9_0QQuC1T!Lu.#|f+ ~zmZ3TF|FrU~-RhrRD3vjtZ0%w>dzCU{T(8$');
define('LOGGED_IN_SALT',   'IgD1R=SfSR:BRZ5DRiF}7X^}n `#M@Zh!|-/wN+0bp-q_Qx2/v&@`;._x}Y<,FkT');
define('NONCE_SALT',       'L)|NR<*{tHrVG{|;n+,DY8a[JfLh8RY&i=m]CzW<TY3e~6u0I]tap-^v~zC|vf^(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dev_';

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
