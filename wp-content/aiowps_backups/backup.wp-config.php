<?php
//upload image fix
// define( 'WP_MAX_MEMORY_LIMIT', '256M' );
// @ini_set( 'max_input_vars' , 3000 );


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

define('DB_NAME', "eo044zl56xul_wp1");



/** MySQL database username */

define('DB_USER', "eo044zl56xul_wp1");



/** MySQL database password */

define('DB_PASSWORD', "P.4eYcX9ew0dKmMpDWS58");



/** MySQL hostname */

define('DB_HOST', "localhost");



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

define('AUTH_KEY',         'A9Cyo13WibGeNGlFho8b7sxpFOdXPjFdsDyXB2j2omwJ3F9XXyKGXgp1gsHXGUnw');

define('SECURE_AUTH_KEY',  'CRBWvYbx4PgPFaOogMdDuO74qQ5UJmr7q5vTpcI3DG7ldVRNIFdSOeXej3WN5cn8');

define('LOGGED_IN_KEY',    'bKqmRC7bb8EGuqVQyUUowI2nk0telfZwZbeR4PgnJNiyQbzgxH3MMTMTnKiucEB1');

define('NONCE_KEY',        'ROGkUBMngMOmhaBz2ClgqcSoROc1JmEFgRFM7MOkZb3QRmoKaT8FjGpJB6vizdHf');

define('AUTH_SALT',        'KN08nbtCxwSODpNaoR7doDHDFQdXAsCwyebxOjHadGrxHNdGMU5ecrGtaaNPCbXV');

define('SECURE_AUTH_SALT', 'lFUjWnpccMhS4cDR2Ex9qlqmxQF1vLw1Mhu5eXGUWoYaarKavsVgN1WaXi737FCe');

define('LOGGED_IN_SALT',   'm3tP1KtGSrCF00AILV9BDKeSY8HLe8MkkefLXQnCUY2R5GEmZLAg6vCbfwcGdSBr');

define('NONCE_SALT',       'EyX9POzX0PGPmoexaUWpojpQcgUogfjSVI99LiNNSq78IS4JTRGE1rreedyG6hid');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);
define ('WP_MEMORY_LIMIT', '256M');




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



if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
          $_SERVER['HTTPS']='on';

define('FORCE_SSL', true);


define( 'DISALLOW_FILE_EDIT', true );

// define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');


