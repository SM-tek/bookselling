<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress6' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/C_*:2MsM4T.ctzNRY_CJ21Y ^)0%K#SG1Au^QPZTT}ESorMJ3w8Ej!bQF!*dLgr' );
define( 'SECURE_AUTH_KEY',  '~z-e7CuydG*oK:W|h0Ci w;m@%>)S<*[0<43#Pd?%H(OEvdv<xTWa9$8O##cmq#;' );
define( 'LOGGED_IN_KEY',    '/xP|0yM[LhLsRnF%a[e$)EUc$Wf+uO)upX5.~?o})2mSf9BBM`*?p`wJ<2o$1twA' );
define( 'NONCE_KEY',        '2A$#Qa~Rl_=VpRF8#joR!RmJgKt>PG !)aIzP1haY@~{if+ uM)SCsB!mESg|r6b' );
define( 'AUTH_SALT',        'N^8%{t~{xmol/{}eV7:AWTRm~964hFmfXizZh$5C%mg( ,;?q<%z@[J9#[@]|3o(' );
define( 'SECURE_AUTH_SALT', 'q=zgT@FsZu8>g%$Yd.k*fIF7lzbh3-~lb5`xB:OrQquv/+3{0+Ug4W.et=G4RHuO' );
define( 'LOGGED_IN_SALT',   'cW:N{1#zFXrq%P<3.4IC8;`X)Wwjnz1L_!HVZ+)];T@mX*!N HPW7D!)GBWl^qkN' );
define( 'NONCE_SALT',       'ek.)Y?91_/^nl^oD9Y7F7-oQmC0y}B82_W.?ROM,6Djon[{P~g~rGoW;iP}h2fhe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
