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
define('DB_NAME', 'university');

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
define('AUTH_KEY',         'N2y91sxWe:5~BN`5n`R (Zq;]x%4Yr90=f,MU0ZjHt34,>RB&mNmo(Df7DFiOb38');
define('SECURE_AUTH_KEY',  'm@m?K)/?+-4Y<d7z?mX%o>mt$.Q8G~WbpN$k<~=h/XIVhyEK<`nL3|-6#QC=5Oq2');
define('LOGGED_IN_KEY',    '}t*mopzzsqjD9TQ*T:vUvwEThT<.^O>G|%?-F_P<gadLNvEqeXI[K+eM>V7;+ZxA');
define('NONCE_KEY',        'p_*$Ni6&l}m)+FM[Zvl}OqnZZ_{t>T8}K3D3W;8kdk7X$NEvjF:z5DrG#9?;TxH%');
define('AUTH_SALT',        'V+&JC`Zbbe[3}^@a`buGvq:nb9)}uan:Sq,Z@DeO<e-5wq%(FPyV9.:]kY@~7W.A');
define('SECURE_AUTH_SALT', '4PdkgPHB!]5K:=vY~k&;I^Vl{NJ:Ega>*1ueG/>1E(-* E@$zv=0od|N(gQ.e(Cv');
define('LOGGED_IN_SALT',   'dF_w#e>nC.e-/cV;R-{tU=!PEkuOunP#yIgl{x6Hq~vE44U|nCY:IXN$S<GA.<Hl');
define('NONCE_SALT',       'v/wdLko<wk !uDTQKd? ZYSIV(-ak=(?aMw{9fcor ?MQL18ah,LlW:aT_o]#;^r');

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
