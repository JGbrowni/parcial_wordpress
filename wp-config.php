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
define( 'DB_NAME', 'datasvbase' );

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
define( 'AUTH_KEY',         ' lIO-9&D&8VTf:_dS75H+1MXlSgk>AkhNgUJJOEVFiz1e[ SBm|N8#{:$kQr(Oa!' );
define( 'SECURE_AUTH_KEY',  'L15!Q^dTIk{4;{jyE&n)9~fmva=>1J%He`@_$M~Z{UOrJvsdi4u;cCs9<2)*x@!?' );
define( 'LOGGED_IN_KEY',    'P-=SP;A~KQj5D-+R[6*We2K9/M#o@#1P?ONFhpq~2vC6}l>/%qm`*yrhg&Q(~);R' );
define( 'NONCE_KEY',        '[-O.Dc>CfO tWxDt_dka{<xP~!xEE=er9=4Mh57J|dSfwna&s/hb6H^]^5iU$NT7' );
define( 'AUTH_SALT',        ' &L.Cf8u3u3O]jdyl25W5w2vw! oeLPD[v7$OH8`^r.Nk,ib$>lp~w.~eiI_mS R' );
define( 'SECURE_AUTH_SALT', 'Q4}>KOpD0/j8PHN.h0~+b_C,*:sOmRxG7wNE&UnR^Cj6|%uPqrD~s}^qfu-|D68$' );
define( 'LOGGED_IN_SALT',   '%F<#U$`ovgL.}8#Z/?nRJDDd|Pf)w%9.$hSlVABe+sxa{ns:$T3n*/Q2M=srh!*>' );
define( 'NONCE_SALT',       'Al^L*&SZE&FA7d{oP0Vt)^v_5WMEE+J3Jy!RqoQ4DHB*~lo_`9eDa6:z={MS=$wF' );

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
