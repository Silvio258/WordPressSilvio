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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'wUAW0Sa0;:XMZ7.Z*9, tii_x,?!a]ykmW`GjnUFVwk8pr(*li&Y{>)v @4_5=:;' );
define( 'SECURE_AUTH_KEY',  'LFa#v.OkJlL;C{@Lztm/O.}&]aH-WS9{|7AfV(% p|138kxx7bJ{62v,QM$r7#)H' );
define( 'LOGGED_IN_KEY',    '^+m$S)>Y5UiEeU55R]8Dv@/HKo6-#Kw!<6sYni_!M%)yw)r4?q-U-+F)[$4OI.4l' );
define( 'NONCE_KEY',        '-KY 8xd1>.w1A4haMVsQ{JXyW{e6U7SiU~~Fke]8iAa*E-jn.%`1~okRZo/NUjd6' );
define( 'AUTH_SALT',        '}yfO{C2-MwkDQIdh=K&`6HXIzF6kOP_-CY,hE6bslYt3$u658Ala@VqKR[0$ucr7' );
define( 'SECURE_AUTH_SALT', 'fRXk&59WQ`_b.VT?7bRT@9&(V]EENVS JJpfO&7]~w~sh$X%%g4ev5Ve%Xy3p|>]' );
define( 'LOGGED_IN_SALT',   'g9G;+T}kVu~1$euf8CWlT.O+p>FRN8`D0:YD^-76T<20%j7[~`q0uV-qE$z38h0I' );
define( 'NONCE_SALT',       'BleXmu*~FMj!7!)TfF4DK<hH.JDN*ri6CI2vFfrX8g)(fIR9YPN28=fvm0>P+_Yf' );

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
