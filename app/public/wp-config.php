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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '+MLUEIRVyNnQSjI/JA37ZEVr8xN/4KIMU28Qj08kIC+1P8FqgzdF/QcHZjZ+vFvEeZpUr7D3bwxHhuRqAulGlA==');
define('SECURE_AUTH_KEY',  'ou9MECp+uD+xrp2Xf+cVqw6ZnzrciBQwawv9AbAFL9th2Pa3GphJUV3uFEWvB/rc0qN3Pr0VOKZcYeJOC8jhQg==');
define('LOGGED_IN_KEY',    'YJ+kX/q8qjhlVNEQbdNNMrmmbC5L5Q/N6RsBVTcpXqRWM6qPk85hUrnKc3WEwACpedlTjsGR7Z3KMb33snuSbQ==');
define('NONCE_KEY',        'MBB2PtX9JzJrVy7az22O1hhyeEVZ3+zVB6xYCDZkwEctEWUCecUpCdTXvMDpeHKeD+WR++bHfypTb8cigQfWmw==');
define('AUTH_SALT',        '/HTrjGoilHIIg3iW7z9PYJXXFmD2Gyzd9Z/4ymwJE9D8dn523NE2UL7GCt1lB0cL0vW+twTBsPm1PjHv1fvDcA==');
define('SECURE_AUTH_SALT', '2LJMc7l3QXrh2OmzrGRLlle7L+xFC4OZ3fEDSN4yDClvT08Z4ILYZlavho3iGViiyk+IQHbIT28hGcoDbQQXvQ==');
define('LOGGED_IN_SALT',   'oavfyLdwFVSzyouodMyyimqMONwd+5gIUz8fhApRpva62KJI8ZRKTDd8R3fbiPoqfAU1N7vrliTgLLaerC2vpw==');
define('NONCE_SALT',       'tnWrbufBs/vZCgl34V2hTtYZDxx7iSikWIVbqE8/WSWODwkaEdvdajZjQw4g29n6OQiT1Mmpw9TRsFx1hqIa1w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
