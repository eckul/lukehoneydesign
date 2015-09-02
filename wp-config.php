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
define('DB_NAME', 'lukehoney');

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
define('AUTH_KEY',         'jvY|Nfp!J|#*aDVu|]OJFk$53<%Fv}ck:xSBi~h.bva@|5ov0<!/`K}{6.7YO-Oi');
define('SECURE_AUTH_KEY',  '-(DFgaF7A-]|Z-.WzYib,r&8$+q(Iw3`L-A:Ze;I}A=|XGW_#52^QE@ssd}OK=Ew');
define('LOGGED_IN_KEY',    '>M*8!~-$2Js0|e,h-kwJ?+m_U5wbQuuw<>hwA+<8o9hB[aW!VZK2>@bRdP7>iR)`');
define('NONCE_KEY',        '-<ZI5Q4h!W.#$@H$523k)3[qRr+QQyF]/a+XmrSA.6rlV=7+{+YYX6?L|8*tuJVo');
define('AUTH_SALT',        'wy*yQLt~+F5Y1kNCvr84/6yl5-.c7^pAsl[l4rY:91hL;P--D~MF/89AH;q65e /');
define('SECURE_AUTH_SALT', 'xiX<Vk+jE9YUc2n,6*}QM~e!|0jP7Z;NGIrS23<-OZY2y#zxOre9viz6BtNdmcMC');
define('LOGGED_IN_SALT',   '*- xm=AdYK  3(-0VSa0Z,>5F^+I(s>/>4g4#f-t7wzQ-SD@L|Xg>=#sx~y+aej2');
define('NONCE_SALT',       '~~^ZF$*4S7s%kn5<6-6 ~$Q}e<efBr#!+/Sy9&GC(@P3X*/1j7:+J/ VKkC;8yVr');


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
