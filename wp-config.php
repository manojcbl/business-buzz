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
define( 'DB_NAME', 'business_buzz' );

/** MySQL database username */
define( 'DB_USER', 'businessbuzzuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '4!RzwkzzvGeGzUFC' );

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
define( 'AUTH_KEY',         '~qb+#7P*FQ.r(mvc^z#^pix<N7O7K6xM@`fG[wkTp^TayZrm+{@84nvDeL0YT`(b' );
define( 'SECURE_AUTH_KEY',  '~$;rKPo}2r.V_Urw?0W!2x7h@HP-3]{`wJa;a0|V4Y^OuQL`h`vFf0O9{^s9qL( ' );
define( 'LOGGED_IN_KEY',    '`jCsHFO-0t:~=zcJA@8p+t#_[bu~4tQZv3+/NJljG>LC3nw.Yq#w@+#Z>u&QDx}c' );
define( 'NONCE_KEY',        'Ck#}`dKHt43{?Q*>K/C{lg=on=ag(wk}C$8Nf{i>%Y]A^Su/,7vFz,%)N@HnYgR_' );
define( 'AUTH_SALT',        'rL?+ZH[TD[}yZ![5XRZn7mEMAm@p]i*Nb~NC<< yt}.zgnZ,?B=@YRJ|%cs5Nw;9' );
define( 'SECURE_AUTH_SALT', 'Mp2<N|/;Vb*Z1eL0yR1|8$*vq${96?V$,{n!uw|JYEgqLj;,JVJ8 oKV;kQ1S6#G' );
define( 'LOGGED_IN_SALT',   'wE<_`;8M?aBQ #%KhF6T|o|5*J@Ykj`{[0q.|k!!GOqMT;UD>0anSyUPqU%ydT=;' );
define( 'NONCE_SALT',       '_jv!-yCKg#R}XS7UoilzO!)ODH_%Ulxgpj{~]qp35!]nV:|mT>b<<wC`DNaD&?;?' );

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
define( 'WP_AUTO_UPDATE_CORE', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
