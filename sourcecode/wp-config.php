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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp6529975' );

/** MySQL database username */
define( 'DB_USER', 'wpuser47494' );

/** MySQL database password */
define( 'DB_PASSWORD', '5ueGqhgoqRRrQvC' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'HADh`_Ml]Mf 1hn/7kr?2B@&JZ8ZF$-~`mR,oXb%r4,kg8q;)4Zm<q(kVA9UsFG,' );
define( 'SECURE_AUTH_KEY',   'G/IL(3L?Ff|*?tFYT5TI155w`AOm$8`H`2{!&;6Z,Cq 1Hn+az@hV{^;A,V~k0H_' );
define( 'LOGGED_IN_KEY',     '[=X:=vcV6I$s$>e/d pKJZA6R:C<vI%s)@<&t961}MM /zf&L3,UNLFhWLZg!WX~' );
define( 'NONCE_KEY',         'Cg6U>Nbi5L-?($5F;>-ho_SiWwVQG:7f5/XY~s`?mVpKTLk_.P^V?:q] [fXj(qO' );
define( 'AUTH_SALT',         'OkIs}Ia}98DpDSi0r_M|7H,Cl}au8G{K99k9YVeGWRb}@Y;5 Bj#de>hq1ua3Hv.' );
define( 'SECURE_AUTH_SALT',  'ESUl,Cj=XT:rQ`U8e7>`?^yR+e,^.~S*3{nU!|mM=WBlG!A@Q8%(R|[2-G$/Z1nq' );
define( 'LOGGED_IN_SALT',    '!GQ#DPWkU+c,0fvi^NV@4)3xqy_)]x1VOto?1g4:}mt@L/ZAh`1THB>`;1K4(7gB' );
define( 'NONCE_SALT',        '1}DjD;uhQ9}V|EW4I,C-zwzC5bMBokg|j@d^F?W2?`[3Jl{aaBe;KHosG.4WMX|(' );
define( 'WP_CACHE_KEY_SALT', '%<;`f,5euDhmtqd>%[n8$k0^77{kYC0zCr 75dL;@:@&9qq87x0ld!HY@u6hKY^:' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
