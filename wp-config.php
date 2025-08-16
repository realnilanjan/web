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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'htweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Y{Qnz&t_n$6]H;17/a#Mwl>se28?,jtCh#kQ`b,WXjNmI4AZlWy&bcGD1{Y1+O+t' );
define( 'SECURE_AUTH_KEY',   'i2Q7z%1HT-K=bEpL37NA.#W}o_26hg;0e*l8WF5P+sm]5~)$gd6E4U%[*&Y$s#jk' );
define( 'LOGGED_IN_KEY',     'w|bmYbk|wxZGM*|1}){OK&HNjV7uqG&^emx2DdAp{>_o-)jJ)dG/YAd+)tUI |:J' );
define( 'NONCE_KEY',         '8N=Wo)V1 FI{X^yO?F3YXg}khCf92JkC[gEk{N~CEKkZy/VAXJRM_DR)YRbK@/<l' );
define( 'AUTH_SALT',         'kqmp1[3U[LLR=>1,w%=Ux%A)&DPyed{#;F7s]M~2Jk,~hF~v18<!8Wi$~W+2 w1p' );
define( 'SECURE_AUTH_SALT',  'K3zNL]QIqWe`#tI}&54o4KVsW&@Fd8x%.._aDh+f7&>$,43859%]D+cR$vhIo;Zl' );
define( 'LOGGED_IN_SALT',    'zG(S2pwh]?sw^|GQ>p3M]tWKwN`fbU9ogu2FHw}ZlaE8>PY4%pS1QRpq ?s6)=#(' );
define( 'NONCE_SALT',        '3XtkSP_6MRa@zC /`;AO&?8vujx,L$X2PJ]i(a*6qe]NOY/hj#[.ny[NLnrZ:R%>' );
define( 'WP_CACHE_KEY_SALT', 's7D>5{q`3[i?0-e)+R+:Qq_I1;Q1^=gT %k??*1z@rhV1@]b_Pz=fKC^ETE.fMuG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'htweb_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
