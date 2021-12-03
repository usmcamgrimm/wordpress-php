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
define( 'DB_NAME', 'lawfirm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'N@6jF`@qiA0q{2+[XJ+Q9!<D`C%7q?zP9iu^XVf<{7QX<X`Z+6(2FQ=F+(X2Zv12' );
define( 'SECURE_AUTH_KEY',  '7(OMX9-/IFa9|g*U@GhL5`b1oGsL0iar&$|#dIP$+?HzG8a#8km(,XCMN(8 Q(~*' );
define( 'LOGGED_IN_KEY',    'V)`U#HoM_on6+pqlT_u@`+D0MjIKCvZm1$:2w<n)f03PmIGg_w{lW_]EL@Nns4>z' );
define( 'NONCE_KEY',        'n!W%&s9%z!U.?C*:QeE&@p,XsYnT#SB*gM5rxw3>ped,A|&hshk0,m>f)3R8sX6U' );
define( 'AUTH_SALT',        'xY*dRR4<N8w/26V:gC4b%Uf:zVe*M,]:)L+jdV?g`$LxoHdWAkIuEvX>n^Xtytx2' );
define( 'SECURE_AUTH_SALT', '1fH%B#zrfFU49D-,,&rA%ciH*4?4/CH M9*yoAA1FJj[d&xKVtM{K=j)7fz,9L96' );
define( 'LOGGED_IN_SALT',   ':Wnz.PL>qYE8,V,2#>zYygU3|c{F[*pv*&BV=!tGZS}G&/;wri^gHY@4`-kpjnc]' );
define( 'NONCE_SALT',       'j:dr(/;,4(?.Nbfy~:k&at8,7+Ge*L1P.0H]vc!IZ`Q/C=wR>^aorB&&BR,a~EyQ' );

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
