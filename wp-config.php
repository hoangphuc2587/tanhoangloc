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
define( 'DB_NAME', 'tanhoangloc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '( JD[YXpEKfp]^c#b%(Zl(bD$dlAE]3HYJbg9;Q5<&1);?j(v`jdXG s2wLrjjAn' );
define( 'SECURE_AUTH_KEY',  'j6b4(4;j~yk%&4~N]F`r`]jqyiOk]1Qi|x~)_#uUT,%TJuBdr6{?#4M`-$|Ijne=' );
define( 'LOGGED_IN_KEY',    'Mhm#^oqvQMvLhxR>`$O;.d5c}.2p7n;#-q25LLK/Iq`l6%)22k~ib/?!9?;~(s*^' );
define( 'NONCE_KEY',        'yAI+}kw[E~o.+.|]V9fw-DA{E(0[,g.>&r|h=D5}crI&aE<Z/=|vMc@J.FaedO<T' );
define( 'AUTH_SALT',        'g+R68[6#,)_e*EWUwIv^+ks+(>7M[Zr~f}*>-7%j0CNZKf}w7yK#_*Dyxpwh<_=G' );
define( 'SECURE_AUTH_SALT', ')v?D!{q<iNgp)gA4?uSl`[AQY|#v~e#d<I,hJDF6vEq6T*?*lisz4mE(w6:B0H]r' );
define( 'LOGGED_IN_SALT',   'xOJdc&Bi>V|Qepl^3-#kRw%*sVxt8uHH62ak1K8_dOjCoUhd0[vO6Zh0y8,V$hmC' );
define( 'NONCE_SALT',       'E.R]sR}JU0VkBOj;~-[v:b?|Mb(.hbwzM$9WT&7jz/rVN{3-ct2_d+cdgLW|KZ}U' );

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
