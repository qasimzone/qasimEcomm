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
define( 'DB_NAME', 'qasimEcomdb' );

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
define( 'AUTH_KEY',         '&]x,|RBE)zST**ZB+6OktnC(p8^F4?s@W..&B]c.J9iF&KS`oboteT.!`:=Zjf06' );
define( 'SECURE_AUTH_KEY',  ':UAh<..aXj(TI[UJ8p;:3@La:QQ#uLP1#MC(McGSP^#b^:`H65i]PhT4}uLba {a' );
define( 'LOGGED_IN_KEY',    ',wc^g,IpQ=KFD*P8&PDwQ6#1H<N$Q`|9)y><?3ETZ52.O.q.Q>kVclR~rGoO>g6g' );
define( 'NONCE_KEY',        '-CM8[+PQ]y$Ow~emJdY> xK?YXVQbmES?-UIv:rlSpM$d,xTk*-$Rpu-E}yv@k0-' );
define( 'AUTH_SALT',        'KqxprP669ZtCt#(=A1@3?k>B!:&CUOGm6o6cW@2^D/[I$lP:3sbw.,wv^<vPLFy[' );
define( 'SECURE_AUTH_SALT', '^c][`=?M-v+LU%[E{ee0xg7l&8lg`gf}.2:*)mS3_Mbh?|? IW=ENaotAZrR[L+ ' );
define( 'LOGGED_IN_SALT',   '-d;fD er:L9qI]_}ee&I3A$z|8j7%[z8PVW:2DxVz[_rWc%|p8GFon]}17}+[9>k' );
define( 'NONCE_SALT',       't5A22w[_=;7zXY%$/Ox:uPb%pCJMSW0$UEo;c?<P{$ )iv_M>{CacOO3&i$4F0A#' );

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
