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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MyPortfolio' );

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
define( 'AUTH_KEY',         '8YedX>R+%.r2YGpW64r;,m=WRPvhuLr$I7X$rr*Y/Fy;GXMnoUU._Cv^+vj!;_o7' );
define( 'SECURE_AUTH_KEY',  '?ep~v~|2f;{tuh?B4pB)((Fp]n>])Yos;?MBh:dEd/$>V`c~,0<j|U>X%/ADxw5h' );
define( 'LOGGED_IN_KEY',    ']])nD<<T0GSD>u<yYRQ],svuRaeYAp<dmv4%wycLb-KM@g2dOVJSI97=-xABt!c,' );
define( 'NONCE_KEY',        '%kWrSR%kd}9LEzw:xkb{3b5?<Z;LP|;/9V@4E ;Pf4He+&FaL3*SP7]].hwGj}Q ' );
define( 'AUTH_SALT',        'b69L*Z<eRmi^R+^[RHJqK4uFwEF!4[!a%pENOpBjU$_nYXt&v[$#8IL-|NWGm4F$' );
define( 'SECURE_AUTH_SALT', '7<#H%|Hu.z`E,;QL0gXI GM6|y7;HypTG e$GC4>%5u)!pzJWqqKnkZhP5r56EgS' );
define( 'LOGGED_IN_SALT',   'REKRD]Uv;EVJgS[i>HYvu$;2jx24?_!(J%fT{v5HJG?L.@WSB3Z<pt2,4uf]b5@-' );
define( 'NONCE_SALT',       'fbDTm8Cr5t5>Q`kOLf%yD{z6K=rg(L29]QUg|T !k&z5tHl7F&1n]i]Njm-GP=u#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
