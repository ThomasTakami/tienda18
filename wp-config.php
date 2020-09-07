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
define( 'DB_NAME', 'tiendawordpress_db' );

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
define( 'AUTH_KEY',         'HePD1>{*i!oUg1UqlSD(e51w!mZ<+RnSgqlmyr63f,4{xgjnuGI+zyt>$$R;BL 6' );
define( 'SECURE_AUTH_KEY',  'I3@!Snj#TtbO,GB`w]Z43xJ#i,u$fP-5.Sr`+Y9j}LPOi4EA(+%~^rB5PC$;Gy/1' );
define( 'LOGGED_IN_KEY',    '}uZ~f&Cq1LxzdY>]H}KzdyiQ3#vXG<OR>8Fly OIgs^zBnbszWaR@sz_RQ7Tg*=/' );
define( 'NONCE_KEY',        'P(b3I)l#wGft(GOd u-  `y~o}z0q qOToLP:^3u={Jzk?UyE%Qh#A`PZ&z$>I+$' );
define( 'AUTH_SALT',        '7jAy4L#t{]In05e]Zjc!DH5]L,kD9UY]o$H=dGv|Gt!wv>89`|4eIX$ory,FjMpH' );
define( 'SECURE_AUTH_SALT', 'TM3!=K@.rO=^>kr.IGWnVYvj E6e-Sq0}Mh.fh#uU<#t8IaGfxz.tLflpB[OK/!M' );
define( 'LOGGED_IN_SALT',   'pCJNVfFna V1-j3TR+TJ@=gls+g<cc^T>x$%4w|q/MXEnL?=G7+>vQ[z1kUia9o*' );
define( 'NONCE_SALT',       'g9}<<z02S/<CB`Z`X;&hs+(7h.oUQ2MzQQ#?]2=C.?u;SckFBQqCls^Q`FK!=@n(' );

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
