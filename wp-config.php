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
define( 'DB_NAME', 'lms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '=~M+@mVB929 1dQRwQtP$8:L_2/HW^E;D>+*Ji5tI%}wJ)c[rE1Yrn@Om}3Z/qPs' );
define( 'SECURE_AUTH_KEY',  'j|{/yY* Q|qg%cA[{0}[.y6a2hprV8%E71Pg35TKb<zm#M/FAH,XX0?UPqa-]Im%' );
define( 'LOGGED_IN_KEY',    'bZtr)1q,eA1u90)I,}J(iNuh>dX8pd6I4g,SE~2{uzu,A{^h/?4=@,IW~QQ2D_d+' );
define( 'NONCE_KEY',        'hmf>7v/Z5?ld qRmhb*+;)^Ine!m7J?fYJE0KHkhT<a^yR^*9d{v([xWlE1CQ1j@' );
define( 'AUTH_SALT',        '_e Ez5d876R .3 kcu[Ej~Jd[w*JN)!?0V|_;,6w5ba&)X5vpQY#dHJ{JL;D{N_9' );
define( 'SECURE_AUTH_SALT', 'L3`K;@vOdGXE9f7Wt7/I$BAXi}9bG>@z6)umFn~^^fww0TWT;)>X5px}zy*jZE5!' );
define( 'LOGGED_IN_SALT',   'z>Ex]@?+0``0b{<c>TEJ:Tx+W 1vdkm+l<`ssz|Ys?c(+u@sOl5(||ndUN,~V`5k' );
define( 'NONCE_SALT',       'g 0J/.x!`#bM`;:$a#q&+oKg]D=r9H.@IUYnKDaFUvMv|g1WMo)N58S0^Y]HCc&)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
