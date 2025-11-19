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
define( 'DB_NAME', 'bsoa_act2' );

/** Database username */
define( 'DB_USER', 'Jennymae_SNP' );

/** Database password */
define( 'DB_PASSWORD', 'JNNYMSNP_12' );

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
define( 'AUTH_KEY',         'kK _G(q}HRCl^3A/%fMu7OZQl!IN-MvVe)ctc0##zt6U4V-K&f,$X W$dxaO!4M$' );
define( 'SECURE_AUTH_KEY',  '}:iCY,vE^M9P;(c9EFZ,)C3(uqBQDkFRhEa@#j*w6I6cmv4S6$f[.fmu7m)8Z?%?' );
define( 'LOGGED_IN_KEY',    'SYH:*iWx/Iz_~cv[}x*B9af;GaL/3y`WLQc>[c=__]]ABHM0|O@$B?yWz/GH+Qj>' );
define( 'NONCE_KEY',        'S|cOE.e`2GiTSFl%mu}IFN]J`)Ewl_U1,Qzvoh2?N_*>k*u=x;g*}Lf~sFvH>7+H' );
define( 'AUTH_SALT',        '2p9/#ii/b8+veTLVV$W5g.CMLJ+=h/[^0/hVf7<F^wL<4sZlh_1+bn)I8r*}}B`O' );
define( 'SECURE_AUTH_SALT', 'L<V(SUME#Z9U[`;[K9_=%,tTV8 jL{B)U< Frko`c0^AlQ#q%iTvW>|%p;tER!QO' );
define( 'LOGGED_IN_SALT',   'bu@hJW=M*)TM}P7[w~dl>u?Qoi/3]|YHh;AY[|i;6iynx605RK5.RcEi3=*}Sg!g' );
define( 'NONCE_SALT',       'OF19op]` 0ft1qy?J;,4=jgoaoVS)dO#xk+xEJ1IuR$PB{6z_!Raa-g(u[RDKEX0' );

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
