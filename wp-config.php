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
define( 'DB_NAME', 'fictional-university' );

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
define( 'AUTH_KEY',         'Qv2hdCa>?X?p/o:-x!7u1Ls}oKJ#U<Nn~)@[*^f#&4d..UFNpN{?++RRFRBKQlwk' );
define( 'SECURE_AUTH_KEY',  'I&zN[1-]b^b|e-}b!vF&U?lq8_<JRcF$_-ak-trsD]7_(KMc<m=JI(]5=k47c<x`' );
define( 'LOGGED_IN_KEY',    '}mM>]b_8`ZC-JEDvaI#dK+X[)d6o0R,h@OaJ7`]yxQ#X>8|5lgMy[(E]R|n>blsI' );
define( 'NONCE_KEY',        '6~0!$l^aNt$:_xyDD/uQdS4,0hI^Tt40WL]s?zh}F39bZJOks^o)YE,?>#yj}=z(' );
define( 'AUTH_SALT',        'zCUq85p($l8YdwAgvVJ|6-5!bf,+kK^CiA<{E4 6h)66j$&6C=POa>5FeH.h9*gt' );
define( 'SECURE_AUTH_SALT', 'L=G@{^zL+T:SdP6#nyZQ39KMupC8ncE:fFknK5ye<*j@X^b2=S-?(FY.Oy#i`]{s' );
define( 'LOGGED_IN_SALT',   'A.7r_s5*1C^&[e0v+w#<TeKqd,h7XM(4<oQzZ#HAF6j0pF9t!CuTHd&ic8Yz?Q!L' );
define( 'NONCE_SALT',       'N0t4|q$9)w$>:RQmX6o;1hB,XY}i!2;b8X3QGp>=:,HZx1Jv&`MHk(Le,pL1f`1V' );

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
