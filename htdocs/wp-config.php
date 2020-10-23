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
define('DB_NAME', 'admin_patrimoniocultural');

/** MySQL database username */
define('DB_USER', 'patrimonio');

/** MySQL database password */
define('DB_PASSWORD', '4JUqctiBq4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dcljysywqxpktaicehdxjzgnpavqaeuwcu6xex8sqd68vudk6acyjpw598rvowno');
define('SECURE_AUTH_KEY',  'iq2yzlyjnvawtgnfr5zbgzwntpfgyolw5upnvhcvkfi5b8kz6qjvn8jxcjlxquax');
define('LOGGED_IN_KEY',    'ta4wnf2ncsfeamxojfn7l0gokewqrfjcp0xbdskcoymnvhlflu50efdg8fmtsddz');
define('NONCE_KEY',        'ka2zz4lq7q37w1jhl5kjljplvzta5udndkletr6bzqebqimkaeuwb2wmotrvcwcp');
define('AUTH_SALT',        'o9x1udrofwvd4ftwr0qrjzqj40u8q6ucn7wolhkdzfbhjiizweqvtbhbvkcqdszt');
define('SECURE_AUTH_SALT', '36aqdoisxgv19nxewevtj4l4vjgvgoe0plwtgyoo3mwt2puynrcshlstagx2ry3p');
define('LOGGED_IN_SALT',   'irhkufsyen8xcx1zsrd5o72ifjsfuc3qlitknyvwfac8lg5p48atvdhnl97mncpz');
define('NONCE_SALT',       'db8sgu3auuodyquqxhedpxjxv7jngkwjqhewyiceytqkz4tnkpx51hl0zlweedof');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wplq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
