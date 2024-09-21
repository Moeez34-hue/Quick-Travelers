<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'n6Kg:LOjrrPiL0;D v#]Zw0p!YvD6=uuI1J>xw2F>H<b*_I}z-LO6r|6IA!>@Ydn' );
define( 'SECURE_AUTH_KEY',  '](aW1C#5/0GMQTWow t9{1Bp~[e>i%7@jxen2[2J+Me)I{/r<KoC?#ughMmBwAhG' );
define( 'LOGGED_IN_KEY',    'O[NN7^%hGS>f>r:b[P,H4-]@)I<EPD{&Ns!USor?0%US@m5Tov-CQw~7x}${b#)#' );
define( 'NONCE_KEY',        'b2){.Cm.=&/,!F{6O].N4t*~+W(rhRv<nNUuk$8&#g-iH2~4CPf}nhQ]KDame1%!' );
define( 'AUTH_SALT',        'uA0BQ6bY[/y2J}+R5}_]~=7|0yE<I1O^aZa[D@HBK?N8K[ TG-a<_>|xjc7A(Lq~' );
define( 'SECURE_AUTH_SALT', 't^C664`ITcK$JhWo6aD[*]*)}ESsi;XCFO|O4k=Zf+h nU{sdxX!B3pG7-i]a*:F' );
define( 'LOGGED_IN_SALT',   'kVzMus;=+`>hm&}HAZVc2woL{0Ibb&I]*Cz$J0;UZ*i5@*OkgPaH-sue%zq$MkfX' );
define( 'NONCE_SALT',       '9gH{.$<_XZFK?L??ylIb/Ui4:>3AL*{+V2cxLsOwq&R?!t$(qC!lyl*gEFgTy1R=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
