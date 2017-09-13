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
define('DB_NAME', 'giaydantuong');

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
define('AUTH_KEY',         '5Frt0}@+L&F-j&G^>?<+S[9-63e>u.];m7cCRTxIqW+EPYCam6YdwKw<1Y5l%(F=');
define('SECURE_AUTH_KEY',  '=gias1fH_/D8_g`=#emYU/S~Zy3[P_gslnv2+V(VEIf(j 1Q`1t^&)iwH.<;+n%$');
define('LOGGED_IN_KEY',    '5BpDWJD^  7mH(!UDh%gzrnWYBS25*>B%&4|uc2]>qW&-MpVvPg;4QX0+dkbG7zr');
define('NONCE_KEY',        'CFE%VJD0a d`NOs*c*$_;q,8803!QLV`C1f4 53J$2q/gSuh-xC#]m1sy.y-4;]t');
define('AUTH_SALT',        '1;U}<gx^Ev958[*vLUIIdC>vf6GPcM5}#2i]o{`D^LRb:hd.uijoq[U6`M,bh0h2');
define('SECURE_AUTH_SALT', 'cnTet|YCx5G8$c^HuNK#H}(r76*%Iy40}:4?Cv(*Q8)`d!(#+aiq,Ln)>#>)CJ&r');
define('LOGGED_IN_SALT',   'HL2F,5maWk3]CQL?]mV&EDS6r>g/5>R0?`E!!3Ow[t$qN/Choh,O2goq61d(F1Xw');
define('NONCE_SALT',       '#fMY~ FMvi;.8]DT;y 3fYIJi<$(NBKrX;|=N7p7qK[B>i=*Y>ddhRl3IAvJyUH)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gdt_';

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
