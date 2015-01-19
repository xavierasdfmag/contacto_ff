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
define('DB_NAME', 'contacto_ff');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a2fN5VQ0rr');

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
define('AUTH_KEY',         'hf]`-F#Hds(-IjC1GH;W=}y-T7FMzh+X:7OD/,%&^p2|]Hm#DOrOCXy86X%X~hw[');
define('SECURE_AUTH_KEY',  '&SNFLC=Hw WB3XsJPXj5 N~8Au`C?GF<X]U+Z-I+<sR4K*oH]0]7H-+@n{[]`!aj');
define('LOGGED_IN_KEY',    'ryuU.Ia*v?4~bYyM0j%*GRFU0MQ3,6TCmKA@1r/z^G?U_qbI%MzbjiTRq0f)``|G');
define('NONCE_KEY',        '5ZxRFB$_n`!annrI.:Np)@stgL5t6A-c0P5dMWBn^@)UeY/k}wjzlTpA$XC?>1FC');
define('AUTH_SALT',        '11#wkJt.HfqpP9/Iq3x=}{E/#i@+ia?eWRO]v|LPf+a7|~eh@Y@)3pXfu{q0^DU9');
define('SECURE_AUTH_SALT', '|9Rq1+Cw|IHKT`=-qWpf<%zAe{![iuRmV{l(,QGz|?a|k]Fgg-:O-#<zpDHGK.S2');
define('LOGGED_IN_SALT',   'd*29#b%k,wOuC6JT_&{&$|yn;bJ])%w+ER#`*]@v6ind)n%-ymuygCcC.ExQex%y');
define('NONCE_SALT',       'eB|gziy-N|S5$rB5CA.QKf_-1q,yQX?:fiT}T4w~Xkm.hPsq%?GS^@?52)$0h_;v');

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

