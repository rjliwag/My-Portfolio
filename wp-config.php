<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'my_portfolio_db' );

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
define( 'AUTH_KEY',         'f/H4&R2(sc2;`YczZ}`#z Uy+,Hw_v1YwgWz7#D>|s#o0xf75cv2US=}twZNsAz:' );
define( 'SECURE_AUTH_KEY',  'z9)Y+QV9ZQygXJHu_31Y@s.My9l_sLqSg.`?Sg4I#Q4m@Pvje+GJH#>Ggitv($X~' );
define( 'LOGGED_IN_KEY',    '_bE8uSR`&!02Zrb@)XsLr*/-=71CeXwul&f;V*$C@Q%C?>b-l.-Tj}Z?z(x3o&;.' );
define( 'NONCE_KEY',        '7&|=uB1c~l[xsW@7]dtJ^S1auVcrC>4^u%AA[5Awzg&_SH/q >>U9/C8:VnqKM.!' );
define( 'AUTH_SALT',        'cmtyR_^:WjFH(b-%bq$sXFx(. ]uEF$hfs&]s}JI;Jw3F#si$2gU}hH_eqteh=hb' );
define( 'SECURE_AUTH_SALT', '4:i~sW|igEQuuy*xX]?>!{`aP|g:/rbA|hMg[?O{;qP>aL=%4rESK#y?Ngqkr<FY' );
define( 'LOGGED_IN_SALT',   '9<Dx9;V2[||x%/2lEK^b CcHe^|ZHaLGF|%|oZF^C:Dit#R$Wr7z@a}*cN 95Z62' );
define( 'NONCE_SALT',       '-fz(A6Uk^^{0~^q,-.h+9N[BaSd -IviKi^Ecdy&kH0)K7e4IDC_qb?mOO:wHfL>' );

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
