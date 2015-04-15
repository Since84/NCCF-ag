<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nccf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'galaxy1');

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
define('AUTH_KEY',         'My//Zd@$8< ,-+R(6u+2.cdz4s+0;|U[.sL5?K~`L~zsZ-nP)f<</|tF$S0;v}/9');
define('SECURE_AUTH_KEY',  '%&e[U+gMK9:|_G>D!UM%[VM#J`]Fe!Y3},1WRWI}>Q% OeQ-|j-j!}rzkBzBAs]L');
define('LOGGED_IN_KEY',    'Pa95xN>+d.||>k+[.I}UvS@6Qyr/)*Ev)ON}Zk0+IqUkApkOQP/Y,?2Fyh-F7=#^');
define('NONCE_KEY',        '-Au!&{ he|@m{QVqw+i{BvXY6]z+:<X,VcXMLu$|ny(~fKoYIExZB@[9rMN8Qy@]');
define('AUTH_SALT',        'M$b>V-kObLzoS{4GE6.S5^H, d;gL|#-8Vh9{8F|d_sZs%iE*sj +R~%uUR&setC');
define('SECURE_AUTH_SALT', 'B(!1n!m2D,}UC|.&CV[E~G5ocrG3zl:hJm7Oe3|oO<Owd{PU>Q21B+gtng5?<:}2');
define('LOGGED_IN_SALT',   '#9komx&}wKWpcgxs5Co2aJEojfuA? L7 YrB*qF^,:HdTUsf9j;TjFJ Z6O$iFYi');
define('NONCE_SALT',       'mHb$IF<n=2yD,E^/7gC:*[3o$ImpEZV.KY+KySKq,5NE~YrIz5V^1lJ!H+`q<[yk');

/**#@-*/

/** Move Wp-Content Folder **/
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', '/wp-content' );

/** FS METHOD **/
define( 'FS_METHOD', 'direct' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
