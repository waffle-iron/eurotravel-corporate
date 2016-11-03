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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eurotrv');

/** MySQL database username */
define('DB_USER', 'eurotrv');

/** MySQL database password */
define('DB_PASSWORD', 'VPmqz7Lnw5bwjQW7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_MEMORY_LIMIT', '64M' );
/*define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );
define('FS_METHOD', 'direct');*/

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*7D_%Cq,m5av!s,{h1+S(y?5Yk#JP|*TQ.eOL#v+Of&q:9$>.{Ezk^.wc!B!z,;I');
define('SECURE_AUTH_KEY',  'kfpv:aTj>D]xZMK2RASSy0[sV~]/6YBB}?dUJ,{FYJ>-}8RC!!=ZkCZ!@}uTp^n>');
define('LOGGED_IN_KEY',    'M=AIv@MOJk:D2GWk&ZeIkfX{-bE*HycS_@5.sr6X-6;0HkxU_c54Ji-B^ $r#VVq');
define('NONCE_KEY',        'M8@al<TRNB%a-L /ohND)cBaF*NmOhR,V%h! d,X?>*? #jc.6SYiwK*]?k,^`ur');
define('AUTH_SALT',        'YVQ@zuaYc2Nb;oK0{#F]uM8o3PEhk(Bzv/VMbjC`!I6ay0T3E[{jC3J$M6w&Jq9n');
define('SECURE_AUTH_SALT', '9oxUf/%>f]i1Zw-/8<)^;nGwV|{I_BSc~,tjv3za>Kh^u74?^7#VaQ:VRA}%ezGK');
define('LOGGED_IN_SALT',   'TGkj_M37 ,x-z~qhw)iM:*t*ojOf|irj~50@?_8Cxnfy~J9Qx9fuj:)ZAr@B0jNJ');
define('NONCE_SALT',       '::X,D%$Ds~TH-VOkAwsLZ!``/Gw|q:WA`FT#3NGCJ[7X,cv=Jzo+&$I2#Ih|itb=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'etv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
