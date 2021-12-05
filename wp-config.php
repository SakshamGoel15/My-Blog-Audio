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
define( 'DB_NAME', 'sql10456659' );

/** MySQL database username */
define( 'DB_USER', 'sql10456659' );

/** MySQL database password */
define( 'DB_PASSWORD', 'IY1dkbHVTZ' );

/** MySQL hostname */
define( 'DB_HOST', 'sql10.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'OK`>M*`u09V!%B`>%=3.<:0}5vQgoIyOXAF(=U_3(vyD}4pPxyr:`?;*.$C7p}f@' );
define( 'SECURE_AUTH_KEY',  'I{9QvdcnerRC?EP+uSLefX/r_2rMkrz0Ssb~bX?GFJ4iz)8v@x^--S${%=-a@ETs' );
define( 'LOGGED_IN_KEY',    '`W+WXu Tu *TnT0A;YO^ k7qt{NQ6AbsyE#z/)+0#s/uATpP2gW0Cc/1U1$|8:Uu' );
define( 'NONCE_KEY',        'a]^Na#;/LK$q*#zb6nF[`Q3mGiL7bx_&8/W@Y);@JsV70gH.E3x!?$iV;|T=5kzB' );
define( 'AUTH_SALT',        'X4>bxQKmiQ[7MGWwEMa,I_$*,lmT*%8`nMGH5 V MG|b/q,L)!d_z)%q4Da:$>`-' );
define( 'SECURE_AUTH_SALT', 'B?dM2&`|QUdUMyIGd@^4S&{;nZ)9r}eo8RM|<PIdBzxILm^S7Q5M)V3s7G5h[Hxq' );
define( 'LOGGED_IN_SALT',   '3.JMg~nGDBgzBg57/QzM3(5qwN/iOQlU>=;2qUa&?Dq(u*55(AW($_>Ea22UdM I' );
define( 'NONCE_SALT',       ')O{25y^P8eHRp@[,hKh=p~4z i=uP#`,_Be;}XQh5 >[SlJ4Mjzom4,@x%^KtZ)>' );

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
