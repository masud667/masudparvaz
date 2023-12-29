<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'masudparvaz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't+h0V} |?2+pCgT9e~[6X4qGv{hL eJRRlqNdKMd `[n5`y}aE?cDU0OcFK4eEvn' );
define( 'SECURE_AUTH_KEY',  'OKo|C0t?v= )5)Y,`3]66D#M@y0OTBPSIEX@[U-kbWa+IZKcr7Oe?trcROk6H|uZ' );
define( 'LOGGED_IN_KEY',    '4R5D]uL,>ru)h}gd9-pBG,&P(J#{Q^3F^<nO(t?P}~a|<Je(5p +&a32D6]&!nOs' );
define( 'NONCE_KEY',        '-.`lyJ-xz[!shR>gB2(1-lg[!r8V8`<dM1ly}5!f6+wt1WgTB0x+AUw@0@T6mX-y' );
define( 'AUTH_SALT',        ' @z1IzY8-%Fz%oX%K/ykO~6NP`{KGZqPs!-YbS|8Mk^#4qI/vw94K8Jq)g Rr07:' );
define( 'SECURE_AUTH_SALT', 'kl KIl)mY@aVVsRf`Jk2%;z{Ou`7@CcAtcQh@N7z8,dIJO|pwP5p1Hk|g>L6^0&I' );
define( 'LOGGED_IN_SALT',   'Z0thl_W?d{&&VCeV$^9-Ll`,mD%8117qZ p>Yr@GfH)hQ=<_eHXRw-Lug>j|jET|' );
define( 'NONCE_SALT',       ',uIrYQUY$r$p&SK6<x/N_Mw6g*3@_gUH]O~Q,$cs.c[B9Cr]dhJ$R8KwGuY5T;U|' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
