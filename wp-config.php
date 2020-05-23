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
define( 'DB_NAME', 'desenvolvimentodetemas' );

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
define( 'AUTH_KEY',         'IJGYCf+]9p&R]X:!~Y 9`{`UtZZ?|hh9<k]a_/U*tS3m,0<|?q6D]ff.=&#$OpC.' );
define( 'SECURE_AUTH_KEY',  'j`<q+e4<K]?<0NIQsT9Rc&SYgYH|a>6{M1WCrOthI:sg%eGd+Sb@Mx~JgK];-l!K' );
define( 'LOGGED_IN_KEY',    'MwC0w4DN}L,;3OvyrUt8[z~ ]Mgcv5-FSPYGBKdI,L&VV3 |73T,.q7iQ)N?~p/!' );
define( 'NONCE_KEY',        'hg~w&xW^iWulKu`1bg(kBADF]k=avh@z[]`q22K7z;bF7Uo!6?R6I|]:Vwa*,>_z' );
define( 'AUTH_SALT',        '7P]b/wv2fQr?;%CoEVA:At3q)l}BL)b!R?uFg<Nqibk2e09t#]sQ479xIuBT;4d<' );
define( 'SECURE_AUTH_SALT', '{uJlWQvt|VA{7rC<Ao{ywxd%vnT-7]62+4g<|)[.%KP4c4W?wS<`xdAaHiTx@6JF' );
define( 'LOGGED_IN_SALT',   'Mjh`+hmV%%WJonaQ]wAbmn^2*2n3EuzW=xd}7z;k`n3]WP$8#1pfyitdX[`<kE3:' );
define( 'NONCE_SALT',       '%>FbzC<{[.:nsY9$4,9@Jj+Uw}yw#.Pd{x@ Pu<:rv9lv8*RAZOz.hGDrM4AmnYp' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
