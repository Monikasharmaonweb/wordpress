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
define( 'DB_NAME', 'wordpress5.6' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=>h$Pv(Df#618ctwlW}VC*2H$E|=1ZRZkg.aZ?ss8[|2nk+aVg.0^XGh=xhwD2S@' );
define( 'SECURE_AUTH_KEY',  'I]Za/*<K}EnaOt>Xi)G,wS&bFF?y]]3j,VG<Tq6eY3Q3abxFV`ybvr3,8#IJ[#- ' );
define( 'LOGGED_IN_KEY',    '0GL,q9,oVu*r/(=sN;Q#,(5sz{<#U$`hfHf-K#16bP3,x6.a%2/3=;|jQ];No)Ku' );
define( 'NONCE_KEY',        '3abNO.4IE4{n-T#6Z&q#ZD)hqo38{%I,A[hO3SIHJ-eIY2?Wr0Gd~`)Cu@r/h}]$' );
define( 'AUTH_SALT',        '4:b9-DQ(zlpj:pF@{*::U^Biv`/KW)}O7v=$HqK]@lPB*z,W6v^0s<-086A9Gam8' );
define( 'SECURE_AUTH_SALT', '2^3<e.8^@&fmp`d9bE(u7?i4hq RGA @bG#~8$2sDXuE7:$G`Xx wOzyRvWT3yWA' );
define( 'LOGGED_IN_SALT',   'I/~ZyO|lP vz&b.EfqYEj4AgbVieL_J7hzMp=Dm#qw@KVtm@U8Q1uN}hW b(^{Ww' );
define( 'NONCE_SALT',       'kQ>;yz-,6ZhA m@h-1F.M>R?EVTy5s!,gXX`<IF/,12uXl/AhhVNDu0q`9Kphfi>' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
