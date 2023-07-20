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
define('DB_NAME', 'kingnitr_WPPS0');

/** Database username */
define('DB_USER', 'kingnitr_WPPS0');

/** Database password */
define('DB_PASSWORD', 'VE9.1l^ucT8QCIb<z');

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
define('AUTH_KEY', '55b297d3c7fa0fa6832f1c15387f635acc2809039c4b1e7324f05d5e432f46b4');
define('SECURE_AUTH_KEY', '6556dbff0c0240afac2fcf2154eeaf386ea38ddb103a1ed53a5acab6e9f343dc');
define('LOGGED_IN_KEY', '65b09e4b64aa5e2d5b51717b18b8fc16e41644d6e5c15af49bd695c81ea5ead2');
define('NONCE_KEY', '1093ac9892555715de7cd93e51bbba432d65272b59a181f715facb0cb31322f9');
define('AUTH_SALT', '165909f3e495d8c8a1e64c18eba462c9c02eb6ab5d627e7de276ea923c786ac7');
define('SECURE_AUTH_SALT', '6d221857c722491ccda6939e5fcfa2753a42a89355c56b0f7f222a9725f7edb7');
define('LOGGED_IN_SALT', '1212ee42bef0da04878458dba6d6da72a1ec3359c8a80a42d3648e78b7a19730');
define('NONCE_SALT', 'e240a09f50f1191713197f369e1b7feb85cc5960eb71090c0f0a9cbb54d25c67');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Vui_';
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
