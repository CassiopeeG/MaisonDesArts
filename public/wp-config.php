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
define( 'DB_NAME', '26_rpni2_wp_accolade' );

/** Database username */
define( 'DB_USER', '26_rpni2_user_accolade' );

/** Database password */
define( 'DB_PASSWORD', 'am-V.jfswtc[BpD8' );

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
define( 'AUTH_KEY',         '!I7b9>1`~l%=g9*X2@LU)[VPr7Dyd+O;]hya4 `$)K61b,Zf Gcw,,p`a`3b4on`' );
define( 'SECURE_AUTH_KEY',  ',ZB:GMPvjpmoW|2kA/%w?C#Je;f@_*%RudK7;=u9VQ=&g Tu=urYo07N}T5ur0N$' );
define( 'LOGGED_IN_KEY',    'zc,[i>7h,3S}KT#=e)*-d7-m+_EeN+g7eZ,t|Mp Oy3&Cg{2:JXK8L0T1Szsf4iE' );
define( 'NONCE_KEY',        'Br6-r4.g*3{|Ij(V4PplG(NHH0VlZ>w+nEJYUS3f1oN3u8aOl-+=`LTtXOAeIZV#' );
define( 'AUTH_SALT',        'X`DR^q]+]D0V5roX6n<8-c*%:`yTDT.VJ!cZ83@8+e.{ug.0avxMfS+NjUX5chR|' );
define( 'SECURE_AUTH_SALT', ' `SIdi wdttwZfC119,]]K?t!W@5NRz5M0tl;Db~As:WaYlvb[yOWwzb^]F>xv/p' );
define( 'LOGGED_IN_SALT',   'C/:6;2JJZnc^;0=.aT7<NEUi{Q3cQbuWz?6m;Q+3SVT<l:q^k(t7i4Vx_J+b-iT[' );
define( 'NONCE_SALT',       'YFNP3k<cPV_%,/0W!s$hNPJIM`Kz#Q/WeBo!J EfhfoY.&Pf{}X7A&=rV^y0,7y1' );

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
$table_prefix = 'mda_';

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
