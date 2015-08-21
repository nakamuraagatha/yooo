<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'yoo');

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
define('AUTH_KEY',         'h7BTE#LvT/cF~5:o1-<.HqbHb??*4Ru+$s9LwPW fBm :8ahDM0[][:e~9#EYDcd');
define('SECURE_AUTH_KEY',  'L*F(/5-HtF[K~]Qk<-<Z[vKioF*#BQ4qE{%y|JBb&dw _9y$QiHBM{vZq1Pw9+F&');
define('LOGGED_IN_KEY',    '.rP[tIkWo8P:F/S!s|e@!wYG~+?FC5t:>33RlF,7)1{rO6XGQNcYQgAOwE^SIJIA');
define('NONCE_KEY',        '}+J^h.&jE+~<lCr| tO55*0cQqI|U-A%ajf+P0siZu|6l.)VYYs,ulimY__aD[%?');
define('AUTH_SALT',        'LfYJ<itZ2uS%kXF}P!raz.P@!NFtuDGyg{pJ2y) FOcM.fDS^M%X6e;0lEA6dJ$`');
define('SECURE_AUTH_SALT', '+vIFr)P&A]=)Rnilnf?_i_RxUA0)|mC=R>XMs#7BNpI[w_arYO_9+3k,o`s}6t_f');
define('LOGGED_IN_SALT',   '~+zc0p0-Y[x<RQvnL+m(PR3UPl7Tcr4o :(%{bW|-:Uks]gp3eS#}:M02+OoA>[Y');
define('NONCE_SALT',       'aMWQJ[1EE/v)QG}0hW|oa@[q6?r}[Z_GCQIL[0<U5iS/qL{po1iU3dI`b0Nf)+0~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
