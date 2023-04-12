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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ngu47_wp_7nrlg' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'RGZJfny9b*+xP&[R@~#4kbpm5O5k89yv(9Qe3S|9j:2e~9]vAPg3LJ*37(*68_7C');
define('SECURE_AUTH_KEY', '_*Oyi@aRO+kIseR;dIQroI94740wy:3W3U;2_uSM5120PpM9iI_J#&9J4sQ(go18');
define('LOGGED_IN_KEY', '*PmIyP)!m3VFt505fBztk0v)5dT39*C~Ef~Kng|@gYfIR7:9E&0:rFdmL[A(7bM3');
define('NONCE_KEY', '5gjgO3x(5bf_CVK7S+Yyd_0R3Q25]~n!92d:Em&#)2E&8hd1XqsK@)2[;XNPrsUV');
define('AUTH_SALT', 's-22gc&UmR9%3QRa&~9V215/5tj)sp7;ke65Y]%5qDu%5pz0CBn&/266lZJ@)EqY');
define('SECURE_AUTH_SALT', '#6OP9SA713;MCM;j-D2H~b3O03)LCr02RUF1lHE*@:k2_8XZ14nA8IPy%T!yO2CJ');
define('LOGGED_IN_SALT', '17uYST04O]_~p8:j8|Yh79#n!0j6oW28+zm;Ez[c/[+E370[8oHvPXM3F)7[hb|o');
define('NONCE_SALT', 'OUN1aM:i);_094sQP072u_(V)K#x[xHjYFy4Pdq|E8!wRYMq2Ja2X[1nnXakn5qv');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Cwo0ro_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
