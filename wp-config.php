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
define('SAVEQUERIES', true);

/** The name of the database for WordPress */
define( 'DB_NAME', 'project_theme' );

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
define( 'AUTH_KEY',         '_,NH|g%=vqT^@jmDN4`UQ|Z9^_z N$5q$O LIQG.<iZy{,bWVG`2fvY}Lv- Ie>>' );
define( 'SECURE_AUTH_KEY',  'eRNEtP8+*R-1B(^|a@0%&BhZs#&E?#X)YV4EHTXS-[d|22WxYRrh`re9s@>_*2wX' );
define( 'LOGGED_IN_KEY',    'UwWjQ93(5NtEW8W%=U@K?-fq5O~QuI<LZBuPyIKV&5drFZ;A. 2M3$[!hfy4;6kc' );
define( 'NONCE_KEY',        ',^Se&-~FFRLrJO[]OX{)MSgFl*wzXb^gSta{VcYH1C3J$/f2:AEEf5P2Xz.G(m+n' );
define( 'AUTH_SALT',        'cU>t&g)~tA6Xr0.v/O_@ 2Yb2T`4m@djFrlhk}Z C6b>FF0auI@ !6fE9+%a-{`/' );
define( 'SECURE_AUTH_SALT', 'U.TMU-x`!48vn3l3uXsn47:PdhQ~~92w{I|rgpgbHDJKtOw{Nb>NCBD[h9BW1Uui' );
define( 'LOGGED_IN_SALT',   '&t)L2Zcu>o-srA$XA}SEKG _k2lp0/Xgj,*?- `8a+-`|xgy~w(BwKb/%ak[(5Jk' );
define( 'NONCE_SALT',       'pGWF3%`ze|, GeKaHY2Rv@Eyv,t<P=dta#pQJ{o_ztav|X0OWO#k&`4*Wl:e8s,*' );

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
