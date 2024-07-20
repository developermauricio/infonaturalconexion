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
define( 'DB_NAME', 'infonatural' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CFG4YSBSMMFNvrrLrcca' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'HEi=,2Rb-FI>Fc!a/^[IA?c%czaYJ310T<_$M~zW.<z20;}5ah1{xnPxFRb$:R/K' );
define( 'SECURE_AUTH_KEY',  'L!k7Npo+-(~vG>Y1oPr_^`7B[b#p>5WnW16IO4i{o@zjNO;MiC#CoW7ape9s0@.1' );
define( 'LOGGED_IN_KEY',    '~5Z+t`5_j+C(^ wB+5%<i%eG<Lk9pkW@Wpv{LZ@ZI+XgJh7Dg7WUBq(mL=ZO7})i' );
define( 'NONCE_KEY',        '^t};neI8hF`oZ/mS#Pa]faRZ@^|YZ_$qyb^[J&+GR3[0Cn6V:1ESXWbH49:lzO3l' );
define( 'AUTH_SALT',        'k9S|:)iV!A1[6Ew9HN_y!@%NoCv]U+9~kez _A`=EvF%Y~_T)Zx;_{*;MQq.ix#j' );
define( 'SECURE_AUTH_SALT', 'R^5<qef|w,Q^9PhAceG]}6%<ZC$+ABC@F|4d]BB,Wr#eRl  gU+]^t:g5-bt{Hq(' );
define( 'LOGGED_IN_SALT',   'PGZG2RvPeVWw<</3C+V>R0[aJlv}vf,nP1?l5&FXI]vrW:)n%8L^40:d OmjDXjn' );
define( 'NONCE_SALT',       ' JisEz*h!fP,|5+rT)BiUE}9T_c}U8s4.mB+>ya*ayVQ:7$1+ <o``ou_K_=FVR:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nc_';

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
