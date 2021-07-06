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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'V?U%-^fh8obtr;_*,(ZPuGYXQ*Nhy KuhPMEE,RJ}6S|=!+nJ_ZaYUQks{#$@T[{' );
define( 'SECURE_AUTH_KEY',  'G=~P)9Sl_~wgO7({6iGxFFFV.*#!P4lr[{z}^[I{o5N+{1h[@OYRnu_SSI/#uO>]' );
define( 'LOGGED_IN_KEY',    '75gb)|=5C!OU}:}i,XFaXSYuwY%T6<ap(sl?i*E#q)sKM(huCrlvqt5bvpx2[MR#' );
define( 'NONCE_KEY',        'x_&Vp!ui?Z![(gKcdLrR&?;Ea8z ~)|%oG#$}WOcBYA:Fjk-)Saj.>s!3~]DE!i*' );
define( 'AUTH_SALT',        '!;%xnRUvy0FlO3V#JeiYvq*; >Vt4^qD-57*;u~fOG8n2`[^8<f.:+]v-SY ?<Y-' );
define( 'SECURE_AUTH_SALT', '2^8/E*V8 WDi[p]/b+d~q^3{G7QfzXN{+)ny}HNO?}`E?/bkY/>Cl$api*hf3.=e' );
define( 'LOGGED_IN_SALT',   'M2L(2_>VRmx$:OH!Cjf;(^j.?#6`QS9J4aAud1:}%VPv9/vwS(K.,=PJ>}&3{EMH' );
define( 'NONCE_SALT',       'R]Q*j40xyJB-O$a>+%NF?uU3eo!0sipS.e5+F[B_T0V5=$VXuGGU&,H&q`O|@:Jl' );

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
