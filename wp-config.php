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
define( 'DB_NAME', 'reto' );

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
define( 'AUTH_KEY',         '|JY ~8Y?;Vq{&Nft^fZ,x[kR<2J8Vjv, g?WQuKXL}dU*%`h?1FoJPvR4~Y{0&Q%' );
define( 'SECURE_AUTH_KEY',  'yui]H(No:e@ 8B!sR<qD>-f$6q(@KX_n!76]?b1S7~8_ZTDQcopMr?T-JEm  k K' );
define( 'LOGGED_IN_KEY',    'U1w&{R6D9xtK<npej)Jj;~#&zMbrO1JUv~8$7_JQF$bhl %Tb$O5Oeo]$2IWSo)R' );
define( 'NONCE_KEY',        'dB,pwG:tx#9VR,@bCZueAR*LsSF^t(ux73#V{*SEeKV5Uo[/|F1?[E^AJ|DVpFf]' );
define( 'AUTH_SALT',        'hy<.A%2b45=6o ?u;r$98x7Z]svyX1* ;zK5Gg]BjrcGm98sod!6(E/L5K3*F=nw' );
define( 'SECURE_AUTH_SALT', '~P}{F<-r8!?rzY(3z)#QJaz[=9iz{2TWhE[8%L2?=|.=E]gkuOWqBuhau=E=Wmyo' );
define( 'LOGGED_IN_SALT',   '65JVbQ/^T}kC +#.7W9:JQW7Vyg~!.#yQNhVXKCl?#%=<.T%8dH;q1yo4KwkAQ.x' );
define( 'NONCE_SALT',       'Yr}wpg6|53RcL_)k4C72Ks~sSfA<]Nj0VI_<zlp76UD*V p`b!2bNsoE`_sGVRbl' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
