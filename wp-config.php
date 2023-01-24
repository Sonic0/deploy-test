<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', '<<db_name>>' );

/** Database username */
define( 'DB_USER', '<<db_user>>' );

/** Database password */
define( 'DB_PASSWORD', '<<db_password>>' );

/** Database hostname */
define( 'DB_HOST', '<<db_write_host>>' );
define( 'DB_READ_HOST', '<<db_read_host>>' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

$_SERVER['HTTPS']='on';


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
define( 'AUTH_KEY',          '<<auth_key>>' );
define( 'SECURE_AUTH_KEY',   '<<secure_auth_key>>' );
define( 'LOGGED_IN_KEY',     '<<logged_in_key>>' );
define( 'NONCE_KEY',         '<<nonce_key>>' );
define( 'AUTH_SALT',         '<<auth_salt>>' );
define( 'SECURE_AUTH_SALT',  '<<secure_auth_salt>>' );
define( 'LOGGED_IN_SALT',    '<<logged_in_salt>>' );
define( 'NONCE_SALT',        '<<nonce_salt>>' );
define( 'WP_CACHE_KEY_SALT', '<<wp_cache_key_salt>>' );

/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
# No ACM Public SSL Certificate
define('WP_SITEURL','https://' . $_SERVER['HTTP_HOST']);
define('WP_HOME','https://' . $_SERVER['HTTP_HOST']);
define( 'WP_POST_REVISIONS', true );

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
if ( isset($_GET['debugM']) && $_GET['mad_debug'] == 'dbgtrue') {
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors','On');
    ini_set('display_startup_errors','On');
    //define('xdebug.mode','develop');
    define('WP_DEBUG', true);
    define( 'WP_DEBUG_LOG', true );
    define('SCRIPT_DEBUG', true);
} else {
    define( 'WP_DEBUG', false );
    define( 'WP_DEBUG_LOG', false );
    ini_set('display_errors','Off');
    ini_set('display_startup_errors','Off');
}

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', '<<domain_current_site>>' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

# start: fixes for cookies issues with multiple domains
define( 'COOKIE_DOMAIN', '' );
define( 'ADMIN_COOKIE_PATH', '/' );
define( 'COOKIEPATH', '/' );
define( 'SITECOOKIEPATH', '/' );
# end:   fixes for cookies issues with multiple domains

define( 'NOBLOGREDIRECT', '<<no_blog_redir>>' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

