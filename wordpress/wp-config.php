<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressDb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',nEZ.?-P;fdm44Y$68-~9?EQ/Bi{Tt L!|ml)O^8jI|-{}R-,#`SlKK9wDnn|+M*');
define('SECURE_AUTH_KEY',  ']+J-|{ M*!#v?3eS#n0?L}{=zE5PFIroB-|9m|;_tC81vt]x{FXciN{f8;c|ce!(');
define('LOGGED_IN_KEY',    '+#@+}ga|-68G}>FWi?:4ld16%$YmBP@H@OMV/}D+NCCEScnDFEXpk|a9V5 &X-Ow');
define('NONCE_KEY',        'ywr|?Knb=)fC||R`<$Eyuf4ZQ1G|;[k`bC<Mn|7?(EVIEL5A^s!Vd[EB5~S31{_H');
define('AUTH_SALT',        'k3%Onc%hL?*@iTWF@;|_.|hrP-amY---dpiW19Eryr8a~*DBZZy|n/i|(WqF%J-^');
define('SECURE_AUTH_SALT', 'Wtw1LqLlw[E+L< Pqrh}fsrT-X<49?AS`BhvXJxCcK-/DKj+)`x<Itlk=| V?`FH');
define('LOGGED_IN_SALT',   '^l)#^f=|A0s|R~G%{^93M|j-ddSGwrn|4;w~SBKi@z})U*No<}+]wlneS7V,W%TO');
define('NONCE_SALT',       '5yxeFF2J|KhJg>vY5qgAG43v-z/V1Rv7?]U$rN!ph4Kn 3>GIMJ8rSB2Hky|gq~,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
