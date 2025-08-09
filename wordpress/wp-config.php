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
define( 'DB_NAME', 'aegismech_wp_synck' );

/** MySQL database username */
define( 'DB_USER', 'aegismech_wp_qyrbz' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '|-h&2#Z1/*]GUhhcSN98B1+UHG114~on;5l)jSpR!l|&::Kw(5#4*oodf9ukVT26');
define('SECURE_AUTH_KEY', 'B_HMeHDoH]e:O3j1/l-|y!(xb]11KCv+T5+9iJWSHI[y(&8[KJ)Fb:]3E/%pPddC');
define('LOGGED_IN_KEY', '/BT!!inz8%8m+l(K0sxG5GUx1E)[k|7W7**1k_YxE80:pCs9j]9&Fs/)+Xd&pO7O');
define('NONCE_KEY', 'd9yyU7T~u1)V-pfvd1--u)SVo2Ye10~pd@t7)]LMEEJ|9ZtH5|NP@0Qg(*Y2VT82');
define('AUTH_SALT', 'u1;u5vV))lRMj*C0wCSH-D79Vrhwu89VOMeYZL#@m17:+8@n1S8Hu6O3F;19ndW:');
define('SECURE_AUTH_SALT', 'B#A%%/NG0*|d7|Rv(1qtBQ0b7cL76TBp;L*fksWU16B;%lU4[q3qDkf7g_X3)kOF');
define('LOGGED_IN_SALT', 'wU6S482%All2N5DS066r)~v60@-Lf:k64GGK&Ik6:c##~&/0c+Qx94[Ncj;HKP77');
define('NONCE_SALT', 'P%R1y:O*!o)oeXb12ey@399pKfD&a(7c[~5d:v5uB961plAx9@*k&rO]84|5oBlw');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ZfNPRe_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
