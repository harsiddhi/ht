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
define('DB_NAME', 'apt_tech');

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
define('AUTH_KEY',         '(1C1M#xC@OHnFq}NkkZ?KMiUB6-_wv8pgVjNjbUV3C+wEA);jMkKBOTSuDdvWtCp');
define('SECURE_AUTH_KEY',  '2.=vE^@idx=><@?H~R}Pw#?Wa]R 70{!r&u<snwtupjhgFRnyuKUrW4dmF~+2O<j');
define('LOGGED_IN_KEY',    'y}>H}ZjYs]9k6IcMQy`?Fe!VM`X9DoR)vHRdeY8Ix~*V)j}&#{1RU$mT|.IA8IIT');
define('NONCE_KEY',        '=6Mz|f^XzA`GHV,f:,5N>sEv+gs$ T)]PQWVVqzlX]7nR-#ral-S[Tko5PgN#PC[');
define('AUTH_SALT',        'giZ}823 Sw_Qrt1|~n/y*eM`rQO6IW4[`#&X/BZN3.;[kA~[.eFjHL^c?tR<}aXG');
define('SECURE_AUTH_SALT', '+[.+(qX4~%ZaGy!I`S1}@_UEYM3heS|5/B>cg/_}j}%o:~WqcloC5te}DYJSJ6)Y');
define('LOGGED_IN_SALT',   '&NrDOxPYRrW%HW2>O<avx=wX*l%*@:}m)NJ+)<{)He* MB5]`MMw[fw(p-&4g|kN');
define('NONCE_SALT',       'vbuxKQjLGnEi|-TBpLZ9;x7OORfG6&#9Ukq8q.9!qgi1I$^}Bt{ugYE~;xnfs1um');

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
