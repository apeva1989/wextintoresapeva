<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'extintoresapeva' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '99plB~y=9-zC>,9SgX.vfJkE88kixKC/}}FpI2-{R<-g wbcZh}/:S]DgE1d&1|B' );
define( 'SECURE_AUTH_KEY',  'ol!eh;V!~q%()CT1m!AY*LSYPE{9(C)jhK:p%@p.--78I2b]!_m8-P^=G0r;&}o!' );
define( 'LOGGED_IN_KEY',    '8,H.P0Wpdr@Z:I3=vQ0gBAaMFg#8lu}g~=XyQ[YCt;Wk}qsEHjAPxrL<5xIV<Fms' );
define( 'NONCE_KEY',        'UnF^U3Q/8/Zl 2&d|Tu&x#Eg|PumM*ohz|BuT}!-qnkK&?}oZHS%Rz;LxRXscQSj' );
define( 'AUTH_SALT',        '6]bR**SF@!OG+iCk+.fN]xFe?nrbulOY(x{m>1G.[u0d/xj{:U}$#Arzq$S6CmAf' );
define( 'SECURE_AUTH_SALT', 'h<^vIS2MciZ?=KhjvD$_d+WLb?oPJfoP]TlNkl1T&P4}Bo*OOi}Y|#cN0Y~?%=PJ' );
define( 'LOGGED_IN_SALT',   'T?SXsoYAaz:oBT3of/%h%Ml?R1] q2zk?=!?3][~Crxfsb^~tbU>< %0L0/G8Fa+' );
define( 'NONCE_SALT',       '_F([hFh-p.CpI>:oY{pECF,-Htql3#$?t=z$}sLdCgDA$=zh,wD~o_Bkk&la<qK,' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
