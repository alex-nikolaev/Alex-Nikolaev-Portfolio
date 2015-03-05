<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'alexan28_aniko');

/** MySQL database username */
define('DB_USER', 'alexan28_aniko');

/** MySQL database password */
define('DB_PASSWORD', 'A2xP04!@JS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'kximaehjxg8da7qm596ijkpcaxys93oopyi2kyjwdxrt4iki7xcrdnkohhhagykx');
define('SECURE_AUTH_KEY',  'kum4sqfzc3ntjskmmsjlqp3ghfoine84z95jnwvks6mnwhal6noulbbztlufqcdu');
define('LOGGED_IN_KEY',    '3rxlhgneprqgh5ygfdicc1suoy0g3yir1occsh3job7zrmqrracmjanqx55dgxzw');
define('NONCE_KEY',        'lwttdl7qcq9osaviufgw2y18cjnqduoemzb6gzlazojmry74ybgposs15gnyogtb');
define('AUTH_SALT',        '44arybdalwlofakloi9gcg6wkxwg9ltcubcwel1hhzlqujys662bnreggqu0wgni');
define('SECURE_AUTH_SALT', 'wgdugapg1pofdxlbyxby1imzrrca2cg5er59onjv1lkonunvsd3tuh4klxfedahx');
define('LOGGED_IN_SALT',   'wczd1fby28m6r1nk4hayhqqaiim8aoa9ykwhcyt5pzhcm7ikgptmsvins6pypfml');
define('NONCE_SALT',       'wzokcvg5cngcjrovmltchcumn6igjwyjjrflnsuc9jiuokej35twdfzeh30hspvd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'an_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
