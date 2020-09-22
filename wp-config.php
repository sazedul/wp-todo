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
define( 'DB_NAME', '2020_wp_to_do' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'L{{3KDzhb^-em6AlUuCup,|aznPnGZc)LrC*kd=.WE_e{^Q(RC},HA,ATu.HXM=X' );
define( 'SECURE_AUTH_KEY',  '+D.:Cv*1JU>BM6SoR7I!-^bI=!z*:VR*jb+`ul,-d6BrJQPVFnTabse5vb0l{Ir`' );
define( 'LOGGED_IN_KEY',    ';1mUYRZ`C@3]]+mLeDGsV9S,5<S)P?C=N%%KGm#&GEnG >vvxK!j2%D(&9](*82;' );
define( 'NONCE_KEY',        '2A%{+nC6)yv[t4aQ{3vzc(5IeMk]Xj*>,3}gfGE$q]7<@8>ae_eKX;o{[(w8.;$M' );
define( 'AUTH_SALT',        '&ijkV|&;|Kc#zc7.aK03$&7+X!_];%&Y`l8~}M<|W7mGuG)AFcwyE|GaWMN0,aix' );
define( 'SECURE_AUTH_SALT', 'aYP&wlYB3~b!E;p(e^jk&QU51-?gy`>[B>DZ|R35Y+0C(0`w,Bu,9z(Z_=KDGr W' );
define( 'LOGGED_IN_SALT',   'a|*b/Gn8fPy<1&&B!In95+N:=NfLIg7;jVCDIB{P`si){noUEJp1@g35X@!#]L]G' );
define( 'NONCE_SALT',       '@Ic:zO@~KeJcqRg%wvxf,sR)Ug`X4&qkA0TE@MC>ts}10@!cmRf6]yNDPTXtq_Wv' );

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
