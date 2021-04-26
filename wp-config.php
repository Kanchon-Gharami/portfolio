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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kanchon_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kyPw1qK0=`4%N9ZXP-l*]+u3+oe+--3JoE2Dk]Yi=~$SCGgyFx13qh37Q-5U&_{e');
define('SECURE_AUTH_KEY',  'mw{/1(@mzM,6gN=<Sz)3zgsvcm|>s-.22<j!Uy2If`5{en3PkY%k|uOWJSX*mCLk');
define('LOGGED_IN_KEY',    'w}/=C[jf_e|La Q4is9)}WPb)aG.2-L7AoaF_M9`/6`>uvy!@2j_*mR^2]-vp/@e');
define('NONCE_KEY',        'BL;Y*_]hS$w(EP`k8^YjK+%O!5U=X/IJ09`}D->v:2#=Q).~JCH`$:9sY>0l.i{x');
define('AUTH_SALT',        'G=IWNpLlFMD@+0>]@Mu$hg2IEOy5?e[#T(s&FH?`x@xYyYlT-p8_|Nq&D++d;Wj6');
define('SECURE_AUTH_SALT', '!w^@0a-gV3^M&o<eW(_c:-tEH@./+dFy8PREk]{;]?f+s)Q!^nCpW|/!uUu{8~>n');
define('LOGGED_IN_SALT',   '-&g!lcMQqI,uX/iN*+qMP1O#ruO[Xl4Ea&Paf&c;ytC/eY?Dn|(+kIx]e|Z<JI?B');
define('NONCE_SALT',       '$q--HKNwQaK5PDy)dP=rcf~PsLDF[r`7<8i%r)df<5ep|QxA[~ C|BG-Mz[o;Hex');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
