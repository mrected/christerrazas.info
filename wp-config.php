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
define('DB_NAME', 'christerrazas_wpdb');

/** MySQL database username */
define('DB_USER', 'mrected1008');

/** MySQL database password */
define('DB_PASSWORD', 'JL1Vyc64zhEScyWG');

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
define('AUTH_KEY',         'wMWdzG%+@{MPK%_T1:eDn6k:gEu<1G*|:~?G#&O2qGf~o+%*qiR)l^Ps&FX/ H`X');
define('SECURE_AUTH_KEY',  'guL#cqm],<[bw2`a{q{9-^I.G1L,7e7 E[/lQZ528v~A-l%xnwC^=1ldI=^Uk-Ny');
define('LOGGED_IN_KEY',    '=h8{:;Q+#K9]!SUb*P`|pP):NwF?i/hXmrn)T&K$xQYdEk,rzmyCY5abm$DD,b8w');
define('NONCE_KEY',        '{4?mY/ut*ZJ,ew-w@/jW!go:e#$p+:KWAw.^s0B#}=R-,X2h:iJ+@UmGRk$!j+;,');
define('AUTH_SALT',        '#M`<u:es*5}T&vL^UEH~&s$>;lE[mIF}FoEzxUgr>}D70S2wOy!&|4yX(5<^y^aw');
define('SECURE_AUTH_SALT', 'qUNAVcOl=q-__!Bfd*iUnZiKQ5FZ?HfT<rq3{]-~&1m:e}$jog|Qd>yqC#= l@I4');
define('LOGGED_IN_SALT',   'g[iFbMiMXN&c/wFc=a$&XCx$f#=DdZu)A IbB!`{~zah2i64H=D:*I:!{pZaw4l^');
define('NONCE_SALT',       'H<.>NWY,y;P)g0Zba?3Gd UxX7XRq&ID0.QMUwPUE$ho78yzDeKd#0u`^@x1Y6gf');

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
