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
define( 'DB_NAME', 'nouvelle-base' );

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
define( 'AUTH_KEY',         'yVYij,#LL0]lT:5ixHl0Z[3Rzls;G`Kj<]cedTn[@5QD!^,1;Q9cGZb&=?G2Q%gs' );
define( 'SECURE_AUTH_KEY',  '>-~<m&(5[JC~Fo!f#IW4|/u4hz7M|CEaT8u+gXt.CcExJn4Oy~)>WXNV5<Ru)^2r' );
define( 'LOGGED_IN_KEY',    'F<b!|DO|1Cx&]^<Skt;4Op@&US=T1po`pji.K`[(f4muC~m3v-+$FgG@=e[I7u3?' );
define( 'NONCE_KEY',        'YYFYiQk0S( G<DiKYBC0%M|OB2=WYr11CN@nSH? Bhs1t9]YKIr2u}zOyXc;Dh8=' );
define( 'AUTH_SALT',        'FV8%X:`;P7mv!mY*!f5H*,$ HA?KFR9_/Vxl<O[m[CA64IC$m<-EyTI%I-N<LyT@' );
define( 'SECURE_AUTH_SALT', 'r:C>TbZ&?&WB,`}|-;EX{Mff,Cjs39H4/,GuIO].%dUH~:I)0}mHL%PIyI_~HNk(' );
define( 'LOGGED_IN_SALT',   'YDNM&EDmvm->$h9`(yiHV$<t?Ao$0<<>W?7_Qike%/&?]*!CkaRaE6[9+hS1o|o<' );
define( 'NONCE_SALT',       'rc0U)e&/?[C0Y )s*hU]>KsbL4hOB</_RMl9QDmt%$WXa1<N-:3-x,I)ISU$F?KI' );

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
