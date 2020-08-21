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
define( 'AUTH_KEY',         'U;bGuqB%}x;bDgd(KxBzf!XEPn>Ba!q8qnGHH7IKBuEGKg)q3<k)it4dXbvX9}3x' );
define( 'SECURE_AUTH_KEY',  '83GsEqf7gU~j GL$+=6w6^s.LY|ul9uDpF}>D:x)9vK<etRTtquybYL0Ti5[S&bL' );
define( 'LOGGED_IN_KEY',    'Jfl1ObNall2=x3>ONmG[l70zspeRW9Yw`~vT(,CP(Ct@h7L$.fB/m>A?462Cr]98' );
define( 'NONCE_KEY',        'Z+t4[,jrE}!@LdPppP`97GJ!Q]/Z9R$PE1r)Vq8}D$MGgJx`l%Xn?jwszp_r0hLq' );
define( 'AUTH_SALT',        'ia%$RKH]i#vHt>R[!<rRol&6gAo~~ckCd*wuLqva%QfD9Tyi012m[X#h`c|B_~kS' );
define( 'SECURE_AUTH_SALT', 'AM7L5DEnl[gQN}#{_Zbn1[`1&ta<f8+K,F*Xx@@VtXi0}@UPlNH=56J0SP;(MTzl' );
define( 'LOGGED_IN_SALT',   '^#Ss9V%=<2^}}#mDG7}Eqg%bOkLj+=i9+Q>|/D=RBPg.XIomhZd@mLgPpcbYzVK.' );
define( 'NONCE_SALT',       'UKwR5i+ybWe$W6Mh7m&<?R!_op.]S.j~%6*3Z(LTkE`Jp8|Mc2Z=!yRQyZi%.[(V' );

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
