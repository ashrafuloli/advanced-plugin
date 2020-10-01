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
define( 'DB_NAME', 'advance-plugin' );

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
define( 'AUTH_KEY',         'uYz:526G8C6o}[VX0$PBDV=jH;oj0|PO_{20bjhQxx#p/AYT-cFTA?BDTC^4fCu4' );
define( 'SECURE_AUTH_KEY',  '[B?yO{NSvTK+S:?wwKayWI|`SJ3`{SXVT2G39&RgQK#Z^nDV|/f6J261[__Vj6xB' );
define( 'LOGGED_IN_KEY',    'zD:}3_],-|:fmrKGB*K[-gF!}OmRw|KNDyg_@Ew,oK-K~jzoAwyWzkX(L&*o{&I1' );
define( 'NONCE_KEY',        '*T; oLdpng~r.Z,LuHz$maM%=?1(VI.a~3)tNYl9k[8(y0|j0I7tzLz(bc:YQYb ' );
define( 'AUTH_SALT',        '&^SNQBA2I]*]:jpi%)2byh(gFaEni?#qAvVU=-mp4a{Ru0-ho0N:NKs^ 5P$SF:j' );
define( 'SECURE_AUTH_SALT', 'UpBa_X^^T`?<Xf^bMg7m<DxaPJN>,TgaTdpi<}3Sc.y}=aR@em`$,sryQtDT%mKZ' );
define( 'LOGGED_IN_SALT',   'De(r.*6ho+~kj1%,W}lQa KE%LMF8kX56?ekPBl+AI2UmzhQKE%r5N{e]1Mb}o<B' );
define( 'NONCE_SALT',       '#)rI;. !,f@r0!]nQ0-,A{H0MQ0M3}6N<_CkVmfdKW?#pT*nHUgJ3K1FQ(!iE5u<' );

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
