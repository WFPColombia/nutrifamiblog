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
define('DB_NAME', 'nutrifami_blog');

/** MySQL database username */
define('DB_USER', 'blog');

/** MySQL database password */
define('DB_PASSWORD', 'nutrifamiBL0G');

/** MySQL hostname */
define('DB_HOST', 'nutrifami.cwy5i3r1f6xk.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'qD[#qu1+oWm @OXg=I-X$y5G?+DD{&fSL=W>u9UXb3/@DCzBzD,j]w,fXAqe$+j]');
define('SECURE_AUTH_KEY',  '}hfP55E/|0=jo>JjGP^AH0~B=S* rkko+{J.RvNCjGd=%}8evA61bWinof.f?=@U');
define('LOGGED_IN_KEY',    '#Wx#O?cIIxo?E7A]z$I0=,1BZ_E@Z,YSeMgq>v{KhTt:b3@8(~d?;~m)c ?}Ya)>');
define('NONCE_KEY',        'f(<UfhagGMSGo><lY8`l8c#?,5BwG_-$KnQ($MdeC_(K^8ovD c?u-pvN9vsriM3');
define('AUTH_SALT',        'Mb,/n-bCX>,U$fjyiKI-6m<10X5ED)gDKGO7u5o[ip+g3E#deIJ0V][R8r$ZaapP');
define('SECURE_AUTH_SALT', 'W%@~mp%H@Co2@Vm{ $=S=;e 5YitC!T8|[vZ @RP`SXp3&LFI~/D*7J 4%<$&YPD');
define('LOGGED_IN_SALT',   'H4$xYUloVq$ah7_}__@.JjY_}T.zD_<hZiM-BU,Yd4FpKYx,gO)WWOB,q&rl;(EY');
define('NONCE_SALT',       'e9k~#Qh]GHU`)lWGDlXO$d}CX}it^@G?Q&I<?$Z0ZB&.<([QEbO|eoCEsc+_<m3^');

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
