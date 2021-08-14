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
define( 'DB_NAME', 'justin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@r!Oq$R*@aNK>.8Z$Ru!~aeCFx7.:#bPONT5QTR~`9#7)i2G%(p!]HOG}@M0STc`' );
define( 'SECURE_AUTH_KEY',  '9DG5.ViSC4-O;<aMU54U/i@Ak9}>]%&j7fL*+HPN?6hy,y4UZAj12:Q,Ut`g7sS[' );
define( 'LOGGED_IN_KEY',    ')[(s71GqYA]Vn~H,QO9V*db>/hblAt|V2.S5?6CQIs[@Z*ylkFTl_@/I1=m#E)h7' );
define( 'NONCE_KEY',        '|6(&-XsD,ibvKp+]*ui8Jk[0p0s~^B$T$UT%}c#a0@nn%u8}90!mlZ6u+d)W/oj:' );
define( 'AUTH_SALT',        '5xCTZCYY)dbI#Sso|}PqmKIL`>Q%DYR:TdlqpR-CWJlF31J= 1@F0>d9%L-[ws8w' );
define( 'SECURE_AUTH_SALT', '6#Av>0MG;H0HRWFiXNL~awBB-pi_7SVnBpFUu3.XzhX8AW M=n]JoxF{EOwnBAmu' );
define( 'LOGGED_IN_SALT',   '[q%wFm|L~U&9)8[7dQ)P!pWZ/0suZZ?fpyav{w!e4]+s!duD)XyIUkCwO]gEAQY_' );
define( 'NONCE_SALT',       'm$t*y8GN-rt!/*.g-*57H2^uo*(Jn1$~/X#gTeP+O=KbDgdR$<o-kgp]{,(6<199' );

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
