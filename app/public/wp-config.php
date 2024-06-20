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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3rDWIL6IbG3@Wmc+ehiv{SUqc`J0xXu+@G0d9+pnJw~&7vg+-3SZWM~<}{`0Q%8J' );
define( 'SECURE_AUTH_KEY',   'K9_wF4~&[bR3~B-g-7`sg-QN{J_0numfhGi;NIsT!)x^#Kl2f.sWZVke(oab[sTF' );
define( 'LOGGED_IN_KEY',     'p`<k!*/SQ`KR^3B;^:.w+,{;4UkDy[=5AEzP%Xj5Q=S.lnHU-UXv`CLsH1N3sy;y' );
define( 'NONCE_KEY',         'b.V!ge*n(%dj;idO=z8G<h]hT*+|^+|,|:R nsK3`a`hc>?MYhMA;.6.ZY6chM>U' );
define( 'AUTH_SALT',         ';#u-dMH!5UyU59Ep~o?gq_P^!yN2:[_H mnx!4HAc~h=jM]/9lOo(azE+;:S`3VH' );
define( 'SECURE_AUTH_SALT',  'os+bm!Gl)>4}Cx})w4_<J@!v5-A@0jSAc:;X1`T8C+dh)X.Zcw|<,!h4.J0JEb(z' );
define( 'LOGGED_IN_SALT',    'etuYh:R_W^}0 #*$=%OtWdt.t>:iN1rUk2K.vg{,sS/fJIPH@Ke=cRq+ga~G8vm4' );
define( 'NONCE_SALT',        'J~O-2W9,[vO%+(_`7o&:!q,$_L;_>.L5 HLNX3OFzV<*iu7~-g%4qm=/!N{v.bjc' );
define( 'WP_CACHE_KEY_SALT', '$fpiM83)`,+1~}k+:3YTP,}::c#>QO$[0,:)g72c%w@xu} 3R,fY2r2(_/Cd|Y`H' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
