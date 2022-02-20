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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'krishworksassignment' );

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
define( 'AUTH_KEY',         'BwjR3;N7BbZDrc6ANh|k<B&YK`w(aVHg1upF%R&F*Jqfm*(<W:h1g)}hEi:h~ebY' );
define( 'SECURE_AUTH_KEY',  '}2p b>inJu,yTb~Z-e1e%#VH~Ys4geCL_W#3ha_r=2){|9&A|a:kL/h$Cj QN:3*' );
define( 'LOGGED_IN_KEY',    '$PO/V- :o+=HuXTaVyY[9lup2~ykfhzGUjkFlu-vun0p?{5S-`JTnf$1/{L<)wV+' );
define( 'NONCE_KEY',        '8?>8.q]@{3LO?.G^|Ue3?xS(dWO0qUD`=O|pX@`Bo|XJ*G=T=ryVen-]$iWM,|9I' );
define( 'AUTH_SALT',        'GCZI8u^RV$1p]sKLR U83$kIc}/@0=6hCm3)?CNPz6+U#9De!UaX FZ>BmoPeZR0' );
define( 'SECURE_AUTH_SALT', 'WJk#+P4oQEx)#o1`^nX/ V<-US($OK!.1H822/?ZiTdC~?T)0v&Byjmn[xCXyX>-' );
define( 'LOGGED_IN_SALT',   'G{S5[8bBjDd@$7:kxuubh! }%Kb;koNXlA/7tt<:aDdje8$MbOR8VuHnvO{9~V $' );
define( 'NONCE_SALT',       '3@r2>6*Udd%P1%4?hvny0HM|c4!ow>:bKrV4=v^m;WHWV:vb){d7XeT3LRNKkzAn' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
