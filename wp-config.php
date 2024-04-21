<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u884415020_0coT8' );

/** Database username */
define( 'DB_USER', 'u884415020_bFLRi' );

/** Database password */
define( 'DB_PASSWORD', 'Superio98@' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'UR.O0ziZ2j@G#o1P<`d{Bqw#wkf.cvp|WF,ogY(a.$x~W0,5cKhux6FB!MDIX+>2' );
define( 'SECURE_AUTH_KEY',   ' B@@XBV;yW0$mG2_HdvrQ*>W<mx%O4*%b >7imqfc>RMAAT+,2PNlxpo#=`,;vbi' );
define( 'LOGGED_IN_KEY',     '6N^w:>umq+J=d`wZu{2t]i?`LZ~N:1`)bf+d!p?4v(aae]cK`VaWDcO>_|$W//?`' );
define( 'NONCE_KEY',         'MS}P8W<W>bm%>h1a8P>5D|t58-UAo&D#:}0oF_]h]A]|D#r|n8wGiPJ1`S^P(N|4' );
define( 'AUTH_SALT',         '-r?.`ow`9mx)j,@:682X|Mh~{8u- .Ez<qfZqU,rPf=QM?-P01,1CoF %WvhU_C(' );
define( 'SECURE_AUTH_SALT',  '#7q:q$CFw[3mwqYdOI(@w.K(-W5+:Gw}%74IU,&^/34[_9chkqXwKeNMH|~L%?^Y' );
define( 'LOGGED_IN_SALT',    'baGL(`{qvR>%AK)HA1(f%z94S#,ld=G-*j%[*)_iM{,w@#hE4VJc|y]JXEDA:n5^' );
define( 'NONCE_SALT',        '7DhVe]#<wf716eV2>kI[^Jhr1,3bbxsA75@Zgc;ti/?E;#bL0Lw]n?$Z_^IMjZu%' );
define( 'WP_CACHE_KEY_SALT', ']jwUZ5Aa^;{S$[AAOB3pH99;G3f0>{; p6jj^c$Edv<P6:%>} Ff0P[T|+^;2CPl' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
