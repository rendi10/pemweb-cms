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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         '!U6}N;ShhC6Q-Q`A5u]LyI~!2r*vB>`BW8QuWDr+z}lAssJs+jn,m1|;!pEosOlp' );
define( 'SECURE_AUTH_KEY',  'T5=$|iV%IlWKR&4Y RXSK%0{:es(N^KEBJ]egu{} x,q+U(aT*a-l9Wr_,R<cfeH' );
define( 'LOGGED_IN_KEY',    'P.m&nE :ywI:{#FIB %V}_Hc*nA/j@x_)/~v&2@u9.U*@X/NVcgM],^L|s%wq7=)' );
define( 'NONCE_KEY',        'MYGpDJZzUL={RF3_ag{WYvN9CJ:e=#80L5P,HCw&MQ~QsW3s4[*?5y]AELU:Kca@' );
define( 'AUTH_SALT',        'R8,B,yJ-jC-PY1<4gQH+=TLiJ?P&X=wL= !=GU&VTzi[B8$FzglOp?1}_>a~$:/6' );
define( 'SECURE_AUTH_SALT', 'T{cSx:ZcDCK^Tmu&aELp,1*j3 k(i-8E*^;_q*O1_w7PefxF}/-I52IwPa}XX]l&' );
define( 'LOGGED_IN_SALT',   '.<mW:o|BMrm1=u~*2Wsj:Y^tyXU/~xX+-*{,cWdfkD++lLFStd?SzHyPPAM!`{TH' );
define( 'NONCE_SALT',       'q.$MMi(~c>;xlSaz},H}+zhg#PiIFwM6@_:aEs&LN?W9eb|+4$LtJTJe.D[(];^Y' );

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
