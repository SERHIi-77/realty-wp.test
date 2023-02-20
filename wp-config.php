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
define( 'DB_NAME', 'realty_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Yo{[Z0pO;]AhHi!Q|27+.q4%OLdhqv1p<]c!SHUzO 3a@JcBlT{esMqM?!agP;*A' );
define( 'SECURE_AUTH_KEY',  '1)LIs@ubmf2roZ[XEL`3C_w0bXAK;e UmL2bS]=E6 % ~Rmm5o+l%ng_!B|>3hiV' );
define( 'LOGGED_IN_KEY',    '0zIJp-J|4j 8AzdK3Xxx=9{</zy^0QP~m&yNuxWQy]K#pOpU:J{aUltoBVvq8wCu' );
define( 'NONCE_KEY',        '_Wkkk8<AG^}WtJc8zJ?2=t1f5I>CaRjHjSbKK=4UZ,l`AODf>M-8+!;0&1u;++-I' );
define( 'AUTH_SALT',        'c.TZ~G&9{yMH^^#ANgYfb>9%}X_%Kdo`f}WmcGZna3CPTCI]hN!aC~4(^u|58l0:' );
define( 'SECURE_AUTH_SALT', '(nJwbD,s0dIfbA|BJl1HkvFhKG|Ti!z-|qUCCYnq}8TfFc@z8ynQBFShoynJS5{)' );
define( 'LOGGED_IN_SALT',   'K@Gy?pa6wI[K:GyhijIDZ:eBsCMAhRW~i+./..[AsiglHqbnrEZ<eQ_G0!{q+Rvm' );
define( 'NONCE_SALT',       'a--2snki_ipU(H$MT;k?F)ZJ3Q/{$?V,33uDu1N]<&`G4G}rs86w5>B^wKTsf4F7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rwp_';

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
