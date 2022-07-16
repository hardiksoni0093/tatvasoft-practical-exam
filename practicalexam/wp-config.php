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
define( 'DB_NAME', 'db_practicalexam' );

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
define( 'AUTH_KEY',         'B8UfT}PqZ?PDA_M 7:0>@Mu_Cp!UpHsd^xL{LY6G>^VQ^>F2w7<QO~YFd9O_~(Sy' );
define( 'SECURE_AUTH_KEY',  'HO^&L@M:N0~>E,jq)w7.})vhOm<_mz/S9ikL/J^&t;{{j$$R+G><qrlU$/*#7`T2' );
define( 'LOGGED_IN_KEY',    '6zlCL$w)+;Y[ze]_9f0ZpsM(7_/syz)CiI]{,J:Wx>pi!+d-*sn|Wns472jG}F?Q' );
define( 'NONCE_KEY',        'q}ASJCMw]+np12mmu6rHv C{g22g_v/yOqlAl8vgM`pqh|(bKq7&W4Iv).L:Yj+<' );
define( 'AUTH_SALT',        '4!zl/k`iv|j].3S8!Lf/Mo{NZsi4$:!hW@LlVnP9Z2Y`*(vpwHet-7>zB>[bFG4!' );
define( 'SECURE_AUTH_SALT', 'sV6.+EbBaT?4}%x?*;<]4P6x%l|]-]c<*|=aGSIy#E.rPr8VkN=j[ZA~tD,);=cP' );
define( 'LOGGED_IN_SALT',   '2_rQ83(/<;1ijHSS[nG~yuf!:x<>-3^1zk|TL]=RmjYk&d@n!FWG<wwu&[#SRmkG' );
define( 'NONCE_SALT',       '2EcQn8RV`J+NqBt,#?b$?D<Y8cKHm[4R*Q?Sp%5d~#0bRDEQ;/D(tM(6S},7w^^3' );

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
