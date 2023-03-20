<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thanhlam' );

/** Database username */
define( 'DB_USER', 'thanhlam' );

/** Database password */
define( 'DB_PASSWORD', 'Lam140920' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N&luJeK:P{T,ba=C;GtF(v/2ER8yKQuH<tR1uN47e?uc[VHk-pDq =DZ<05fcD+ ' );
define( 'SECURE_AUTH_KEY',  '#I6px_xVw;f>)[c-e/%kGCOtr/N^`N5o q~{as}j<g.[882oYo=h$r!naajTpKcU' );
define( 'LOGGED_IN_KEY',    '&uLW_lNXSrr^bEA4^=&aL7DhDQPB6ZGyhX*wcc$I/@qT8%n,|7p/dv?m}>9G=9!F' );
define( 'NONCE_KEY',        'jRzAy<l]ES;z$,F2}{bu[5nM4:f!uM>YdqO(:;fcN3K=}(+^aPJldaD~]suFcV$Q' );
define( 'AUTH_SALT',        '5%UT)xwa/-`p&]=e_BE@5+%ZRxg.%)~J$<RY,JocWL,WbF:Su,3J`n>S[Vx;<8qt' );
define( 'SECURE_AUTH_SALT', '>#C>l:,XI6#pGpb/_.x[V05:He(syR?U;[p]TV:ezoqi=#%hDH1eI+C0z0GRLU`n' );
define( 'LOGGED_IN_SALT',   '*Jmt-Np/5cxj[g6Q EqJBQ]Z3c0#rBa|?TS{8@,iT)yb3SXIbtWcPI/})~ptXN?E' );
define( 'NONCE_SALT',       'V5y!?cAm J-&asy2As-5NZrk};E6*[!L330mnvoY>5rF.o9o`7z{?v(KG0}_}#>Y' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
