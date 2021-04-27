<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nV zLw@1ASf&He)&f1Spkai}zhsb?&r%UF5y4lH7:f_zxc`:} U#;w6U.6R/0TG]' );
define( 'SECURE_AUTH_KEY',  'JLN2hzDBsp.U$U# +TI= rG01v00ob?Z9(axGY %N3Ho>![8s;}w%hOavs(!Hz<u' );
define( 'LOGGED_IN_KEY',    '9v+QB8F)s!zQj^o8sQx|1_1N12=wF|o}t(G`$57w<LbQ1.zt>bcy;.=v6C5w#cH.' );
define( 'NONCE_KEY',        'Y8I!T*aMeR8IRTh<cgKPQ .9CUH.%yxhe`O<_G*Ke}^Pxnidyw:ZI=.E9Rf4 V:j' );
define( 'AUTH_SALT',        '}maOJ/2LUSGjvv.$RlASs_?_1HU_-dFWoP-xM{BJ1AsuSI^tGz+[cVw9SF@>c7``' );
define( 'SECURE_AUTH_SALT', 'HIG1g)K6lr~Z(;Te$94+~km8)9Kc.LueL*^iML6g$OD#Uep(p)kU[ZJ6U]59zgPn' );
define( 'LOGGED_IN_SALT',   'h^bwz^Nz-6HbB${Q06bf9QE<txO36:C`:NA6Vj->//b$VZxAv%zp~~MU7x@]mxy@' );
define( 'NONCE_SALT',       '}>KLG@l!@ (F|J!lK6VK,X&g8ZT4j.Pw*:1`,=za8sNfnWM@<dQsY2(7,MVQJcU7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
