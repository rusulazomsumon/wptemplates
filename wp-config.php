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
define( 'DB_NAME', 'templatetest' );

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
define( 'AUTH_KEY',         'd)%()h@j53$;#]J?~c:BC Cd.9_IkV4QOcZ.;P>S&A)SLpKdN,}m^K/k~Gaga-n$' );
define( 'SECURE_AUTH_KEY',  '{ZiK:N@L-MKgd%dsk{YK,FPUp!PXeF; z1d~?$sY>n,xlXusLa`nFu4k v|c4K(a' );
define( 'LOGGED_IN_KEY',    '}[O+@HpDiMI r;5s?eA.7G/1JZ%Rt};_}1rV[#u+gnBYUlxShk~Z%0x*t_6C,K6_' );
define( 'NONCE_KEY',        '/R4K`|(px-_$ws*]`D60=_k!LM6wvOI8@d-t9L3s&kEc<-hqvOi03YH7t:O_{Hi+' );
define( 'AUTH_SALT',        'uc2Cum>o7}>ZV17n$aF-(1%}&Htd_y{jg$r2CKo(ouTttKP-N:D0H}gm{i5eD.,%' );
define( 'SECURE_AUTH_SALT', 'Wt:`5bC95Lr5W@!J,/yD{!)HCz*)lQ%PLemq$C82NXrcYa}o1hhS0e{Xad{u[a[_' );
define( 'LOGGED_IN_SALT',   'X^cvO7Wy4JDyqEi6^jpk:3M%4W8KI0T4i5egb:5B[g*Uz!_/xK$dHc+hCY 0dF]`' );
define( 'NONCE_SALT',       'mx~6U_hc)&`.~rn+!5fd Yxv2(``j~m5,:X;Fnzko9iq`yh13D11!evQO@pH{5=!' );

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
