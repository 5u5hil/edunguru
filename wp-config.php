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
define('DB_NAME', 'edunguru');

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
define('AUTH_KEY',         ' mlq*qJN+}&v.@ a5qX@T4X&9]H4|xWt?y!#we:D}`?4JCX#418f)%DH.yNUy.Xe');
define('SECURE_AUTH_KEY',  ']j2?MJ7n.l;+.<n(E@WXE:[iNCSMe9iH(Y?+ecITEx@s-_oYO]OWViN:-cz#L?u`');
define('LOGGED_IN_KEY',    'su){lpkf+LB>^p,&b.X*;b-F:>A[8DGd{GnzF/R^s.i4<qDkV~wh $$=J+]0q6:X');
define('NONCE_KEY',        'F}mt}eFEAf!6[@S{fkmP^C)N9)TMXtUiTvlg:,y>,f`)vzs452XD%9@9I9p|Zd?I');
define('AUTH_SALT',        'e2r$}W6D8&~^;< XJ~>PwGP1T[&y{Cq`8RDL!0+ku|<ke%0jg#g5]@DW}rqQY;K/');
define('SECURE_AUTH_SALT', 'ZbGmG4dIq:aS/A{6(LO84(3oBRQJHq7zV+0s.G}RxL)g/OqBMz+r*xAbK*hw1S$p');
define('LOGGED_IN_SALT',   'rKxpTS9kCi7~,fe*H<m:Y=;e?(?|HI,D,yUy]m]Ye3#AKPN(wP7L^3*qX@;G~)VC');
define('NONCE_SALT',       'd3?:c-,Zz$)n7Epc(]DE/TKZa/*hAv~UlRav!4_oLmKC;n,L.8I_55%vp+r@sc[R');

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
