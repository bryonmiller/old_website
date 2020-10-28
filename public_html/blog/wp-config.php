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
define('DB_NAME', 'cl42-a-wordp-e40');

/** MySQL database username */
define('DB_USER', 'cl42-a-wordp-e40');

/** MySQL database password */
define('DB_PASSWORD', '(BKf0r3v3r!)');

/** MySQL hostname */
define('DB_HOST', 'shareddb1a.hosting.stackcp.net');

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
define('AUTH_KEY',         'B-K]gMY*VN@dF+}6J]&U$hbdW+ywUm#98[^ejI?F-]W+eE;E5;.*c^}UZP<j!-/N');
define('SECURE_AUTH_KEY',  '@x V8yJQ$aX<e#mS!?LgYM@5Lc36B}/h)SxuWU#hijRc)6a1bN.Cjy5]z699O]ho');
define('LOGGED_IN_KEY',    'f8Q5z2@)|tl*&y12:njI-7w ReC5f^Ul)-S@=m9tAYC QPpn(X@Yc`@a[~_R>[Vb');
define('NONCE_KEY',        'jkyiLvQ1ZBcGb4/~qpfvl$gaJR5eCfWy`+h`nMBRYA+X3E!l[yDYtnBP2t4w{*>S');
define('AUTH_SALT',        'eJ,: a_JEN=ER&q}Y;~hVdyx?Atf|02ShJI|28McBF~XWQL&]~Z!--b-6uZ$W&}|');
define('SECURE_AUTH_SALT', 'cNI{gTe(Z@z5i`vor^qw;(X;%eUG+l<* Z|ugS^`R$B8U@bP&JC::*J|27_mOKn3');
define('LOGGED_IN_SALT',   'LFO_@A}]|9<Mm9oLU`RYQ3.se`wEO;Q@|,tj}Q+;V=ru*n+9]3DZ;z<`E<@+]0^C');
define('NONCE_SALT',       '8w.%8-*jpG{LtV6v!+=]5^IO@3;*9H^_*6H1Sf{|s_`&:GHvf*|J;`d#_W4Al14.');

/**#@-*/

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
