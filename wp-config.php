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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'smartul7_WPZGT');

/** Database username */
define('DB_USER', 'smartul7_WPZGT');

/** Database password */
define('DB_PASSWORD', 'Fhty0mrVOKdkO?T{X');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'f6cc7dbef8c7a706c5cd0cd457331b3ce0b8606b1ecf5c016e72e8e54bc5aebc');
define('SECURE_AUTH_KEY', 'c119fd7ba35af5aaee7ffb21b7d52c5b38011d4d9735a3cbace5f235b3d259f6');
define('LOGGED_IN_KEY', '963122ca234817c3e6e1acbc21e724de4b0a4bd162c5d91699810af621191495');
define('NONCE_KEY', '4fdc0752dfdb8d358c6d224bd1d1991c309d46da872860c73321bda7391557c7');
define('AUTH_SALT', '2995b474873f84414c770b4ec9ff9542ab48c60518c90f859ef8991d9d9985ff');
define('SECURE_AUTH_SALT', '3dea6f94e2bdff6233eb9d4efbd6ca7403721fedad73dca4fae4ffb707ff18fe');
define('LOGGED_IN_SALT', '1e4f0fa65a4c5e7b314aba056e53ef99568dfe551fa300cef5f7b7a79c2c736f');
define('NONCE_SALT', '9cb2c1d235231727062072e724d8e0efd166efd16163414775b49e40e969bb64');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'FTh_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
