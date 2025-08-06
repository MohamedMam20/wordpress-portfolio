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
define( 'DB_NAME', 'database1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         'yCw~>? #^N@8<LRUT3W~!oE-Qux6T`yHR2U0nOvzk=Xbo%;WUKUY6OL@klm?@Zsb' );
define( 'SECURE_AUTH_KEY',  '-_$aWMU@ePA?lzbOpmthEL@&R{0sD/Q_[mF(y|]pE8;AMH PL~D3zaGa`dH nyhR' );
define( 'LOGGED_IN_KEY',    '}8UqOzSKD5s8g<H%<r-MHRww`q0r38 l+7(_~;$&4xt{gNx3|pP8BXOw*rFPgB!{' );
define( 'NONCE_KEY',        'Arx[H*-UbYt (iYTrx`=^TaJ(q)a>2 j+0dVRQ*uZyq6E{kX0@p5_~hxKDH#eqUV' );
define( 'AUTH_SALT',        '. ESbI|e]gg-|uuIr#A[6ZGou;.H 4zjf;rI|4nB]yXs&goVYBP@3=4GUv7<>#(T' );
define( 'SECURE_AUTH_SALT', ':3uqnR4vK@iY]WBN@ft_t;-,?&{&1_(LDaN= jKQUT=tG7#@YM?B}N@K[hFG*D{1' );
define( 'LOGGED_IN_SALT',   '`~tA*Vz{qJUy*nVo]V1=k+6?B!91}!!EBHcJ#yudXOaEI!_!btDd3f!-|{fF=rs}' );
define( 'NONCE_SALT',       'x}qk[eJ$y_U7<1IyRh1@9{s>Njn`>@Rmx{]{u>0>1#z`@y^XOF#PJJN+6NcKYww5' );

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
