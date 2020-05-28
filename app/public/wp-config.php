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
define('AUTH_KEY',         'M+XwecfwqbKM3UCpZeidBJKOR3CUUXods1DOVmk0JFSGxegq9B/CT4Ce1L8GraQtWpzZ5a0omDP5fIvdYyHlzQ==');
define('SECURE_AUTH_KEY',  '7MUbZsU4ZmXdlpjl0vvCCvvlNFoXilgU48ow08/MZgAkDMAM378hWeGPTTz5qbb2lVebD1eiSdiyvdYvFnqc7Q==');
define('LOGGED_IN_KEY',    'aPeIgHzoczBG1bI4NKxzb0428hMo7UgrvB/kaYL9vanI4zrwhZWXIVFI+fE6nU1n9KkQR6qbteBRWwlXxaxxrg==');
define('NONCE_KEY',        'TDSp1wi8p+vmE3yY1ibNkMulhDy4wAexkCIMPnt0Q92bt67VJzHfJqK1lHK0Ol7PnVX/L5fll8ePLA95pcEAMg==');
define('AUTH_SALT',        '2H1/OU1WnCKkfszJ+i4+lVHF4OQQEJOona2Gsjz+/eUpz2ibIj/zIXAtU8N5lgbnuMTE6k0pq2obh2JKKIcmNw==');
define('SECURE_AUTH_SALT', 'Oy++kOb8I+3vUDARRDW0wi72uCllJqFmxLNsEtZrvWWzfnaJdOeatwPVkoQcJdaTOMZD193MlNdTMc1TBc+WnQ==');
define('LOGGED_IN_SALT',   '5p6hizL2ze7l6bNAU+0ZHbclnVm23C4VDwfOaQ5n2GGqro/J76miaNNhmJTbBGtLkEyMHYpw1M1EypqAxgyF2A==');
define('NONCE_SALT',       'QXAJTcHslRt77BRjXaMPd4mBcXS+nI66nSuikWJQPHvK0bo3BmPjzQl6ar8cEMcR2sb3UVZdSxnBSFP85HhQBQ==');

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
