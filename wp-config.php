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
define( 'DB_NAME', 'moviereview_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3310' );

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
define( 'AUTH_KEY',         ')R0K?O}<t9O3(xQbD3Pa!gL663LMjISgq9lgf?+s,=JIYiQ5gu~P25fwc3J*!x-e' );
define( 'SECURE_AUTH_KEY',  '<>h#KCvJot#]o|ogbVb+HFkktLYgKoz9xm)*k!,sxN$$EDN2[,ka4z|>B:UixG2x' );
define( 'LOGGED_IN_KEY',    'g)>`81bm=45zoG:A{Jmhd;g2rd_lOB$rqC: ^5`zL(r5TEGZeF!Gq,]Uvl^VY*}9' );
define( 'NONCE_KEY',        ']90;T[P$&-{P3m7.4QWGaRF9H(5{^%1rW2<%}d4]a;~6z%k+_ QL8_Xlg0Fdm|8c' );
define( 'AUTH_SALT',        '7(HhbQZR:;YNfndMpF?-j E-qKtkv4{01]~y{->([icXyvttl46x|]j:zfvgLYM:' );
define( 'SECURE_AUTH_SALT', '+I++2$F0~N_HCmKtxp@ta{X|vV-^qud~gSJ iSO4KT*^/J{bh@cE*fvl&FoP9#;(' );
define( 'LOGGED_IN_SALT',   'fJBL=2C_cGcZ%;gCr`Fe ,}c3dUK_|7M+0Li@3 FWy`|[:ZY#RZ]ZUqwqpAdj%xY' );
define( 'NONCE_SALT',       'V`BT{ok-uL2jOvna/)&d0ANyM(7vm!W)wDgg#0x7ZdO::5SAH%+?H 34Cru7WZ&p' );

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
