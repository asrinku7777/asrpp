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
define( 'DB_NAME', 'aabbcc' );

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
define( 'AUTH_KEY',         'HcHtf/Ju*?bsgMd9$2hDmtxA*dba_z0R0BUS~Z4CD)eOAp<sBr}Ek5ci6?#w=&am' );
define( 'SECURE_AUTH_KEY',  '/GO@f<#%xstiPR@1_U/Fu<.&y}Ix!f~5I]u&fz1(wi_*K)YPPBys@3]rYuhG|Ion' );
define( 'LOGGED_IN_KEY',    'MEpW0Ol}eESVp6#y!Xtfb+ h6[[zZit>d#0_cH/Wbj3uu(][fF{M1IDLBE`;.s,y' );
define( 'NONCE_KEY',        'IrqMgNm)4C3&}h~t#e)HH b1_&Ycd8^}qpLjo_TK=U.98%:M@B}r{*OvblR-anTr' );
define( 'AUTH_SALT',        '~#z=U6U{GON3T:twC&>RIx:O%ChTx_ :7`TWgejM|b=5sUkKxP45tBfxGA7WnL6l' );
define( 'SECURE_AUTH_SALT', 'bbbY7z,~dDTT4K)k$Ne61jfh;C:BTWqzzfawd@uI99?OC9${6UjF%^X2%>qy5{#G' );
define( 'LOGGED_IN_SALT',   'bQh-v`PNFraGiGmtLQ!XDMwQn0dM<;T}5!:$oR.y|85aoY8+]X($?I.A21]3m(/l' );
define( 'NONCE_SALT',       'L$n4ws=>2<}Lf(!}iU6w-gbjA}`X+zgO!bR*>&jOT&wk|]UV97f;5EsG,#b<kX%W' );

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
