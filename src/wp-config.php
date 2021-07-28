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
define( 'DB_NAME', 'th' );
define('FS_METHOD', 'direct');

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Niko1997' );

/** MySQL hostname */
define( 'DB_HOST', 'database-1.cowk4ejxq7v8.ap-southeast-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//define('FORCE_SSL_ADMIN', false);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R3;P!Qx<V`M6],U,}^ BOa+FX4mHYL+l)#xdM>h-h&~OT~(E$.;*C<v^uF}$8~3V' );
define( 'SECURE_AUTH_KEY',  'dGgGf7-6!`oY6s*_@8@{}{aUy3nov^70XO^tr?ib)[U&%ESf`tfX8(fZP+H]5,7h' );
define( 'LOGGED_IN_KEY',    'e~N1)v_q^T;xqXfcGoIaW!DBY11__FldU|=&L^`SP4)%MwK907B8u|j|?fuSOq9U' );
define( 'NONCE_KEY',        'V8o3k[L[)n,gZIR_A<<E(.sX-$<IH,v2!Rv!^u~Vn*xhBM?&~=))V|7|xc8%0j&a' );
define( 'AUTH_SALT',        'PHlZrUTQ8HRgtsgZUW4QFS]E^84FcU3*s]X#(ZJyp7RK#jPFsVSK3BsY_d{F<XrU' );
define( 'SECURE_AUTH_SALT', '5Ra`P<(YerZ$[2A{#>+ssp@<zZ)!*wO1pbo B gm;|Iu{4~Sb89@;2fD$#QMhNgD' );
define( 'LOGGED_IN_SALT',   'T(e&5k<Jq<HpqQ$O^^p4p&9M7QHO)>H2Ix{Rm`:TO1IR|tO>;v,mj|MZEKs#t>{2' );
define( 'NONCE_SALT',       'DKsn)nZvI!GEo} n}+->JqN+VV6uqs(il~ww=[_Ml;vC?5Saw%`DksGh{<{?+FD|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false);
// define('WP_DEBUG_LOG', true);
define( 'RELOCATE', true);

define( 'WP_CACHE', false );


define('FORCE_SSL_ADMIN', false);
define( 'WPE_FORCE_SSL_LOGIN', false);
define( 'force_SSL', false);


/*define( 'AS3CF_AWS_ACCESS_KEY_ID', 'AKIATDG2RUVCX54QYCNQ' );
define( 'AS3CF_AWS_SECRET_KEY', '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' );*/


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}




/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
