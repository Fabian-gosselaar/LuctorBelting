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

define('DB_NAME', '73468wordpress');



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
define('WP_HOME','http://localhost:8080/websiteluctorbelting');
define('WP_SITEURL','http://localhost:8080/websiteluctorbelting');



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         '{fM;*%zm]90g;Ep}tl&v(n/HG}q271*I/G+?Q*fz&.V9`WC)?VL9o:4Ca2kUcz@3');

define('SECURE_AUTH_KEY',  'u,Im^02RkZXjp>1LlWKh0d]q},lrmf]&W2Is93m9@v}&ax$(+if2>g#)eRca$DTv');

define('LOGGED_IN_KEY',    'AIRv%Jpto-?[2iJJNrYjA&12o^N>aPWmZL`Bo_2HQ+k/e]j6Db~0YT/]:`.#[uz2');

define('NONCE_KEY',        'G0JtyT+ksMdml:p=6o8bhq%A)[suIzOVF`<+:h4OLk[1#V;9LB!U5 #p[[RHd!lu');

define('AUTH_SALT',        '*UlJ;CM4[C1~#zb <8*mj*`~hW/0B2{)-vlo}HrH5/k/PAPIlQ.kv*.%xt|6O7SR');

define('SECURE_AUTH_SALT', 'WM:1%h *;E[pRZdOYr0/KBkIDd2nHMXfl;Uw218}o&EyNY[=bVsM@WtW~(mfaQ`&');

define('LOGGED_IN_SALT',   'T/B8_}ps<_@mYbiJGWDBJr:g}/e$+~=PaI!YB$^N7q6Y]e@qvk+hYx,smqtcP~ml');

define('NONCE_SALT',       ']YJ3i_QwT:Q^*8Kdgc6u9g6&%DyaTIe4g`J!;Nu!+MTUr&j}Ihsr-KJZ/C*cPmQD');



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



