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
define( 'DB_NAME', 'db_store' );

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
define( 'AUTH_KEY',         '(t<PI]D)(vMqE,n7#o98P/<&l_FN1YIc(v/P7:[Ux8[(f-(!kS8<$/HuLrL<v%^_' );
define( 'SECURE_AUTH_KEY',  'vsQ=vl,#M`1(FC>hFfFgZzG}v:kX_GKgQR~GPPha2N|`#DT+O@3{dh62ANC*9#Bv' );
define( 'LOGGED_IN_KEY',    ';|vg8.a5]$BX#rPSG2Yng[u~=+*Mn6>dSt4$iUn-7,xE:k#w~pQ]M P=2gADUHxY' );
define( 'NONCE_KEY',        '{O}f-BQfI@]9O+W>lNq~Jnl8=?]FYy<FKKI%RUM|[2zV3EG32!j%:_PHo.1VGdD+' );
define( 'AUTH_SALT',        '!%THKyR[DBc^p*@qaT_qA:&D ;tyZY]KT3gdmNBQ4;ool0R7w2OY7tfJ65n8@O0O' );
define( 'SECURE_AUTH_SALT', 'b3>(T$G5u]KyfI2vk?Yg)7XOTi<$,%lf[Gkpx-8!b=K4y1/5^|>J{yO?xWM;B~J,' );
define( 'LOGGED_IN_SALT',   ':nQ{iyM;kYK6._gB^!r/:2}p_L{f@=M/`X)aC^F8;d<F?ZDH+!+lqOs2}bwm&`6]' );
define( 'NONCE_SALT',       '%M)EFW-2WPROR5#9/#P{-[i1hOTiPNj}}vgvX 5l_pkq.YA@K hfD^O-4@kKc6xl' );

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

