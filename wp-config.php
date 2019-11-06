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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'diyafatima-parallax' );

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
define( 'AUTH_KEY',         '#%$iqeu9?YK%)A2wP_;>yHEM* __IX,sa1kv?Tl&Ks+=8SX$EY`hG_EkMeVMhgS/' );
define( 'SECURE_AUTH_KEY',  ' |(c[8TXN0]zKbRH0JP%3C[iZ|Rys`=%Y_Q9U@^.]{m,Z|:jOSg}VUzV@|^9G|1B' );
define( 'LOGGED_IN_KEY',    '3kj+N0!,f]eE=}VF<R&e x=w&e.B}c+!&pE>h&jCTe>S7Zgu5mz{!J40vR=sIG%k' );
define( 'NONCE_KEY',        '|xPD{0R}~:(3 vC7fZlo-N`33Gak@,@y nZ~i4[]edum^/b{a>H_bsX)Q*%^HEi&' );
define( 'AUTH_SALT',        'FkE?h_EwG-x;Dd?Dw-(5f!2@R&I}9ms4!IETf25ydkKr Q!})Dq0kX#n~/KRG!Rj' );
define( 'SECURE_AUTH_SALT', '2aCyb`c>#CJ 7jOp)!$dY:` |_G,[]5(pS|$mAeX*8OpcHX*)+4BJr:AmK=3y~+U' );
define( 'LOGGED_IN_SALT',   'sMIY#{`$)7upxrB*zMB$r@acOBGT5YZ|4/j.J/}gx33JKoq=kl|F]Ci6n(Y&qV+_' );
define( 'NONCE_SALT',       'xme!TXeic@eD$M}(tuLLL24qJW:WyQpl%&&0lJa2e]J(la[pvOp/lO1PE{.aGwC ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
