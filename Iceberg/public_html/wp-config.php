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
define('DB_NAME', 'icebe531_wp');

/** MySQL database username */
define('DB_USER', 'icebe531_dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'iceberg78');

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
define('AUTH_KEY',         'sx|$r%+bLV|GSP-QxqPxc36b2HAQ0a0&mL|riw|jT6>y(`^beE0=X#^Kh-dE)zzn');
define('SECURE_AUTH_KEY',  'S0K&5)fG(3smG3uN;x|jRC+b|8*+b03SXo/jzL6!b%9J..H?)[Wz*lq9xR`CRRnI');
define('LOGGED_IN_KEY',    'g,+2-m`^9Y|B5! 5v0rRQ FF6f{mR|Y+|aJGBmc.c+<ZUay a+K773ZQPNyC1mq@');
define('NONCE_KEY',        '^a7mG1~kFnJO);K8{$f*@=#0S=l-i+i@zERD|HwGIS+84v`X+pwe~fe>m:Pa,a*,');
define('AUTH_SALT',        'JJqu-my_+fRv_I}8:s.OT+^T+R6H,Gr=2kTv7lSRq/#O:2Fy>)661/sWqD{fMtm.');
define('SECURE_AUTH_SALT', 'Nr]|F{J+Xkm2~.wCUF2PpydMjV-]Ss9fBQ8=RZ4YIi(T(,=+G_|-R%x7mVqk @bf');
define('LOGGED_IN_SALT',   '}Vlg7- si?)/{+FPC{UGm0768I[)-4z?zrFa_9kqo+<:+`{8c%T]HU:B(j7*.8_L');
define('NONCE_SALT',       '(-D=$,RK+_h#QF+KrdTDOMDrDl6p`i$7TOZR5c}B3IagB+y <rrO9B%HNndlOK/a');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
