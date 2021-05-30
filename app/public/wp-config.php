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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XCY9AwwmW+l67QamsgdIXKo1c7gYgwWzjeOFZiCYhDkWZRoadMumIRqTqeV41y2r7XVx9ymCo0G9qnBIR0Z5tQ==');
define('SECURE_AUTH_KEY',  'wfWuZehkjxv0sZ+mvJXzb471t3/PO1JYS5CFSsoDtDqnfGd1l5TLn/+9xd6RmUR3ejSS/Exsvd+jTB1dosEoJg==');
define('LOGGED_IN_KEY',    'kYR84gcFMplI4UBtaLn865ZMv4xapAyajJts8YS45VENRI8Hk5Xm5xQ3+ooBKIe+TsnwMvvSsVkCYxEgi7klfg==');
define('NONCE_KEY',        'mcRZEqlxF16WuzoyZgfVvN1wwBrL+XIO2eFnb/kGxgYBVtUM8FFV3v6j10c7RyynU4mVF8ccGDjkoNFbEKF6Lw==');
define('AUTH_SALT',        'sHHAlDoZ39XN+eTiJFVvFTpIbhcFYCv/m8DeaOtrkvEElw0LfiMoDhUoqho+Hs83KDQcfh1VZcgGWKTYdyI/ow==');
define('SECURE_AUTH_SALT', 'ULiIS6zQ1HHum4j6Bbn1K0b4hGzQE1//VqniyzW9IxwastO24u+VD3HNRVvdUFHuPLyg3RkNoIcIXwh6Nf0HQA==');
define('LOGGED_IN_SALT',   'VM1uvQM1qrJmp3fEGoEb8C5uq7CbhRL07WfLg6rZ5dwVuHvKIjFEg0OqyMxM0UW7RIr4wLKpbzrTYJs4cWEGOQ==');
define('NONCE_SALT',       'HzFDdtkDHFDM/zaUiht7GVxK+2/6/vZl3LoI+mf+/FZn5N4FIJr31CzF5lL4S/PpN0Ov4kbCgQFYeZw+GqXLtQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
