<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portfolio-Cars' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'om}pKF{Lf7c)QV4,>--FT;X008w)O+^4WP6CE~<vzIT *]?3[8(Q&O4I)dPV#Mm`' );
define( 'SECURE_AUTH_KEY',  'k`7)y?dhfdM4FcBPwQvpX1Xxym(Im#DhS`P]sl*}&}]G6WV]e,z^iX#P/6UbQZ:O' );
define( 'LOGGED_IN_KEY',    '.Q2CU#{&-1Oe6:H{y3;$JW.1j1NnNq`M<VePwx7~avp!6]]y%o/k>?kTguJq]F(e' );
define( 'NONCE_KEY',        'tl{4tle8DS!9un MEE%]WVD|s*/e?t@jpSfLi=*_%>VG,S=G]X~%J`-!7.b#W-/O' );
define( 'AUTH_SALT',        'vQ|s1Zt{{o`BU4H@(g)M}v@68o@wxy[^Ld%;.$a.yik5vWz2I!;uB=,fV}$uo-2(' );
define( 'SECURE_AUTH_SALT', 'BPqKd$~ADm!yp.!8a9ib-.XuIiAk[@(y`q6NpPYgT*V/aRo1ILIjmfPuG_KkEpq2' );
define( 'LOGGED_IN_SALT',   'e(5n*I0I&:v!<eU{U,qqt[Rrhn(8m:zf?DF3|Jz*n/* -BMuk`F=A2i5Mj-1GwUd' );
define( 'NONCE_SALT',       'S9%72ul>Ns:aa(mEDCyr+X4*La[[d,>H<t(}SZ$Q8bY([s&,$Z&jVngg-84t5f&@' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
