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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba' );

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
define( 'AUTH_KEY',         '7MU4#gs!$RtNvCWDa:{x(BT3=3OvkiQ3X(4Ie7@(k/gay>J]+Z1*a8$//wL?:RC}' );
define( 'SECURE_AUTH_KEY',  'nS-CU+!z~)!sRx_cw;`|t)>E!%*CDpM:oB>jIee1vv9S$#AP0*eVB5TO3eR]r[%5' );
define( 'LOGGED_IN_KEY',    '8z%z#AX!N{OSGy .*{}!MR3>}x6BtbK{=KOHM]x .pVk8jo{$$^@C2GDO7vCEfh3' );
define( 'NONCE_KEY',        'kfZ@[+.E=L&Vx)A{kq0L()hC29?9g^X91cq(_b sT3?E.Ck7<86gG7`aH?;YYA|E' );
define( 'AUTH_SALT',        '<iQR`<} 9ni+z9Eq]6YT7P|~v)u0V8$JWB1K?-R>UUa/?XX=Z*?wSC}6%84mYsV.' );
define( 'SECURE_AUTH_SALT', ':Qt/-MH%k~Q_fEn,nh3>6PR.:)ToFc~MGu(yl n_,}hI[exhgditthf1ulSj1i&}' );
define( 'LOGGED_IN_SALT',   '~((Mc>G;|~Zf:K@$%/X4|Y!=xC/:8Yg:O:yWe<W?U($@p`q`_XLV;@@WOu3LDIw1' );
define( 'NONCE_SALT',       'KK4XE~|R$M=pkgXyINdd,${pm0Ntk9(|b@MaM1E8Yj3c}J|pw2 4~jTgu{.6{,:_' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
