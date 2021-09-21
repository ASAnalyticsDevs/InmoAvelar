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
define( 'DB_NAME', 'inmoavelar' );

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
define( 'AUTH_KEY',         '33)bLbq(3$/<o4{X`/|$PHO u~dxb7[gi1lHDSoWbnI URED[0S*kXpv~-E_fkmh' );
define( 'SECURE_AUTH_KEY',  '9[[Et|}[cO!^E-IHu,;I+%V__*9CNWl}vOAw*R$~=%Y~e4`#]W9M|p.M^BiqlZQK' );
define( 'LOGGED_IN_KEY',    '.|%T(1~Rlz)7Jh_WNj%{l_oy?H a2_/^|qmdM[f`<1w^==uT8_m<zxaGt5aA8;Jn' );
define( 'NONCE_KEY',        'OdAsNd7KV95%gJAoi0-:J2 i_^=#w{l!RP<uX2aw(l:d5ePtrQ`kqPzs|N_jo9-a' );
define( 'AUTH_SALT',        '1y</ZzJ88Ko6a3$~X}==+l$=|ZW[N$!.?vr=CqhyrCU^-qZ?]YjKD+18D#S7`}:D' );
define( 'SECURE_AUTH_SALT', 'CszktL*B51PVy$NDwMz/37_I95e:iJ#a*8SBE }Txkk2KzL%SC|AQDm82B 3W[Ug' );
define( 'LOGGED_IN_SALT',   'fKG-@sb|sO^:jfsf=htP,nZVh|z-:dyYt&_IM8sNtVel{_ZN%HJ Wr~F_^jVd]e/' );
define( 'NONCE_SALT',       'NXhrF|E4N)]0$|$=wN(E 4&pdnLKt(fbJ{S,!-^o)Wu}tMaKWZT<1~[Ek@nwZCr)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ia_';

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
