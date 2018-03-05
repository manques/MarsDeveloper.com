<?php

//Begin Really Simple SSL Load balancing fix
$server_opts = array("HTTP_CLOUDFRONT_FORWARDED_PROTO" => "https", "HTTP_CF_VISITOR"=>"https", "HTTP_X_FORWARDED_PROTO"=>"https", "HTTP_X_FORWARDED_SSL"=>"on", "HTTP_X_FORWARDED_SSL"=>"1");
foreach( $server_opts as $option => $value ) {
if ( (isset($_ENV["HTTPS"]) && ( "on" == $_ENV["HTTPS"] )) || (isset( $_SERVER[ $option ] ) && ( strpos( $_SERVER[ $option ], $value ) !== false )) ) {
$_SERVER[ "HTTPS" ] = "on";
break;
}
}
//END Really Simple SSL
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
define('DB_NAME', 'newco9fx_wp606');

/** MySQL database username */
define('DB_USER', 'newco9fx_wp606');

/** MySQL database password */
define('DB_PASSWORD', 'gS039p@ja-');

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
define('AUTH_KEY',         'svk8yqj9bg2aucgcnbrcui4cohh1zlxcyniwfpswtqan6mcqftkuydr9k0z1hojv');
define('SECURE_AUTH_KEY',  'btigu6bx0dciq67ewexlzidn94q1yno2g22lug4tzo6gmhxf0bc2umy9vmecnazz');
define('LOGGED_IN_KEY',    'sme5tjnc8xxjbc6pw8idlvg9iwbrw0gr1c4dornwoo2dclzw64zb9sazrtki6nzt');
define('NONCE_KEY',        '5ayuzoxprvt5vdgmgngbfa2xtjucwsr9gqkzahryomel4wh3adbe9vduslpigmao');
define('AUTH_SALT',        '5wwukslwhviocrfyarimi4eicjy1buyc6nywjpzylmgyus59arf6oxqgblsv03qo');
define('SECURE_AUTH_SALT', 'iteyagyw9jjf5rcov3uenabpndizmtbsi97z2k0grzxx6z4yot8qzjejebpatapj');
define('LOGGED_IN_SALT',   '7p2mcemb6znxzqoqflincebvpjm0cpif7uttsuq7ckvikcshvehvf1cynlihyjj9');
define('NONCE_SALT',       'ivvhrmopton4oargrfq0yelvultyxvd6rdrxl25ekygwph1oxg73cccafudj2pjn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppt_';

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

define('WP_MEMORY_LIMIT','256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
