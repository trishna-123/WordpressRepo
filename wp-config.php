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
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Password' );

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
define( 'AUTH_KEY',         'e#dr-/~:!/(Q4jg^+^2;AdOPDq0rY@{)IjF(h#N&18]%0Ou;FH33IO>O^Dvfrdfw' );
define( 'SECURE_AUTH_KEY',  'U*b1TT,I:SA)H))7Q,tz%y#_q-uHKS6)*cBUfC4nsb!~[f(o@/%<,bDX|=%>wp|3' );
define( 'LOGGED_IN_KEY',    'C.mir-MZC4D~RDI%yfq!K08Cbo&v2gppWUc[[%#vu?lw`[xeuUEeqe0oob{(}EF4' );
define( 'NONCE_KEY',        ',K_29f3RIwyd>U@ +t,pVdgL`. BZA>@|BMichxpeSlrOBl@4>Nbl*noRa`B|D>&' );
define( 'AUTH_SALT',        'dvMHbsc};1y@WJvR:z%$HGx3mvrNU)bSb l3}UHY8AkCMYbTbpG&Ar?wnK4uxE2D' );
define( 'SECURE_AUTH_SALT', '(TXK(krdT:-;9:Ye<?h8V*glb1RAiU;Zu!k}PdA7jg$qf#MCC64;U|-K?.>d6=Z$' );
define( 'LOGGED_IN_SALT',   '~hkdUJ#Lw,<1lAB5|z{Z$9)!f0*.=Ovn+Q]ctEA;$UxxR=`=pYM;ss(-3~%-sxYy' );
define( 'NONCE_SALT',       '6vEX.c)od,mHLp6)`:rAmL0DdD<}Rl<WP(/<j<J1;WJj;lw{ZdWfbSA<R)b6B7Z[' );

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


