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
define( 'DB_NAME', 'baza_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'Stefan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'triClana' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'o{Kx%zSqu?@=q{ <OyHH,G[R0$?4RA97gSkzc3m~}]I4)# eF+~eSvu|[8 lN9#3' );
define( 'SECURE_AUTH_KEY',  'q^$BU=WvB5ig&uk}h_:hMv^R>y/M-A/t/ShRCFJw/!{S`0#^k_z) ;yh3W?_U}J|' );
define( 'LOGGED_IN_KEY',    'w%a|Q,DQn#/7HL6w4c!8+Xa9LxOzMX5NsrV G9:CXGO%zVy[7/!,i7rEKOM}3|%a' );
define( 'NONCE_KEY',        'PydLIfD%oS;>OBZLlT}r[y<h+V@B-{Ji*5Rz*`Ud`mfO(f~*D<E+6C{uHoL]SI|f' );
define( 'AUTH_SALT',        '~QTEE^ed76pI^I2nte?i5z!Y1*io|-iO$<nre<n=!_K I5PH} aMsMw%m5/.8>b_' );
define( 'SECURE_AUTH_SALT', 'dPh63]Lr.;Tq,RMrq6Hq$BzGDV(qNL/cgQMwrB-Lw|-s%1]mcZ4/DRB!Bm&Y26r)' );
define( 'LOGGED_IN_SALT',   'V`+)MO%lrvwbl+D1Zxwa*Dlv]_BB4rR+aDN:PJ_3ZLk?Y7u3G]Lu/+h,g17|I!+*' );
define( 'NONCE_SALT',       '#%tCgTJYd.zb,gZ2`V-_uTeZQuJW1%O|.hStG*Om.ZL3$e<]g@T?U3Md^}Hsz6)4' );

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
