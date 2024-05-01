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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_ddi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'ddi.local' );

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
define( 'AUTH_KEY',         '{diiDg^I:@Lw^fuF+@}(0(rZHM|fOg(V =Szm>G|f*/E:lRwdcehP;IijgRLf/.*' );
define( 'SECURE_AUTH_KEY',  'Q#Pe;=>Uh+plzQ^vVTu|u}Tc.n?qE925PV.Own,=(jhy@$<2$.}<jGkmW|]A-m``' );
define( 'LOGGED_IN_KEY',    'qunu$c4_&@}_P6%hrx=B7@:Isr#r-5VflmdBgto2`fi-|05$O6``DOa10)gc-VoP' );
define( 'NONCE_KEY',        'S`.EuV[%})$,p1jv=j;4DTrZkUTs1;k{%2kGMYa}e( z@3D0{$v4(zJV{e`Qc[Pi' );
define( 'AUTH_SALT',        'T}#mjiO9Hbv1!(-bo.d-Hv(L%pPQa^5Zksu$>m)[H5vK,:@e6hHt8zQto](6Uawp' );
define( 'SECURE_AUTH_SALT', '4Pma!xf#@Yx6;+k25ZD`X2P3AP;0H.MiZejt;{g&8,(PQ,1.up}19HW&JEC/tBv(' );
define( 'LOGGED_IN_SALT',   'XjIUMEtVGL/!.^#}/Rt{}#}t:S{f3w-q7-9B`~$xu|a;?0ttM(rzRNSo]rqCjF7U' );
define( 'NONCE_SALT',       'D1+`J`)*eYLmFg7$A*+_# ZK{4b p/o1,>bjUl^C| N,Pl1h:_0YKE/Q*h-1<Y/l' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
