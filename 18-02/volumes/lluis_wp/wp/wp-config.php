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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Tr`wCgK] 4^Iu2sHf_qw#O{-e/].bnBBYGc|xQ4 8%[nXU:><;xR>iKQ2EJI#5<3' );
define( 'SECURE_AUTH_KEY',  '5<PtrHb_y1qLI?B4$o(H2l>TH*(Aut5qZ+#?NmCxFD<H-8%#KsJge:d|/NV6K{4*' );
define( 'LOGGED_IN_KEY',    'H-#M*Ki9rW6cR3s?(]i@^AEiiaeoy|jnQ0la,aH6o,U,@f=@.iyoJd4gBA,z2;7*' );
define( 'NONCE_KEY',        'z%!tsCyi%/`%SJP{NwfS|>l==8H[vn7_L(r!A{,Hm::I9mZT__g[S[FWb%rZd]%d' );
define( 'AUTH_SALT',        '`GfJ 5i/[#/Sm>RdLS.rP2wafE!/V<t+jx8mpCRhpE&/0)}8krRR#Yq3&dEme,AQ' );
define( 'SECURE_AUTH_SALT', 'HXwP&u`UFhDBA_T[*m ll.qL=t0<A-D*W:v4>8<Y+Yyw}|2%:k^vSp2<pO#Wz?Z_' );
define( 'LOGGED_IN_SALT',   'D#jciBz8ufO;y$m@/,TPC;FuU!dEku*Bc?/YJ.[&d{B<><s7hwprG0V@Aqh U+[D' );
define( 'NONCE_SALT',       'adBtnKK(V[##*p3[g$fR`!Bh<;ASs[6wZ7sT7Lb/jj7BeKPWzqkN+Uq~6+@0?lNX' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
