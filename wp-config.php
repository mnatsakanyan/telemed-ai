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
define('DB_NAME', 'first_fm_doc');

/** MySQL database username */
define('DB_USER', 'first_fmdoc');

/** MySQL database password */
define('DB_PASSWORD', 't5nynO)[A7io');
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
define('AUTH_KEY',         '<PH{<ppl_K>EY4J-ggS@}Yw?eu4YyX :]:mx<f.)mjbRYjrV_qgR|-4w`+?LqY+g');
define('SECURE_AUTH_KEY',  'goy}u$Z?8eCE-B3W$N(FsjO17,G0L_s>2H$:.V,rpH36~-WG;?7ED1^QtAd0uqk*');
define('LOGGED_IN_KEY',    'j{2n`Zvy!Gf+dcSQ:W|i?_[Wqp=_MPD9S,IWsx8ZDsP>Mw)K~VD;x74{q+0Cw~|e');
define('NONCE_KEY',        '=ri2j5*-OR8FVeDnGkZz+VL<s2L.2^b}(e&+pR{d=`*njJ/N%sKrD5@(1H {Cl7#');
define('AUTH_SALT',        'QpuD/N!=K=(,2kN*3_<8wpfF#}xj]]NYRc?.yD81HqLaVH&j?(.U2D::N5B!DJue');
define('SECURE_AUTH_SALT', '[iix4)^LO2sFH#9=k+[*Dq5Ou*MU0(e#$#(@GBweIR<]4N^YD}GcFG-C)x]=E$]W');
define('LOGGED_IN_SALT',   '4Qgs%#wZ]*r`nB 4aZA?u/?LY;<6E8|*,a*){r2Y}nHDcOXP{O^ZrBGF3pZh(i.Z');
define('NONCE_SALT',       '@mDdPD)$v(]/(zel)0[Z;znO&#]vvl4 O6B5B%LpEy[r%tfH(90b,LQo0<0xE4&n');

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
