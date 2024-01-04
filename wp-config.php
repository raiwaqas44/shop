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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Waqas2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'bC)cSF;WGoTG-n|VB7xF+6IJC8@=wg*9&#)u&+*K>CJ4%DYkVRe*j=P>/`ynPtc<' );
define( 'SECURE_AUTH_KEY',  'sMW,gYsG=w}CA/q^4jp85tt}Xu2n yNc9YOz$X)#~Ni<8&fxw:x<_A}i?r?5,*4d' );
define( 'LOGGED_IN_KEY',    'yxoEUVP-BORT}`Qmqe5U]=8+[sh6*xd_r!r@=CqLj|oE/RI{)j.~mTj&@r%;(|N`' );
define( 'NONCE_KEY',        'bELt5lL9pfxMJc{Lsx@r,mXbxPQllB{+>5!,jW6^SyOQf?gh6>-90y1H(V#T!5s:' );
define( 'AUTH_SALT',        '2s5FkT^PJnrG-fE1^X5l|gD;$<?>l~6V.G-8@MC{r@zC0iwycn3d ~bnn+-5V_C>' );
define( 'SECURE_AUTH_SALT', 'I!NQ;N$K>)-u m*ss?R!|F.)r:e4T(N8r$t_[kM<AjcvH66Z+$`W+Uj>T5<5gtxS' );
define( 'LOGGED_IN_SALT',   'T;W.!op/jEXgJ=/ZU^C1&~w[OeE1S<:E!h}LFN]?SXo2Qpi(=^x;)a8)%CygvR<S' );
define( 'NONCE_SALT',       '5XoS`@EdnnsasIEtg`)nL9c$COBoFJX$OOp)(V=A8z5}.#C?Pe.jI+Z%#T6?]<OS' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
