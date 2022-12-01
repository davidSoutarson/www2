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
define( 'DB_NAME', 'eloi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'inrghD=A,GE?A]X%*d{s]dc-M46(f+nk}$2 J *1goH.a7Ni0.V}WH2A}mki!oiX' );
define( 'SECURE_AUTH_KEY',  'XR_se]LX~PgR+@lT:#r,4N95dQ`k`w.HV!N2SvVefd;+,XB`M_mj#gR$ ;Jge$Yu' );
define( 'LOGGED_IN_KEY',    '%Trzked5U3k,`dJ0cf!OtZ@uz%mD`+^=Zo?*1XZwsLYY%0My!T~dm{4N?.yy!O_l' );
define( 'NONCE_KEY',        '&+mt..mm&-PQSl&{{TD+X#]bt69;RK.=5bc|L:pCT~UL>5IiQ<a $g!v5)XCNw(Z' );
define( 'AUTH_SALT',        'D%Lwu+%O+}wDRN_(Slvg(8GNlpn8|.o?[!!#(-x@2)_$zvV_:zp&67(b ;VR%kl{' );
define( 'SECURE_AUTH_SALT', 'g#guvKj[V}h6e v,3v]mfX|BJ}Yx;3n2o!lk^L5zs8E3[5$>S./Q9OH]0K>4nW7f' );
define( 'LOGGED_IN_SALT',   '$~G[u#XD<-E#Wr/hY=jt>LeG;4%|V-PLKX:{Iq?<x7Y$q1Op ?uj--jC#kX0PtQ1' );
define( 'NONCE_SALT',       '3!W1T$zH?wzp`T1Raq*96L]U5<4,Fmo|<~d5j6CitfsO@IPwg![XoP.%b*c]]i[@' );

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
