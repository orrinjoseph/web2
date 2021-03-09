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
define('AUTH_KEY',         'uzUp9glSLB5u7Pw6SkKkx0ns7wXtlJ0WpWDN22cQq7DJwYczVe96BN7fHXclOFkNrOXc2FHSoItk10xRuCz6ZQ==');
define('SECURE_AUTH_KEY',  'QIsJ/T5U/iNQPl6dAsEEWJs9Qql0eDXBxY3Aqk1oCNj+IOmULqrU8bWNxiBh3KlbnEwHCdQtZvu90MuQPld3nw==');
define('LOGGED_IN_KEY',    'yHiJ7dJp1Ph9ToCmebavPutdms8kC8wYY2c6CnTYsJXOx7+EOUjPRi2OkzzKxKuDyt7VbH2HSNN6puoqTajzdA==');
define('NONCE_KEY',        'bi1Uc+yfPtxyYLcgJp+ku/bTOHydZFwnsMNnrfLqRFtyKq/A51OTftrdBoUuS2j2EMLVhUa122F0jWX4OeQ15A==');
define('AUTH_SALT',        'FVPwt16fgZk+BngQ/+OfzoTatP/Be4cZKuHnXSUfoGgu555RHipU1VbsmsAWqWw273II4pSVEeYE3/kh5AO9EQ==');
define('SECURE_AUTH_SALT', 'dcYA7rjBcsG15/eA9+HFCUJMLfnOqrfWqWaVQBUnxoKvxIk9+DSvdk37ASr4xD9vGK/qK4cEM7LvOwO2sPqamw==');
define('LOGGED_IN_SALT',   'R7scmUG3JcO17zY7KXS/trhN0TGZwsKlvrJOY3FU8hb+rjP9I6NlRSWXlPKJIzHcYfk/CGqYVqbRS+gM8iGGjw==');
define('NONCE_SALT',       'tOCW4WR0KiU5/H6hrapwHdyi3p5+DPFdcoVjqz36pvLfV3GQtsQg2r419fiUGcZkm6ruuy5uCMw1McVLL337Zg==');

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
