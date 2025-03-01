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
define( 'AUTH_KEY',         'a?L.zZ;OW+(OPlybmRy#o1B<@v>@oU:N}&koL: *F66p6Vx39^cTY+|:^mMok$*U' );
define( 'SECURE_AUTH_KEY',  'r7Q_[|4_MXFs+2t1bADi5lJY0qvS&}{G/A%~:I9ub7ZSlVA%0HyCgnVT)M23=|N2' );
define( 'LOGGED_IN_KEY',    'Zi7[eN1/u8|C.LgFm=8eu=!.J.~asWpNcU[@]]6a^_U2t`lFR=h u`V?OBJji<%#' );
define( 'NONCE_KEY',        '(JBH$]K00v`cq^zE#T&/KR5NE;H^Z3>ri8PFRE&Dp&ZQOI?jG}K:s?IEULQJfP`c' );
define( 'AUTH_SALT',        'QtTp+!b[D7Ifq~IuM?}rC.!(/c<{pED+&vdw(o7S:~<8o~j,Ay-u?t_SY}sAH&H0' );
define( 'SECURE_AUTH_SALT', 'Bzg({;H}_9lbfUA(VTimmW`%VhTw)jM0;d.ESAX>f4~]C=F-u=1@T^xo@FS,f )A' );
define( 'LOGGED_IN_SALT',   'U)Eto)c$vIB6(0upMvDoqme|jf78Bc7[H|AhCr(#@=%{/jJtex u;9#B=bCo:k^m' );
define( 'NONCE_SALT',       's)6B;DCVL#ST-G xE_r)Bulmd8$t=]w[T3DP5ouZ`Amh<h&a0Tt-Xqq2)%mjWN<W' );

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
