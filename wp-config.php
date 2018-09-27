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
define('DB_NAME', 'eoi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'j[mq`7PfsFk0^S.LGPa1+U >-+<q12P+78;1DWz#yBmhSHj~z!1->[V8>wQloU./');
define('SECURE_AUTH_KEY',  'hjrFjWk]~N5jCV3-j9g/}ufO;Vi$=LC/GA!F[{0PlT!Z/#rN4S`I]yY{1FDES/3 ');
define('LOGGED_IN_KEY',    '|IDI$/m^j%{<5[;9zutL,W5ST-K &3=9eJBNSl0a nKbc;+R8z7g4REH8YLwV2|y');
define('NONCE_KEY',        'T|@mix3gyrU{ 2Hx0UA:Faq_D-m{VVQ2No8O%%L}if9K(/W_h@eGjm(h4TjO[S-d');
define('AUTH_SALT',        '9I[R8T:AHa^P=Rc967c=bPW3T8)Xy*qGTG6R}6LM5fD0nonJQhB<,ynxyTN,rNmR');
define('SECURE_AUTH_SALT', '8l{YZ}{+DdCAT1W.{F!ztdSWm. HC)5B_Wln,]s|,Bf96osD5a),6C78]!Lcjm3C');
define('LOGGED_IN_SALT',   'sg|H5UsRO2/!@bK=^v>Wl^Y iu9<?XItp5]S^3,b:U:/NuJjxiSv;6!_DNOgHVFT');
define('NONCE_SALT',       ']v@|.`CAj&;qaH3uAA/}DV0$/s(80NNt;&LOOIA45`M3u2H H`-m#?0bq5eFD%j2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
