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
define('DB_NAME', 'id2346082_wordpress');

/** MySQL database username */
define('DB_USER', 'id2346082_root');

/** MySQL database password */
define('DB_PASSWORD', 'grabdemo');

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
define('AUTH_KEY',         'R>kgVX5P`?1myv]^^/hk~Y3683dqT!fgTpD@C_Ll@mUpr+W0xUGx[bbQs{x2s;[e');
define('SECURE_AUTH_KEY',  'MMpaz?z+nSAT#wHmF{swm(I>`O`0CMYTA%L##m-Z{F>&?*HDsP5BU`C,KNV<6s@(');
define('LOGGED_IN_KEY',    'O,y{%NUQVUeo8 ;Uq~qRj491xGLlp#`y-w/}JkltP;zB9Di!U&06rn`QXm>J2h=k');
define('NONCE_KEY',        '3E(1?}6J@>^2.kU0PEl:R.Pu-a?MhA cBJPxI.Id6mJ&mrtv~Q/v4x%I].&3wqAD');
define('AUTH_SALT',        'LN]CUCoGhtz#|[(yTJ.m!LR.f2n*qz_ZGn?sC!qHMN]j{I7Jx1B8Fy[#>aO+d`-/');
define('SECURE_AUTH_SALT', 'RPe1x*uXQsxYS :|C]|r[Um?9VJoI4&$`AOi;-;VC?qi7M4rSAg$0tqCv9nQ.I43');
define('LOGGED_IN_SALT',   'ecw--Lr[_~7$olMGdG1`-HqZA@;syc$y-F8/-Ln%2clm$N<m`_tFH~p )a,V6f{#');
define('NONCE_SALT',       'ObPo-*b_s{h 48ydZ,.)B(N?0&?8)I{8M=0)oX%S?d1_=RefvC.q@j<}_-^<k?rw');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
