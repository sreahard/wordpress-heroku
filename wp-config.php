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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'g@}2lqx)3;POIWAqy41=[[R4ADald%T;<;y|@_H9%ge)._33>$OeW+2-NewVbI[D');
define('SECURE_AUTH_KEY',  '8F_[Se/_;iwg3-zr:Oy:>%M.i[x&uz[Z51$*+/}@7 $3XcuCQjyo=e9,0:e6VK=%');
define('LOGGED_IN_KEY',    '!CQPla n^]1U3<b^|V}_Bny-n/qGPaTVHI~h|TH|0-~54 6:!@az>_2qa,wwy,?i');
define('NONCE_KEY',        'k8SD7_OJgh!.lWS%n9BU:j?(op-.td^i2ML;fq/}YqchQis-$LmBV>2~{4hSw|/ ');
define('AUTH_SALT',        'US.+iD4<d%J@{}6z9=8EeAG}tED6y|jz(;G_C_(QH6PF`7F-Mu;EiRKWZAi0@eN-');
define('SECURE_AUTH_SALT', '- 7Q}p f5Co1Hf,z00,WI/So[2D]fge4/T8COcj<^e9 U6KJz3WsTDC]STQ{d Y,');
define('LOGGED_IN_SALT',   'kjfzp>J@yg&-h--RhRUeFf%U$GJD7+R*6[GP.?.|>koCkJ]99jmu{:OQll HnDeC');
define('NONCE_SALT',       '3YwgKvm.Uct%c;Y861g84ra@P]=haeh[+p:hz-},4QQ|&w c^3+~uV|!kE{!@VDl');

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
