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
define( 'DB_NAME', 'BanDoChoi' );

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
define( 'AUTH_KEY',         './Dx2cdZO|f$`^o;O86?wqv`w4mZcz[jlqvFisU~igG|ZGa#4C#Na.(t.a_b!QcM' );
define( 'SECURE_AUTH_KEY',  '512]R~]7:!!?k8>J<&<uls8n.nK}BGlrxM12taj3<}&)T7X*%?5<I!0o~6J8V4EG' );
define( 'LOGGED_IN_KEY',    '`0,Co~lAW=9rw66z3rJ6<CE`J]4!!5ElG}s-5-zUYbgkG}*#=.!lZ7,2;WCm*KkO' );
define( 'NONCE_KEY',        'HD)KYROVD-w?n`z:lDrM_sndU1u2.M4-YVX&R*:Ox3<7+SX|KVLkkoNH|XMy$xyQ' );
define( 'AUTH_SALT',        '5wJ<|3+Pw6!W*B_:2_2UW_( E?|>$=(`5jByR1#[uhncwcP^?1kdR~q8q5S?8QLI' );
define( 'SECURE_AUTH_SALT', 'rz#J#j+S ?*s5(~:fZ7cVKYhhtL6#mS<N/O{Rp4K?I;@n[t[HL~73xI7#ff9 #HK' );
define( 'LOGGED_IN_SALT',   'YPPdwel -)H.ygmuZzraTa1fqMDTN+`UvfHPhCL{A_?a}n,D^C*>)9MHvz?lJrX!' );
define( 'NONCE_SALT',       'S_Qg1/YuI/}^OpCu@*/v0,:KND~b_r@@=wl|g{Rup.z!MCZ0r,xCMvHz5i;bL8M&' );

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
