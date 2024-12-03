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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_happyme' );

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
define( 'AUTH_KEY',         'h-UA}!c~y;k=TiUuDw{H^*ON86YQI^NC_+[FD:bN!A-+x0c@A) ^7{!z0w]$P8N?' );
define( 'SECURE_AUTH_KEY',  'x5 $o*/%E0`N>XugyuLuwp.[/~ ^RXV[qR{303i`Mmw[QIZZ~$yI_MRYQZ0*[}c)' );
define( 'LOGGED_IN_KEY',    'x9`LNrNaCa8MD:SS#(H3!IYnZPoK83*QF4&O#A5da{kX0zC<nY+m %WJpZ;KEN>Z' );
define( 'NONCE_KEY',        'nj~77`#{>K:#HLk7A]bjKy4/^W4u)(=8HdqWRrC8tZwVJ,(P_!_x|@``NZ4yD}rk' );
define( 'AUTH_SALT',        '3t=XYM=}2h/4,)O2:&^OxPo2^k)N_^B{?759TOo(QWAxV7y2KMHU8d5ZCWm?Il})' );
define( 'SECURE_AUTH_SALT', '-Knuqmy)1HA_GHGO (peX@QD<Q(HpCo[kOk1EX<1GENqf$B$!JMlLczc7(={[~$Z' );
define( 'LOGGED_IN_SALT',   '+NBUk)<%o`rm2(?e>b_$ufZ@h9k>V=qsbsXk~{3*@!*C?w9 QeFn*T?<j3c1--#A' );
define( 'NONCE_SALT',       'xN>RwxEwL*H]!OlPe>9sCVWc8$96Tz<y0R-u@<{jmC@}*W;Cai&B)08A8W>9PGZu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
