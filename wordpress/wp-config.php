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
define( 'DB_NAME', '20230174' );

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
define( 'AUTH_KEY',         ';_d7cBjv1:OBx:DU0bme9P,]JYWG(GWD%nDBfip0l^3cp8=US(Nflg1A|t6DWi6-' );
define( 'SECURE_AUTH_KEY',  '1ycEIB6En|.<@hKJhfA/*A@tf3m?Um.b4wv/@(3[a2uC-n1N*$H)Nxw3}Fp(D)6|' );
define( 'LOGGED_IN_KEY',    '4w|K4F#WrO=#C)*:WZ5in8iq<e;B&l9slB#K+0&VUgLisJTxq|ozkYy.R+m}KwzA' );
define( 'NONCE_KEY',        '}fj &qN!~E!pbu:o`(7tM:%8C-W{pa?!og;?N:Ok/a d9fRhr`$uKcTTQYgQ>x|R' );
define( 'AUTH_SALT',        'U^yM+|$Ti3+N6R<?)UHMzIjYkl}z=x[(bLj~sfg_e0t=eh4ZTw+s+9([D$U6VAie' );
define( 'SECURE_AUTH_SALT', '~G<DHOB+YmSpsyEd`%J8bQJoaWYIa9(m=*xI>]cP3`Um-KcoGeFdk=&Q4VpZ~ua{' );
define( 'LOGGED_IN_SALT',   'O;;rV$5 ~2o*4GN?I>66M%2)/0Qy%,F*>sfYs:kyhYezt*2(&*2hRlxS?6(MOEAD' );
define( 'NONCE_SALT',       'Kr?0NuHHA.up]f];xDYk#Tw.uW!H4dJ{; k@`R)5eW.<|{l]L)[IhDLlsuAgXO:q' );

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
