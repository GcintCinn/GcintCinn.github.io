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
define( 'DB_NAME', 'gcintcinnblog' );

/** Database username */
define( 'DB_USER', 'GcintCinn' );

/** Database password */
define( 'DB_PASSWORD', 'Cool0201+Tao' );

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
define( 'AUTH_KEY',         '!P}m1`q?45~:pa7WLhunr-c:6G)%Pv;9T(gt])6_2,u,;D%VW:.p{-`y*hG5h/%l' );
define( 'SECURE_AUTH_KEY',  '}fv_^N9jk,Zz|oEqt<G`=1w.27U~cxP]LOPqe-C/Y?e;N^/9Addy^/rW^&!c1gx$' );
define( 'LOGGED_IN_KEY',    '98 O:/OTm:m:}J92pn<fiS$iZX,w#bT7c/@-mrkI?EHrkoK?a~)<;LH@$#Sp521$' );
define( 'NONCE_KEY',        'g(5zEqQ2#I6=ndWe6b85PM,beX7Db/G^?a$G. Gv}!Z7]bXt:U<R9r;(1`%<~Zl8' );
define( 'AUTH_SALT',        'j|f#+>rydieq&|;lW}e+=`+L;&?LHhQ0qG0J}h`jv}m+DJV730@XU0,)8o?E?$(8' );
define( 'SECURE_AUTH_SALT', 'hU`N<D:S bDWSnya(WD&S$jXM<X{!Wj.L/q$4Y3qwT,sbYu<HI9Tn,vfqx`:tGM<' );
define( 'LOGGED_IN_SALT',   '4kuUBugA9Sk]O<ngx25{|pZ`1@]AOx-8PaBewXY}}eRz]Hxe2Sx~Az@3:D0FLGs[' );
define( 'NONCE_SALT',       'y??2]`e ]aQ;;Q_zqLeIC0bM3lY`QLh|FU#J#t<_4E@)C<EENY0eqcj,_w^m*@@6' );

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
