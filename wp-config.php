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
define('DB_NAME', 'prusscom');

/** MySQL database username */
define('DB_USER', 'prusscom');

/** MySQL database password */
define('DB_PASSWORD', 'bdr64!DTola');

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
define('AUTH_KEY',         'OK_o@38BQQaXm@W0;mr0bh^_hX(#]MqSwi`4@t;~4k-kpYZOejc#vq~D:1$ZJZ#:');
define('SECURE_AUTH_KEY',  '&&d/m_U46naJO:Qv)&<c5J+RwWj8C2<`*+`X55lzL wvYcN/hSeSu:uGk&hN0us7');
define('LOGGED_IN_KEY',    '0s_]B9DWqht(&-$6~9KQp(?{K^dk!.C]`>(d/U,%5$p1`+(*`?|ty.-}wcAtx1x ');
define('NONCE_KEY',        'BFy1bQx9p!E<R]<Z3ZqVLaSTr6h1?Y` t_BCz]1D`4Ibe_oziLNw4u04g)w*G,5#');
define('AUTH_SALT',        'B&-#9-PqMnhx!HLQ!t:XoLA=QPw)ZFn-qFws:,Wn+aksbNb[eu+Jln}Dew._m2M#');
define('SECURE_AUTH_SALT', '?JiLGf;vN8J<]ZBEyMD.,@%fTyUa|@8mnmJlc5B@?+34![)x/*C.J&[^rf$5Q3g^');
define('LOGGED_IN_SALT',   'OF`3BdE/8rYnyypL`9Jv>vad>^z|GnXtFms:WA9{E_z.17}o4<(_>>TK!xa?{#$e');
define('NONCE_SALT',       'ij98f613 Bz1w{*L7MDu6i*7Mc)WTs +gzBDFH#A&~`CoC)hsZLt^};C%h#noPx!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'com_';

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
