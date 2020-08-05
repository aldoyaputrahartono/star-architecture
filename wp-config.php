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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xp#h2X]ls) o4gli5b{%?SUfH0v-&ewE_WcHpq!zM63`+e/-Wt0CjHZwP)jB^RF+' );
define( 'SECURE_AUTH_KEY',  'r2Er`jlqZK([:[cs+~Rx x.~]4 1ISTkcD9x;U6<l=2w^J(gr SP~ pvH7lBk~)}' );
define( 'LOGGED_IN_KEY',    'Z9B0G$D,`aX%=X/~xX#O[t/T>%Mv0v)/h9Zu{hD)0b_tW:[,4f}I}9<b HU]+Ki!' );
define( 'NONCE_KEY',        's<QA]z{{QHKW[PCl<a(=jNwtS|}BV{*]j80?^#iE3v>IW.(%.Lj5wQ*,z(NSvrmW' );
define( 'AUTH_SALT',        '&rGR?|=nH4XJNi;a!*d8Cx?z4XW)#UF#yF9b6P<%_E-:mJ+]MEp[]ave5Z_8ZO^Y' );
define( 'SECURE_AUTH_SALT', 'z){[bC3fF%n;`Sd1Heihy0<_P&(3a:Xtb*ob2jf nrz$im@x}O%2{>:=3BFd)deX' );
define( 'LOGGED_IN_SALT',   'VCf=qwCLjr_zAv5tOg<Z/>X+{REv`(,n(LjRm(90glSKs7S5phf .9UpGq0{^6[}' );
define( 'NONCE_SALT',       '~u19Z+lvo5>|x(?/z|!q2Bbdb+Yi)VAY~6B4@~*Hd 5Je]5G~(<gWz|RdVymn2{Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
