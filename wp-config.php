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
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'DB_NAME', 'abdalsal_wp' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', 'breakaleg741' );
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
define('AUTH_KEY',         '=<@Ilj`,6rNE6:<9hr1k G||U4H<4(vlNFyrpb@c97jI-6>cE.D4KtS0GB}UvOz.');
define('SECURE_AUTH_KEY',  'eJ1jaj}B!vd[b&`:Ie+TBCnH,jzr)9URTO?={Z0~3)<Q*+JhK|Y^sbW+C0O.|i%v');
define('LOGGED_IN_KEY',    'GMEn>qR{ZJ_(gH=@JY/tT&qYAC Wrfx*~H2xBa,L2I|@R|GPB;? O+5olxl-y+;`');
define('NONCE_KEY',        '9pu68e0RE>uicnGCAlEE+|+9R.!Bg+)nME{N9Y_RbnRs<[-BVC}``[eY[~^@@Sw5');
define('AUTH_SALT',        'Tq4e? 1)+Y;]/_}d@N;;l<-Rlb=V7wN,1=$]@/$&K|a+&eAsc:=Bs[dckirwp~UX');
define('SECURE_AUTH_SALT', 'y+|8O Bk>Cq-E] 0g+YUVD+ +(;X>{PZ[QNdc&T:Lrh:.Kioq>FGB[i_o3Ml&PjW');
define('LOGGED_IN_SALT',   '#ykGfoZ!.vRk^-bK$4wkD4Y:UYDB#ieAF>VB)wG[L) f^xU :H[+&vPp!RB!e4_0');
define('NONCE_SALT',       'Bc$|d|&(*+Sl2~Dq%}9+}nzxpTvd}VKLO|][!-_1uO&vD+<R3G8%D_u|7uwN#SPx');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
