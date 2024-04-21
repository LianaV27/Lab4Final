<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.3078316005774342');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.3078316005774342');
?><?php 
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','Yjr-D@OlX+XbX)+Bj4JW15+$q4^foKz+<(Eu?_PB');
define( 'SECURE_AUTH_KEY','[bgEMFmYvK#x#Xyv$h8Z=pS@tXIxZ*U8r3>_]M&N');
define( 'LOGGED_IN_KEY','N0(6aj.-mqPd*zeaBr)St^?A?[QMW+Erl*bCWDY@');
define( 'NONCE_KEY','7][i<z*9=2g-oxAdKIB_qfFWc@>QJc._,ykkeP<g');
define( 'AUTH_SALT','vjH/)Q69<U!Cx]*Uw(v7%VD_^KYa]>saC/59Tp.4');
define( 'SECURE_AUTH_SALT','P$,qRV4,L3sBqsHS4<6REUi(O_ZDDFP@][2AtdEi');
define( 'LOGGED_IN_SALT',']8i5kr$t!9<TavPK[yz3Zpyu<M[Bw6@RQ@ZO]V)K');
define( 'NONCE_SALT','dR#qYm=htLLI+XlhVH^qzK*pyEnlLPj*y*&Xt3>(');

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
define( 'WP_DEBUG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
