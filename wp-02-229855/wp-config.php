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
define( 'DB_NAME', "wp-02-229855" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'D%-B<HPn+0=f]uu>:gV1[4R&#$E]?)UApiB+0F1:&psBJS_9E=KmMd#iyvTZ R`E' );
define( 'SECURE_AUTH_KEY',  ':A,P4c1pIN!;ze~= )(>v:*p=4)R%(`<_p|%cVtSCQjRUtEPlfqa_p]Q={,DAr0~' );
define( 'LOGGED_IN_KEY',    'n@x4aG+bg>)R)K):<.C)`Hc&j9c(*32Hj2sO$|;;LD|$=6H& !lH>.1P9TiY[D/n' );
define( 'NONCE_KEY',        '!R@jTo&zh8r<MyBnKWZ;y(|:8G=dp102_jB$t)jElC)96<b_z]O?O:0eGAIP&9<,' );
define( 'AUTH_SALT',        'N4>i%C_DT!x%4AgC/f0|p )r^Px5HZdrHk#fc9wY1iNRuhM47L(~ {W}n~<:2J?|' );
define( 'SECURE_AUTH_SALT', '>3d<fL~iy|]lm+ytkw3DPKf45ld (c/hYhOSVQgPslVO9|D/a@>:YD{k%3~TRX&w' );
define( 'LOGGED_IN_SALT',   '0sc.%-gp}w,awI=VXa*P>l=!jiVutHYnPkwe~.J3qAA9Y&qS2QKNk7A<`rE#m0%`' );
define( 'NONCE_SALT',       'PTeZrPMW.XO82IrLdfST>*`qW+EF|aOL:c@.N9gXPg*^pH_[m~#7YxCqc)`ofX:i' );

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



define( 'WP_SITEURL', 'http://localhost/wp-02-229855/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
