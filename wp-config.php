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
define('DB_NAME', 'cpd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'z||&0L]zib|jUVdi8TGLxK7RL`RGkVqE7R-jXP3Pv3h1X-]2lvsOige$IW,?Ep]U');
define('SECURE_AUTH_KEY',  '/t?vKX+bkgy?kTcbjIoiCzr2NOb=[(p4,Na;;X@L<<x{W QsE5$A.g|P|^ds;~kx');
define('LOGGED_IN_KEY',    '`)S#)h2~0@$g>RS7KZch!_*YU2}]vXHO*l`if;=R`DnqIJ|Wxt$,=3;naXzpPF9a');
define('NONCE_KEY',        'GnqJHrFP/fCS2Wi -DmD.;26Ulz4sJ4}~Az+x1!bsf%j JjQ3`.& MPWYuL!%MKl');
define('AUTH_SALT',        'Czq_XU<a~Zm=B_mMa8(<)N$P)!gcfQ;A-j9?.*gQRo3Sav!Cy4Mo$n5 DxieakFW');
define('SECURE_AUTH_SALT', 's}2kk#4JKNBd2vL3j*Luu0`&Ec/>O:2sr~D,>r|Nm^CI*2)}WA}u]6tno;bS.<]e');
define('LOGGED_IN_SALT',   '`}Mx|`Xy(m~I50Hut]*L!9@79 7,~FqB:u70Jed*(1Oq6!N([IaR(.k*Te]|H4s8');
define('NONCE_SALT',       'RDpjm5gmgTmc,A`<Dm7Q42FQ;ENXe9oD/D@i?Rg$TRf$e]WeVw+_E$sff7C#%s/z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cpd_';

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
