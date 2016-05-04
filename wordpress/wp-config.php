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
define('DB_NAME', 'testeGit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#-NU|,|8hxCMs}Ki@jxKn7-dk^lt-zW]ey_J[PDaH)mQY|I4P6G{T;~{*(NJvV<R');
define('SECURE_AUTH_KEY',  'ml^!N]a3i~L/nAKOu-I+g:GPqUq6%Ee]ef!pM|e?GE&*)BJ IxhCjqa<<sNL4MS+');
define('LOGGED_IN_KEY',    'nc-e4~SCSa$W}iH50Sfv{~b658x{/;bPsyJr!`*f:UM_c_T;#yQY0gq/tQ$5|/Qg');
define('NONCE_KEY',        'o[m.W(u|x}@nH|Sa?clf>7auZOC;If`fsvG}7/)Ro}@Dr9R8@IJ?[#en`L0wz*+P');
define('AUTH_SALT',        'a}<hN>fJPUPDW82|whP<W42e4i3~K([%K3u+E;mi~X~o/P%67En<-A-=vEH.OfT^');
define('SECURE_AUTH_SALT', 'iCYa9FN=C+Od3}WPCX`2^C34?XPXue|ni%u;%#/xS5-4){2l+W/OIuB8]*Y 3k[2');
define('LOGGED_IN_SALT',   '%qEc/9}0AF-KjG*Mf40`sBDM.`3:Cus|Eve?cHPQlvjudq8uYdMO$.i_%/]|d+~a');
define('NONCE_SALT',       '}^n2j+[tk{qL+S^z*!Ca-Y;=dR$ tulh)q.U,eDz9](5:in`Gskg+^QZ``@Mra-v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
