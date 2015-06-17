<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'dog_massage');

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
define('AUTH_KEY',         '9FcAo23XYKA]8@(M^-P!p4WR?Q!?[-4.5R##pIe?0(Ez!QB^SOXVy^+/4C!|}=}P');
define('SECURE_AUTH_KEY',  'q|V|Cp23+-@-vxVxoxr<Ze6&sgI0juQ&e[vTkgQJ|i|4jQfW14XT_q|-)AXdNn+L');
define('LOGGED_IN_KEY',    '-jQ}37n{V^}|vub`X@h%p_b%{xGY=vC]n`l0Mh.U[gGq!FI-U_ps)-H_Mw$q|,_?');
define('NONCE_KEY',        '=iox`P9r5>33!K!v[!|^iPFae,Q}Y:i-4Npp--7(0 GV~-$|fU3g6W{{SXe<J@5x');
define('AUTH_SALT',        ' AZEE/hZq$:-r?&6#/^B|sOn+N}-%!=f,Gr?1X+1XA0lBH@+xQO!a - BIj{aQ)T');
define('SECURE_AUTH_SALT', '8B<ko-JP9ZzM:=/~33;[}4fC;oVraip@#OqL +(|Z]y:9FlKwpxB*pp@MX^xG0)x');
define('LOGGED_IN_SALT',   '+9l?*cII|XW?8?uVoh-xmdkXLRx2Yuj8giAe7U{LhqSAw;9tu|{Cy5EdJCi-#EA5');
define('NONCE_SALT',       '6+v-3M(4xe.lCB.Kj2b>*,4vDr:$FDgCd M;?tQ9vy*.`B%J6u(dW3nHXYq_]>03');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pw_';

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
