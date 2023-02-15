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
define( 'DB_NAME', 'daaratechwebsitedb2' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'daaratech' );

/** Database hostname */
define( 'DB_HOST', 'daaratechwebsitedb2.cnoh5gjgh2x7.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '-jUFV6?h!_:z3HKiui=QHhZ.(a}@MxN[q4/IK{mf[gw!$,/V5yIcnW=3Y?=ej3rg' );
define( 'SECURE_AUTH_KEY',  'zeZ#hesvJWn>s+z%ENMo-Gp,K3%?KFIBukIt~_[8A(g<$[7vK}-UUj.V&HWz  #Z' );
define( 'LOGGED_IN_KEY',    '^J&k0WmG;`<tG,DC|I*)= {J8{tqE=`b4O<OG(.y;TE.(0x+2_`Wu`qC!%_-01g*' );
define( 'NONCE_KEY',        'gvvrEwLIVa&e#~Q7MKl~B){/C%9vDdtCZ$5:}N3r=-J|(yn0UYzhbrt7+%=A0K&E' );
define( 'AUTH_SALT',        'QKUmqHSPF2lOdzBpY^*)hQ7,;?Xa$}VjMoy#AJ0k+N$b$a6QY-}0J#)AVqMU!l{A' );
define( 'SECURE_AUTH_SALT', '6[HxX{TARiwyNFF)0yR6e4i]rl{gY5MQ9eWcvOwd&W_fS{xyKwL}3jX9.>.w^e,G' );
define( 'LOGGED_IN_SALT',   'G#^,]r{#M$FF?BP[ZwnVyxDO0IiLKmP-uLDd %a9!x;f7ip2I?[^b/d.+_mTM<d[' );
define( 'NONCE_SALT',       'W,<wSei|F{3X#j _$ZKy8gyt&u(T,yGQ>wTih7$o0(BxGiE;jt94rk}X8p5b|?L`' );

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
