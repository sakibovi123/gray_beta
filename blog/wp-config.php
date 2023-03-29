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
define( 'DB_NAME', 'sfdsdfesdw_blg' );

/** Database username */
define( 'DB_USER', 'sfdsdfesdw_blgu' );

/** Database password */
define( 'DB_PASSWORD', '8RaMBlP%w?m(' );

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
define( 'AUTH_KEY',         'szkFhEc|I+Jy$D67;gvY(x>xyb%d`?Q8q+BJU<yI,.+_nvIN*fMwUAv>/*[jq5]0' );
define( 'SECURE_AUTH_KEY',  '^x3>dKsRkyts9<<<yTLY5$)q;=Qax4;M+nOP:y%b.ln<e<~=<P>s>duu_tw_IB.h' );
define( 'LOGGED_IN_KEY',    '@)!;9kI=K<y]Gd9^wT!V0mI/X8b%8?>3;#~rL UTu1k%j!cmX|X*c|O%L)y)E%Z@' );
define( 'NONCE_KEY',        'icr0?*h hD_=&ME,qv+$sHg*Vj;@4HkON&OFQ<Z=JT+{iB5m^0s!.{F1Jia!6R1L' );
define( 'AUTH_SALT',        ' `HL!TBT@%ou(0ey]F51.Gx!l<EoL5K5wXp[#tf6VadZ<44Yy~@~C_Q]`m_7,K$g' );
define( 'SECURE_AUTH_SALT', 'TXN*2rsSmKEeM_-/h{FH-_f6`/ss H|AdYRFtWh>S[0,N$>{,7G(has d;iAv]-W' );
define( 'LOGGED_IN_SALT',   'vzCTJ&smfo5Spm_TWD9-|U.tDf[5;tGFM b*<G9aZKXSw(d16eYsm(>HNQkMN4Q|' );
define( 'NONCE_SALT',       'rLPGrE;czQ~Dj8SVXcR~MGhrHYS_%<|[K_A%=/+1VInjtg4~hUJy#iV#;j$,hh&&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bwp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
