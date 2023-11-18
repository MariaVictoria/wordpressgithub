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
define( 'DB_NAME', 'wordpressgithub_db' );

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
define( 'AUTH_KEY',         '[/zK/9c|OA9BQ>DeQK3*y3D0z{S)d/%et/Jf;<su4(}Dhhli*/9SMzs30a7Go/B?' );
define( 'SECURE_AUTH_KEY',  'bKa6`%~#0G].5DVx9v|Cp`=A)&>)y780DN/(o|jv~fu`:daQ}?PW$F+UaDtOvF!o' );
define( 'LOGGED_IN_KEY',    '&tH2`dvmRUVvy=`uH>rx.!(bRn`83~&Z/ZZ0R{z-K[b@30rQPa6u2glj^3{9>o(0' );
define( 'NONCE_KEY',        'b]dl=j9n*2];.d7 C ^^qUY(9R.yQlx,`il/%6t2Oi%R`k|[W)c<e:5c}`KidPL^' );
define( 'AUTH_SALT',        ',#[]w;$ZYz<hUIevv<0IU&Yu:C0aLFzyiW269Ug|gNYbt#y:/O$,5z$lI$1oZ]#^' );
define( 'SECURE_AUTH_SALT', ':NY`0t!HwMsEh+iMk4gx3y@/omeA?/8D?jiG[Td}G`6@>2tcElA~Wm&$IIPmjXQ`' );
define( 'LOGGED_IN_SALT',   'j8aPz8bdNk*KC.%_6qhz=EB%HBI=Tuo%Yz74aDCT/hf1Dud{8G=r5^2.y fP|j[&' );
define( 'NONCE_SALT',       '#Gd+`ewt.4H4hljc+h+[3R^H-A6(OXG1)M.-U^C na::0M.k6 ,z(8]TWu34c(vv' );

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
