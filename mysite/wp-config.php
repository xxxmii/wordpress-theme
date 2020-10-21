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
define('AUTH_KEY',         'q6JmUDBZ/HxfmnhSg8cIDilQ0hlghEvb/PlPE6/CqBKNxLsYrjjv4fibR0OZ1sO0ezWrBInpaLElzgapNVz79w==');
define('SECURE_AUTH_KEY',  'UWb0cM5VoCc8XEP58ZT2PK61dUUmKOO8e6ieVLTKl49X4IvN3ipm4N754RM+NkioMm3pVjCAANL8oCZAmJMUyQ==');
define('LOGGED_IN_KEY',    'eFV8/gW12HvPPuX9Xs5pn77aX6z121IHsXi0HPYl3RWDtvQu++Ri6nYADGNLB20uj+NUWo8OI891v/2pE66roA==');
define('NONCE_KEY',        '/USd1syCRHJMtwflFn5vVSpxYkGbJOnQR3HRI1s+r4oFAt60m41LY8kqcS5DvoYcyM3HO9d+gkxyi7qmBCOF8Q==');
define('AUTH_SALT',        'dbZ7hQJlQ5rQtZ+dPTp2fTOG4TYKlnNhQr1y0Dcn5tWDw02fz8nsUAFa+bmDSA1K0ePTlThV793DHn2P0Hz7Gw==');
define('SECURE_AUTH_SALT', 'SeEELkz9/7zMMUYPgs28ko0TUFwI6ykOWJumDdDHoNboObI8Yvsuy+ferRM2Sqs+57RRONKpLL8ngp5X6fG5gg==');
define('LOGGED_IN_SALT',   'Ho2qoxeU3YfDjw6BIKml5sf9WYEog/RvrMikzDeb9cJrLh7vMq4ZBgnJaKFNXSxVZnTwLvuALy+DO8QVp62SiQ==');
define('NONCE_SALT',       '76Aa9hKJ0jlhQZ9jAg7/wNO2bWAOJdcgEc5sOADcXNCUeoQwVmyoiRXkDfYZWOnDLAl8JAwP+U67h0xln5D9nQ==');

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
