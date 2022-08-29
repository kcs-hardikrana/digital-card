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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digital-card' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Zaq12wsx' );

/** Database hostname */
define( 'DB_HOST', 'phpdemo02.kcspl.in' );

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
define( 'AUTH_KEY',         'z.96=]+cmX%W~9Y ?.Y`*g;=)x_?kh%VhgfXOx=@m^> -Y73+t[/!b/>_;:]m4Ct' );
define( 'SECURE_AUTH_KEY',  ',i?Q!u]9bZDR<Q1+ee)7{5e:nE)(nAjM]4bjMwmsDde*3TnpEHXUaPtj4ACQ@4ws' );
define( 'LOGGED_IN_KEY',    'dY,]eXrUvv6gK8HR?Q%]Kqk|sq*<o{9j-Hk*[7WR>W>SLxL(?D/.d?#ja6dL*#C(' );
define( 'NONCE_KEY',        'Mp/vrM5}&/yADK FB2O>a0{gj0bME-#Krn/bAPG4I0_f!OKc$dg?gY,]d[bK[(gR' );
define( 'AUTH_SALT',        'nMDf2IwSvN?zG*wPw?m^5`7gfB>XspK$KaY`5h,Jo%XNdZ8;G^P!o^mBxO&F|(,k' );
define( 'SECURE_AUTH_SALT', 'lZNr5n]{[[vI:RD!BpIH;oZtYS3iOJHQLj4bwnu;uW=1*25&8OBhFxin7F9Gy<1(' );
define( 'LOGGED_IN_SALT',   '4pG>@!AN$saSK.n2b[P{vh6_wsE3*U-/1<(h4@;kghjHPrz_I7q^2H]&LjG@eRoM' );
define( 'NONCE_SALT',       '#E2Qj@iyL)ooZaoQP!MpCy/m}bi(fT_i:.(O#k@h#DLHyxF`k(Mgf$R_=cTaGBzv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dc_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
