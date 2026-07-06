<?php
define('WP_CACHE', true); // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ijadeveloperscom_wp620' );

/** Database username */
define( 'DB_USER', 'ijadeveloperscom_wp620' );

/** Database password */
define( 'DB_PASSWORD', 'X5]4pC.Ss6' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'a1dvkw8ljyxnj5rcwzar6lyg9ukgcnszi0nzqhnvgbsrmvw5yy7fxsvuulgg2hyr' );
define( 'SECURE_AUTH_KEY',  'vfzqanz9rjiizjr3lpolumdsgozuuulrycqo3hfpehcji6uuof0nlaixfo5um6h5' );
define( 'LOGGED_IN_KEY',    'kfnaqn5zemolifawye2twbtz6gujybzzz1t7mo8t8vbfbgrz0jlhtwuljn4lbgpm' );
define( 'NONCE_KEY',        '896nuc7t3ewfvdrdfn8zd9vap2xy0mjv3bioxna220op0y4m0n1rnzndcaznzvlq' );
define( 'AUTH_SALT',        'phylgrjo5ycmvnwwdelur3yxdc2yn5b6cmpsxjpsplxsqriruoiyzckxlqznditc' );
define( 'SECURE_AUTH_SALT', 'fejyf7xqlsnrdqyd4zxm025lv6rk6edgpbzgfws70fw7m3eofdqkeaun9egaczwo' );
define( 'LOGGED_IN_SALT',   'tyzgurhz4y3myzfhhvoigkxhfhsnn9hbmdlky7xwai7u6iffgba4w5tbhbruirby' );
define( 'NONCE_SALT',       'szwmns3an85akegfgztkw1yvizsbl7b9uhee0dsevalv7hgdnj7b44qzqnpuxa1o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpfw_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
