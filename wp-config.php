<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'shophouse' );

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
define( 'AUTH_KEY',         'eW!/)sEjiRZ5=-6sd,{gJSSB7Yh`1#Ea99714Ji,8w2*j:=5>IvV,?{@cO^(n~;7' );
define( 'SECURE_AUTH_KEY',  'xP)G]>+~v_jiHScY7Njc:E1_=~?+=4*:N%DdD=|u#=j+d/Ue(I=}|L<^3_Lt4 3P' );
define( 'LOGGED_IN_KEY',    '87t5^k8*Y,Yl}OPe%Kgpk5srPO&_sn7_v53lXB`4a{Tc5FBo9,+~DEtiPKHbXXe~' );
define( 'NONCE_KEY',        '_t>S/)WY%2WXE1a,XdvLq*<jg,#g@jguok$cJY,yw*vU_L|UG$T%RoVCE[yPr0!E' );
define( 'AUTH_SALT',        'izd-V6YE>5];s9<uPP1.Mh=Brt(KRrRFG1=xqF:$hjLsWBVn4f~mcJ0;i#pgCT/-' );
define( 'SECURE_AUTH_SALT', 'a(zt4>nu+`, .H29^5%|RoASp;=D1P:?Y&3AcW+sdqW1y=,gGMO#^P^H37Qb=t,H' );
define( 'LOGGED_IN_SALT',   'ak.tj%HuXJ#+YR78,TQa064&k4d9aGJ7E7okl`f|e<O7y.&T/n*/ypm?i.E +0BI' );
define( 'NONCE_SALT',       'CA,4/bl^-p>tpUbE,;:v}()MC(!VR g[8UEz0u(!Z)Q{Sqwvwf*c.=4dMmq|i]H-' );

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
