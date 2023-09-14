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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'sx5.j<ShQq.oc{>IG3c5Y-h0EweiDVh-vR+|3u.A%aEy-=6G)E0WLymH>3|H_Sy2' );
define( 'SECURE_AUTH_KEY',  '[hpEocgPHC_xy9j$H933{!p.)fSDa.p,TdA|%xe((ry3;^]hIPX)}n&*sQr&AaHt' );
define( 'LOGGED_IN_KEY',    'Q^hHu/sWXdX>[^jum-A55HXz{<ZmD9}#gLsXoDrPaB?Q/HQ926EO92@z0%J}pE_4' );
define( 'NONCE_KEY',        'nGXJ<LZXp#Zc&0> tN0ueoS]sIs@5[k`!y/:>C}YW+ccsWIxP7s77cTWQ3~f>bT1' );
define( 'AUTH_SALT',        '<nDFDrSfqW0(41y<O{*Wp!(K1aduG0d]F=3I:6qK/f6lE[&uqD3&,Wl<AaI&iZ0e' );
define( 'SECURE_AUTH_SALT', 'RZn3Cvj6RxaV?VVZ_h|mEd+=]fdTZq}um?ycE-4T}|Cvz<naD@gFd3yP{[,o^BP8' );
define( 'LOGGED_IN_SALT',   'I;dxY4Hiwa_d;#QTw?p(&Bb;u,0fI[(DhFk8.@e{FzK9*P.SE/NmaW[zikWu4(a`' );
define( 'NONCE_SALT',       '>q68ZUsZytb$>zOs7A5a-%n_@c~m5|d[$g=Tg)Y3k:WI9-GO2Gd.Jrnte*?Rk[:z' );

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
