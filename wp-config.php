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
define('DB_NAME', 'wor50');

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

define ( 'WP_AUTO_UPDATE_CORE', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q&>(%x#VewBxxFAf,cv.h)3l(kY_eFN<ZxQ%`T%i-cP&||vfR|UYhrlr1 |HMc8g');
define('SECURE_AUTH_KEY',  'WL/x_~#x;MroVc)#Vy+k3>>1)h]baBVUtcc=1dqtW)t.7L/5__7yWtJ+)3`)i<kV');
define('LOGGED_IN_KEY',    'H832q;vq{/v&mj~U4xn/M 482#,1`+zn<Mp@Vz9yvJm-a>1KY:@3;)3j~s%851{v');
define('NONCE_KEY',        '9gM!& O;OkES;$)$?[op#HJ2f)+K2;O2Gq!PgIZEJ<3Y=Z5tC6b5(mbkR.]E:zd>');
define('AUTH_SALT',        'kAFO6^.YC@|ap3q^}4H,oh/ILkQjR7&|hLuu~fi5oDGO/2ZC1UD6g<>-pH(uubGy');
define('SECURE_AUTH_SALT', 's|m!|he@CNPN~j2v33*OGn=_#9ehw@8)hC!c^y5`xRUs65J<O 162u^}5I!V0AmT');
define('LOGGED_IN_SALT',   ')NY_WPWmBcRGs5TD;lp<5$pD0:68,<}vCj!l4`HpJ9h=B| :*f~9Sf:u^AoS5$ R');
define('NONCE_SALT',       'lkL|ZB(w[.sMU)_sfw-oVAnnSGsUII<3N%B+ksNOV?=)xB> lmgO2 V>B7sUdzvD');

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
