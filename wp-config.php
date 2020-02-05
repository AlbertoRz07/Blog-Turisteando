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
define( 'DB_PASSWORD', '784c1b928f8c4c38f67d6014ff376279fd9e5298e992debb' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '!{jcOt8{^)Bbu4q{gPi>ey4Oxm=wO#)!lWFQDHA&FGwl,{X`X|p8X[G$go3<sZ08' );
define( 'SECURE_AUTH_KEY',  'b3k 2UIXUq}V]eKW:oH+WnKcUW_ln(@v>;,ZK$R4C1|8w>b(cUr8!I7Dq.JmGlw*' );
define( 'LOGGED_IN_KEY',    '+H)HUq>+uKiapqSJS)zb5@yogP&KU#ZWu?kZAnP;&t*GQ<1xj5#J,)&L2M8zGS*r' );
define( 'NONCE_KEY',        'Fd9&n*A57I0-<pIkMP9<?z4*cAUO~S[g39UR7Xhf2dOe02|DJi$zvJ)wH>j,Vzz`' );
define( 'AUTH_SALT',        ']mS4HUguL1V{a0[Pr0Dw$G;kQ,hLz<DhRhl&!3%1-Mi,]xTzn=Y=LHKjCi@-W<wN' );
define( 'SECURE_AUTH_SALT', '@V<4anL*2.pwP?gA,v^1cI>@fFcgD}_dn6.`:Y#2ENq}DWjz6e%]wHLapVBM8w)*' );
define( 'LOGGED_IN_SALT',   '?a:DCkP pVEN3^%W0v4$ /wMy#=a>>!e/USn;oex,Qs|JiYt5#CL`:ea*I/#;_v ' );
define( 'NONCE_SALT',       '/iB+|OTOJ8C(8Y3U|ld+L;.`h;Y0E)w}Y%5D* y0^Obg_@rrN1Cgd{@m`G{TX0Z;' );

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
