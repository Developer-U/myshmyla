<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', "u1641176_rest" );

/** Database username */
define( 'DB_USER', "u1641_rest" );

/** Database password */
define( 'DB_PASSWORD', "hhYyh528#34tbgt^852" );

/** Database hostname */
define( 'DB_HOST', "localhost:3306" );

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
define( 'AUTH_KEY',         'wdW$Q0;4@k5`oTX?YBqpZ~q#23;Um1#:|t*Y?/urY2rK(Wb5=R>v7G!Bo-24 P^c' );
define( 'SECURE_AUTH_KEY',  'O,D)d?Op2Wp+|oSfr@ woOy~}kDG()wz+CND1COz)dm,A(?<a30c_*NFuv.X+xoN' );
define( 'LOGGED_IN_KEY',    'IqOUDs`jBn%^iK7z#O=jAtl[A5:v3m2Ytw-h[p?<t`UG2YEzV;`8A8R 9z=ZcbzK' );
define( 'NONCE_KEY',        'AT{wyzt$gwm-)u;/Xy-sEE823.O!F-k{.54+=e<^tY?]^xt#~xtQCZ/xnx>Gr_(G' );
define( 'AUTH_SALT',        'QX~.O!Z&k{dFK%Z8(S|1Ez!eD|B[em[e_vX>5YVw[*p-YVtv+/0#+$k>#IC}cAWX' );
define( 'SECURE_AUTH_SALT', ',>`GAxC=WXfu)~l<3DB2/by mE|;{)gH*oA02Qv$gP/-8a<Pa$H?NZ2<UHaNFX-&' );
define( 'LOGGED_IN_SALT',   'TOc$<Ug) v?1l`z`1)k$dMbVKFwmt,*W<tn#A)=d)s[(h|JI[Y<*Q(MRdJSkgnN!' );
define( 'NONCE_SALT',       '`26I0|;[k%5*pJ+[~6ODCB0==acKic[~Nh2|>/%SKQFMZ. DVCko&Bvs2!!-3;HS' );

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

 define( 'WP_DEBUG', true );
 define( 'WP_DEBUG_LOG', true );
 define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_SITEURL', 'https://myshmyla.ru/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
