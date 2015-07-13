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
define('DB_NAME', 'dbwordpress');

/** MySQL database username */
define('DB_USER', 'cbgraphicsadmin');

/** MySQL database password */
define('DB_PASSWORD', 'mynewBOSSwebsite1!');

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
define('AUTH_KEY',         'e=$s=;f:#>JY!fX4pDWu.lCyqHX[Eo T(SR{D3iW!qE@?+CJA7<#aY-U:3y,4X6M');
define('SECURE_AUTH_KEY',  'FH|ei,AEax|LwpS,0oxC5-v!M0KN-D]<KhXbb#5Fc=[+`XH-.~ptqryN9tqdmQXe');
define('LOGGED_IN_KEY',    '8|F3J9_5FG(BJ*[I-sNr1]4f2HAFD >9g,9A;^ur+!WO`uP%C%->yNYFuaM3 EVw');
define('NONCE_KEY',        '>n6;9+l,uN/E:?908F=41}KCahfR/*Ct0QB|;?,feKnO~xRT*;NG~`Q67_*&UFsc');
define('AUTH_SALT',        'X]Kg5V{kqBt0LaGh&L#LT[A8`OZ+M90X7,E)bh@/3Lk`|,8f>QA96U&Ltv%,DM=C');
define('SECURE_AUTH_SALT', '8*^UaYbk*>lD~6OWR7b<W8 )URxDQ+mJXI5I0;[Ljqi`mv6%GWKE6Fzmh-K> !G7');
define('LOGGED_IN_SALT',   'Ok3ZqJ&SV?V!SA6m2J8*n9|`$?2HAn:4&|t.,Ddg|qx7H:fo!g:anGbPB+)RAAwn');
define('NONCE_SALT',       '>.4Ed<53|]G9CSTs+QZV2q&kZ8sD9|!~6b64s[tp9Kk)!{5lb>pN4 O0m#kTW|mq');

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
if ( !defined('ABSPATH') ) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

define ('CONCATENATE SCRIPTS',false);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/*trying to get the admin to display correctly*/

