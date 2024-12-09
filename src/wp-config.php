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
define( 'DB_NAME', 'wordpress_dev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'wordpress_dev_db' );

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
define( 'AUTH_KEY',         'Hv-/p2H~oR^<yzVQ[%lIViT-gCG)!+cf)d~tWm%,=jzW2`mID^b>IE=l#,TnlYz/' );
define( 'SECURE_AUTH_KEY',  'X%/ZOg`8D!&+%qXa^Waq_e.;t/qbcR %OV_dEDu0b%.AQV>Xz:uYn^zP3lIK9rI}' );
define( 'LOGGED_IN_KEY',    'B&G)*O{p4`O~D1H960?dS;B2@q4.+K9u%  6SJE<XEr7xX?/lvIp3&36G+>q>Y]w' );
define( 'NONCE_KEY',        'sVT*#.0[#uyuQ.|_1A  dWHSX/q%C34T}.L$FU3IVx93/`^8L$=wcf`?8y1:H$U$' );
define( 'AUTH_SALT',        '|cB(kTq7.<>x1nx};y@!k=j}8Bgr*rZ`^^Gj$~kmY@uj9Y@)uV*V[cMV0.M(DQvB' );
define( 'SECURE_AUTH_SALT', 'vi12S$]joY>X_}X;^4qy&@HUoLJVtmQz0j8}tT5pN&Q7LWhH#K]&s<V.<igaK>Zl' );
define( 'LOGGED_IN_SALT',   '-k/$W)-F0sRD`=Y,x[NwkXNs-2&wWqNav7iqPS7L@9ce&[LmY1meYWz#:g)p|Ybs' );
define( 'NONCE_SALT',       '1l~*CPhD$63])#.fGd1|::A>BVje8fe&X&/hcYP,]AF$1v )jy62^uw?rjZ9eI`g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
