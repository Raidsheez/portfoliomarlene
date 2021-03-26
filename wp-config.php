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
define( 'DB_NAME', 'jagut' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S85jcZIvG1Iiq7q2HsQxnJ37moLtiGRwPlGVp7ZNlrGbEeyLTgOrWN6myrfD2l1U' );
define( 'SECURE_AUTH_KEY',  'jLbFCDxjgUomLMS4ZylCLHOQ8bRPPWS6NEojicMltNiXl4BScZ9XmAQlrle8MTKU' );
define( 'LOGGED_IN_KEY',    'D7UKrG1gCcv31AoAt3Cdy0fbdrPRyodK72hEByNpAJOrmO9wKjRA8WQUlvJrNzXp' );
define( 'NONCE_KEY',        '3UG2sFZR0sNuz4B1jKzWNer5N79DEryBEQMw7HoQIJSEDSiw8bxDCnVxZY70SpjN' );
define( 'AUTH_SALT',        'OGx0gq6ZjBN7n9BUyk06NNHfopOlbWU00uJAk9jIS2dIU7ZYKfZo4afqACTkbUjI' );
define( 'SECURE_AUTH_SALT', 'SVtVE1MZYDk58cIpQzIz8ef8uWwhNfhdnwvi92XG4weVWeyuNYhpIdMunagCFWMi' );
define( 'LOGGED_IN_SALT',   'ftPo34T80fN1yraaESOKUoHygQ21VAjxJokaSixRfBsQ8ZScea4ctTb8D3QO2b80' );
define( 'NONCE_SALT',       'WiAypzskSqbTHSXaYgsC0i2xH7lvBX28c8bdAX4etgTtupY83SjImcugkeBUeFki' );

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
