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
define( 'DB_NAME', 'bdmonsitewordpress' );

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
define( 'AUTH_KEY',         'q{)Zw{09w*T?ZTcp9Q%xIo)AgcBabrg}Kk0[?/}uwPb]%kvd1w<$w R~BG,?L_gj' );
define( 'SECURE_AUTH_KEY',  'SEv.cnAtPOEh|MK!1`];YV(Tv`.^lD{/,l^b^mUX4*/1Z)pa*w[*<Adwa!AJe&,!' );
define( 'LOGGED_IN_KEY',    '{Hg?Uka|fSr-?r(sq:IREhhwi xFaVVu G80y)^LEj?rO?/e|T5@jU<+@viZwd8?' );
define( 'NONCE_KEY',        ':&myv>_N5sB}*pb:B+$,wc(=G3_9@|`1gH<mi3YGLcLiAJmafoDt%Nf9={LqeoPx' );
define( 'AUTH_SALT',        '#u>f&,j/ips(,u>B}w8_w]W*$N#7YzJ1WTk+1 FAou`#lN.[kP<rFCc;I?hywEs,' );
define( 'SECURE_AUTH_SALT', 'l _oSi89S(7ED;s~AhOuTb]VwH8EhZWyPWd;0PJ9gVD!WQ[]P3Z;ByWZ#@v5vx _' );
define( 'LOGGED_IN_SALT',   '/$7`eaE(>uO|x=M?l!C.V9A)Q;Eo]/?CKJS5Mwb6B(Z:sTH_s-:P2Ro(/LP;vwGV' );
define( 'NONCE_SALT',       '{ ptvyyOs_A_[8%FHFg9`m_iq0n}0^J[A`,sukNIfpBC1|=IT8BJuC[00j^La)e;' );

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
