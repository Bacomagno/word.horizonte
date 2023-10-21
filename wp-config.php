<?php
// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/y27dffwxj1fb/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END iThemes Security - No modifiques ni borres esta línea
/**
 * 
 * 
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
 
define('WP_ALLOW_REPAIR', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'unihoriz_2019' );
/** MySQL database username */
define( 'DB_USER', 'uhzwp2022' );
/** MySQL database password */
define( 'DB_PASSWORD', '}Bn%Tqe7pUEs' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H$|X?!Bvvm;yz;i6lJv?F4;vsJs_tmE$|cEC|R@eo=?9/T2VHF1`xB%;2wcH5;P%');
define('SECURE_AUTH_KEY',  'i~v|n~0hK)(t$76Hx:JL(?-shH<eLDq8-#6#Y@(m*jK=f,;|$=>:u,-*?&q@XT{A');
define('LOGGED_IN_KEY',    '/aB$~mz)|55^QR4$Lq6&Cq5ak|Hrs(<;b.]v^QdgA(vf8^3uVb[.UPVA_pf5MYwS');
define('NONCE_KEY',        's?me+HL#w3ZIPMb/}c]W+v-&oeTWopH#ufy h%G^O-n!zhtl|rf}j|0UsEPK)2Fa');
define('AUTH_SALT',        'V5#jvLWqm+Q[..V^Q0J-g*-DT<)YE^N|]td%D699BL9+%92EDd_^%^O/3KWx}kn ');
define('SECURE_AUTH_SALT', 'A+#Q6.nM:#%LsxAzG=Qiw`13*u8l)$}7:5/#xTGJPJYQ=b_W)VTPv}}:9B,#NB&S');
define('LOGGED_IN_SALT',   'ko?DKhy5jd]v=+ahnWobp*>]xPp4eBg5g705q/M6ulJrtOOA}m_-;ilu_{:#-?3-');
define('NONCE_SALT',       'vU]lZ&oc-;M%^+pUtF6-f^NZ%SO`v+]+Nf65qY-#Ca|zoO=2%bvq%JX/IXO^,]wU');
/**#@-*/
define( 'WP_MEMORY_LIMIT', '786M' ); 
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'uh_';
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
define( 'WP_DEBUG', false );
/* Multisitio */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'unihorizonte.edu.co');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
/* Reparar linkeado de imágen a nuevo directorio */
define( 'UPLOADS', '/wp-content/uploads' );