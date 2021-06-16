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
define( 'DB_NAME', 'beltranecom' );

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
define( 'AUTH_KEY',         'coJURugEtr wSJ?Qq&36gisGpcy;T$>%u:_kD*<h$$UT9q4?b*tE,w5hW~9mDB0p' );
define( 'SECURE_AUTH_KEY',  ':#=;yZHi.2Oc46+~5 bQ|4R7!}|vI|?gC3v |681)Bwqi1eZF2?F_mAD:>IimA<o' );
define( 'LOGGED_IN_KEY',    '.S(Si3-McnDim]kOmzkla9!`PrC0[mUX, nJd[l21avbXito[$/-A|rE!/?OU`W7' );
define( 'NONCE_KEY',        '^({1_Hjdb#qvPKz6;`k$AC2(;/f8v?[xX6aR_X!LwFw%6*2{|[5cT2K;;aU)?>pV' );
define( 'AUTH_SALT',        'Aw^W={Q<nVZig=-#XG3J;4|Vkgf/dg@HWm}ZaUh%?2axYT6jrM}$.BEknfJq8]!x' );
define( 'SECURE_AUTH_SALT', 'Jj`ig+6OCoS+ -EWjVE=&1wPU9,lUtepHwVT!]+r;7PNH0p,<@{{}Q~#v1g##X6^' );
define( 'LOGGED_IN_SALT',   'aFu,r;$$@#z=:wK|&K3ZEnu@fQX[-#$ZV/_g43C=5gd,Fa{N3XcUyKXrg#JXIGae' );
define( 'NONCE_SALT',       '@/=6sIEmP2j[7wL[~*@edOX$Vq7wn=[2L8r[E;7&1L]h%k&$3tWt+JE(O#<$Fkbh' );

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
