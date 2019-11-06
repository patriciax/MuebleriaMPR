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
define('FS_METHOD', 'direct');
define( 'DB_NAME', 'patagonia' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Itw1Y!DaY&89q]|ml|`&]ImI7Aycp=lPIHI-R!Kf3>qMrD{gv,7^,j<1;8-vKb;t' );
define( 'SECURE_AUTH_KEY',  'Rbs9Yu?Js14}<&eO3!s/]LY}N=P&=uA2Ni#J{d}85?_v{#%l0w>}BMrn-99glk c' );
define( 'LOGGED_IN_KEY',    '5,>&gd11vQd^QUD[B,[BeT2 !Rg%-v3.jVj=NSM7J$R/7DTJf=o0jCZ7W`>2`lVL' );
define( 'NONCE_KEY',        ' QS{ :.H./X ZkMABq%OlMi>|%HNYyO]I+iC/;[v;FP1>ko1sqXp|E3*$p$rP:*a' );
define( 'AUTH_SALT',        'H*Kge;0;<gU$-|p$1jmMeB-`J#e/ewK1gCX7y/;u1mUKyMY&*!<yq_EJyG1@5@ M' );
define( 'SECURE_AUTH_SALT', 'rE#.bkJ7(l,PiFbxni#@ogB=E19*}%5Qs#%GAF&o&}%NqC#8rSX|I0aMG+X$,Uxm' );
define( 'LOGGED_IN_SALT',   'L5TGMzSXOX,k]`8W]0Vz*!!vFa{8VOk^mpYOW}nN!{%N,ffZ},upCR3K;1HmF1uZ' );
define( 'NONCE_SALT',       '^)~pHx,b6t9lE`KI8N.^@1Ub=-{12p%%_q/]>~Q<wK`&M:$fyM&E-4i8|s/=TOv`' );

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

