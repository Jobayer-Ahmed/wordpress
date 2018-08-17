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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Jobayer29');

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
define('AUTH_KEY',         '`6XW2Ddk*Sg:>VHAm#u8)PxBWc$ek${qGT]#Cx6%w[]+no(hdu<Wh0)7c3;heL;7');
define('SECURE_AUTH_KEY',  '_yzzPlAOPhaAdIYJ5s _gb4u;D*>BGI[o`)~_Tg/#vVJa gE4;B#L}s+Q23#dmfS');
define('LOGGED_IN_KEY',    'l}&y$(6pD?(qDi-9W)[F[W<<a]N4c$mU}kesv!]T:w-AYpF2qn= fH?NWGdi5H}u');
define('NONCE_KEY',        ',,;J05{,J;8zV+:,<!nFIS@0;Ga=F<?%(.&</|j>N@s2SoBeM1fMX->hn0Rqe7|n');
define('AUTH_SALT',        'O3]j>g:e$zcjl.5`?3g(,k%,/mP^Q=yV`Z4sV0-^pBU]badu*H{Si.U3}Z$k]oCL');
define('SECURE_AUTH_SALT', '2^k&ev?:j7!rYkT+8nx>Ju)Rvd;P0YOZY_s6De 28b5N?6US{:$R+LaR9+^9h5Y?');
define('LOGGED_IN_SALT',   '61G-0%n9 +-y7lQ}ATPy6WYW`ae/8]lB=F&zl+[:08ksd8b &L}BWy3@GlSn#T)k');
define('NONCE_SALT',       '|<P+#j=fA_SS@>*5xS1~HPBFYk6e1&y+z_`o=cx#c7Y$z2&Xm*{y@XZ7g4-gHM]|');

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
