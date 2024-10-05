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
define( 'DB_NAME', 'Manual' );

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
define( 'AUTH_KEY',         '5Rb*+NR0UQ~;u/jDZ/O=AT&daMj6pi$(Y^y(yvq<j%!G~lfz2X)mf`-$6v9Tn-S^' );
define( 'SECURE_AUTH_KEY',  ' }II^Ik&JKJzCF.8c6M4!m{n#DlgK_x0C1:}6fgegwAmH8`TRG1V~oI?!CKMM/g*' );
define( 'LOGGED_IN_KEY',    'BO!>s5k[5K1%52L@NCU,I7V!5[`5vumT(}0)@8rRE4`L]ebH:Vj|jFjjF7<)D1Pb' );
define( 'NONCE_KEY',        '{SHFi/B+5Qwid&/g}[.!!nQMKV+((Qu5~/Z%sTnh0tljA?wE~H]6 `2vtf)s#!{M' );
define( 'AUTH_SALT',        'cnUH}[~M9[83z[u&tc0V>vt!12J#!T o]2X&$[8>m%Tgmvwk/%B&X3~.YED:dvp-' );
define( 'SECURE_AUTH_SALT', 'JT:JnU1!ibO~kfK:ZUc.xGlo%*r{Mm]pqjPvZ6#C|5RwV&yLD:X]f0`6=lk|QFpl' );
define( 'LOGGED_IN_SALT',   '8kj=-t7a=mh-@(zR}*g;VW6ZEzBMou]]Cxz#Yb>y_qM?TOg<r}:xc-e>@Ga;D<bN' );
define( 'NONCE_SALT',       '| 4 #@xIHdu0:<7qq74Fc-4*T:{[rO`p3f0_iyBsMOW@-;2qxa_C3oTGd9Tav,ly' );

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
