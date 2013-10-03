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
define('DB_NAME', 'wrd_llcm2jhi3k');

/** MySQL database username */
define('DB_USER', 'wrdqkvVS0MW');

/** MySQL database password */
define('DB_PASSWORD', 'umy8PLicQp');

/** MySQL hostname */
define('DB_HOST', 'nanott.netfirmsmysql.com');

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
define('AUTH_KEY',         'pAs3zmz9AMkwPz3C8D1PuTLyho8x8rl3HyuWfMCIInS4KMhiYKcCBP2RLMgNtbTw');
define('SECURE_AUTH_KEY',  '30cL98LH68TKaJk3L9UxAMCJwkVuhOpPxKRqjJxxS6imUoxWhBC5iwYfRizxgiRx');
define('LOGGED_IN_KEY',    'A2cV9qxBtwNrLJ3rNobGRDxMwHA2QgoPG1iX3JO1jZUNJIBZVMG3Yv1SzA6lVJx3');
define('NONCE_KEY',        'tbIpSedPTUyNptHNXFyccQwUuV0nd2EhT1ibLbgDPqWUpEhOjlRbVQ00bAB1mMbS');
define('AUTH_SALT',        '6DjFzUXwqkPMjiYUvLclZnjw9UmYP3KKjRrhprflPkFR90TkbM3JAsXbhsPnJpET');
define('SECURE_AUTH_SALT', 'Aqb5yULDZvVQuUuqKTCykALN4R9heBJZf2IFp3obGSURfAwI95CHBz6nr8c42A7S');
define('LOGGED_IN_SALT',   'vHurQAimf9wTskVkOMLTOnQgMl1VXDEEwMW654xpNZDjmSe5hFOUk2jqxred5Eo3');
define('NONCE_SALT',       'a6wGdROlq5SLO0gm0YzjXziwTs8l0qW6JNUW6iuWx8TwJvhgkLgODz08CPexEY1a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
