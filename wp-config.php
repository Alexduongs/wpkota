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
define( 'DB_NAME', 'wp_uppgift' );

/** MySQL database username */
define( 'DB_USER', 'alexduong' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dinmamma' );

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
define( 'AUTH_KEY',         '##vy6s~AaMigl+)u%R{jU)G?=xQ-Q u+9y&ee!3lc!2kWNrmv]2[-;lo]=EXaO0j' );
define( 'SECURE_AUTH_KEY',  'cB 0<0r+o<{xLg >yn )DV<vd5 |#2Pp2}zGOkM:HYKv?^c+TuoD^6)r4E@G9dx#' );
define( 'LOGGED_IN_KEY',    'QMsw=o[4|:Zy7Qo)$cw0-~dx0;B{Wn;|6N8,BjIw>lcf1,]Yp<noOv/qCKKzbe&|' );
define( 'NONCE_KEY',        'b-x.s=WU;=c55S9jwG{A{y>n,gYmTn@xmTdVG`~~zQ,-uzFg`,rKut#52`[9I ;O' );
define( 'AUTH_SALT',        '4itm{xXcc7v!+xHKWn<w8SPAnBRyKrd@mN{&&-$e3FprMq^`Dt. p`WG5IyB-r ^' );
define( 'SECURE_AUTH_SALT', '6TLmj$bjGJ-f7j`UAd%O2kcnDZ6GKx&kqAuA5WvZNHaJmY,J)w9#+&wsb=|!:[2Q' );
define( 'LOGGED_IN_SALT',   '1~]^QR|I6L771?&Upu4lMq;8WTYGh,<&)=T~b*{o,|D$}6~[_~6Q8[]:B3TC8K$k' );
define( 'NONCE_SALT',       '/[?w@n}{M!@)!;h}7:4MYWCW)r( g|&q!eDz>{k-OTQA=65m43#h%Y9l}7p:K^{.' );

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
