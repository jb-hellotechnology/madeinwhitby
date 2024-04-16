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
define( 'DB_NAME', 'madeinwhitby_wp' );

/** MySQL database username */
define( 'DB_USER', 'madeinwhitby_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'madeinwhitby_wp' );

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
define('AUTH_KEY',         '1[§_{nh2xk7_9q@VZ%RCq(qf|OC_t8].~{]Zm/XX!sJ&L:`]nqP8MVQKb71)Y0ne');
define('SECURE_AUTH_KEY',  ';J7zR^@,N~Nv9KM65@4ykj8zhCqwL&|gIc!,9_>NB>B`c}$fK(}J%%k^w {;=l§g');
define('LOGGED_IN_KEY',    'yAc;[vS~XeJIRJ:cT94[=f|[G;5kF~dACPHVHWa47xlb?:XMpP vXL@M^RJ1:GA}');
define('NONCE_KEY',        '{8WajihK|narfsgP{4pb{yA(0p _)uIa4JT §)tf3iDd`_]Es<k3xBS16;P!ia;E');
define('AUTH_SALT',        '(hE>Ltczwu3GeXcrJ9[tGYG`Gy(&L%bo/!?0,Jk(3>}a(-3l]GHq ~;def&]OS^Q');
define('SECURE_AUTH_SALT', '-p7g;[rK$~PwJV)]$->kq&wre6U<gcByp@Yp`XMWZCr.2u|87}§VuBA9}bl&^E&i');
define('LOGGED_IN_SALT',   '1rk%U$JeMdzb)7=7ueQcYI(uj@|1v1pZ1r UG?gP_HasBRdJ]gs Os`<)&e<~K(m');
define('NONCE_SALT',       'AxwA:%v~9 .n&]!>7-@=W7|6|.mGm@91hFAzfA~GPwk=m2y`05M&r!4~68Og_Zm7');

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
