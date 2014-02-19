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
define('DB_NAME', 'jeffwesson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Y$=O21MJaf{-=<X?Q|7u:-_R$44t?GlZfZ~C.3C<id$.Yp:2huW9X0^)-t$4_S}}');
define('SECURE_AUTH_KEY',  '<ESVecE@((JF}Y~+y<DD6gc~iDSG@ptJxg],h+AE0I;3fmQIC%L>(nKtv76$b+-y');
define('LOGGED_IN_KEY',    '7JRvK0M|38Q21Pe`94ak4mnvVh8z9#]!Ncm[u zsPM1o>ot-m7HjroJ:r@zvN`mN');
define('NONCE_KEY',        'j^LW|!F{1&<7yO own)N(w_&l=q6KTUWY%zmJcaId!/a}-2@:d&n/+6pOPaUC<6g');
define('AUTH_SALT',        '9vlW#4pWMq5(KT3$XS:#C.XNN]R1?&}sh:@7#B2AHr!.<w}KIyngm<(_n++KAjv3');
define('SECURE_AUTH_SALT', '2xdaG iy^J)+KSj>=|1+b8xi%+Mb9||v?b_| K6w0t@54KS5(yK5c#E+18[TyfIu');
define('LOGGED_IN_SALT',   'ofE@$LD_u25*jRB8WS:;YVJ6|t=+)-Ry1K_VbE-8[8`jEOHh`2-vmA39r<h_dfMX');
define('NONCE_SALT',       '_n%eY*8`<~oK>QRT~d*r9Dd0,,=b{k6>|^L_bwT0@1ZgM|?LaF?s`wBesv3pmNAq');

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
