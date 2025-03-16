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
define( 'DB_NAME', 'portfolio' );

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

/** The default database table prefix. */
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'y9eAw>O0O1sE_iE.$.]?I]%T>+9;O>V }b<M^EJA~#I&>cA|:}M(BR_Je=Rp)0 %' );
define( 'SECURE_AUTH_KEY',  '[Z5O;e|ex`x_ G9]evVN.akj@l=bFJo?;<M7(DgSq,qZ~d$cMIYXnfO-LF^e&)6Q' );
define( 'LOGGED_IN_KEY',    ')K&<sBitM:ri1a }51wC,b8}HJRK1vh&x4c(6T3)KL3h~*K3.Z.R`Cls:dD&1wli' );
define( 'NONCE_KEY',        '=-d os@i5iAoF$LTa-QQHVX2o2i^>+Usuf:?Z.zk0A_<_a)ST=*PH=M`>[5h:=0Y' );
define( 'AUTH_SALT',        'j%s8lL7La.w-0H0Wn[oCOf?4K!>+s&Uyw|T?]=v$C<[P[XDam- m@z48Aqx9fu!b' );
define( 'SECURE_AUTH_SALT', 'l_{=G~$0j-8n[vy&:>Cf@d_}-OW~,)A8}/A<r!xqN8w}-=NT`T$&PHbV%5%F&#I~' );
define( 'LOGGED_IN_SALT',   '4[rOJ@#LRded]>]eV4qnJc0N{p!05zL[.i(rzZV,|/_O%I7ViMe]C6;#/A#|)9sC' );
define( 'NONCE_SALT',       ':#xc(G,a]YyKTlab6CR ~.Mq%MAmO1E(z~VRs|Pkca:NsZ5-VKj pI}zXbQcg~1>' );

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
