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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proelectrical' );

/** MySQL database username */
define( 'DB_USER', 'proelectrical' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&+@McRQm(Q&rt+vNs~taW}fxj.lY5Puk$gv`yC$fD4+xX|TdP=<(B|/_sKixPRM{' );
define( 'SECURE_AUTH_KEY',  'Z9a5=S:k-wS3aA-;4@a+2SwO*6/|^% X~Y@)2j-/Cg#)|7AFL$B~sd_x1PvtPs<$' );
define( 'LOGGED_IN_KEY',    '^N2}vv$H6>:|zaI>ry>WI[Qz9rQxn*Z0iTewk?@Cw~n(4)|-`!%8|IF.CbOR:nq8' );
define( 'NONCE_KEY',        'dEw>-.Q4hgwL|K(Cic=wngL%:o/{|{KgpD!U3+yt9[JZ3`jB5e-n`Op(%q_94>QZ' );
define( 'AUTH_SALT',        'Zj#Dw^:c>z+4`>It(+nK-+B31)>mv2B_]i t1W0*1!QydONyFoT:r#O|X=ranWv1' );
define( 'SECURE_AUTH_SALT', 'j&D6Pg/pPf[j(W](;,Q_gHiGfRXtQ@|_X%W@XoI6+;B$,<Df*#t-!|D7C{:m]Ke+' );
define( 'LOGGED_IN_SALT',   'ry}kUf^4o [|q=+O!hBW&K)9T^ 9aN -hB8fLu*$Wbm`%evH07`,id=hO,v{b`y;' );
define( 'NONCE_SALT',       '<,p&ZXz:>R&{d~jI3SS(bKw17m]x}@9&=&l%$h&wh1e/VVjMNJWg^h$VPb,MiK)@' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
