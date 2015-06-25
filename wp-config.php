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
define('DB_NAME', 'fine-interior');

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
define('AUTH_KEY',         'T.PeicGA-c?==kCSC)mr).aQFvHZ{1_)CdGx(>IOy~w`Y]]20}mKQd(T7s27]Os6');
define('SECURE_AUTH_KEY',  'uW;~rc-G$rZvIc|bsm5]~TuH72?bBb3?9R[IwUZ0d8n T#;B,..n!pI:<_BJ!g9:');
define('LOGGED_IN_KEY',    '!mH~.A_+nk18@>GRr^dOoEq+*62xHcLmx+|B_BD{_O]cHP+R5lL~Xq{Dtw-i~YxU');
define('NONCE_KEY',        '&IN< vAoK-U#mpXfSX }{)e.Vdh9IS<wq66tVKVIOPA k$+#):*(y@x@a?J{hVVx');
define('AUTH_SALT',        ']W3VQ,#2Kv/Gx^]VF5a2-EQ=@0n+p|%kBx+W(6UVp#K/(hSM(Y!SRBg+coe5Zw/}');
define('SECURE_AUTH_SALT', '@cI5v3/&u6t)UlUvUTP*U+k~ `Ei{zaXD)&Smh>P?!0%#-G+qAO)%_sy?!M+c+!y');
define('LOGGED_IN_SALT',   'R<Fb3Grduq%ATtc|p-Yk[vV6)Ym/qC~WId1w&44BNAHnsz+;|u~(7e^=|$u<M~R/');
define('NONCE_SALT',       'Q=Ts^cnpnsEEv%$$wnK-det -+jGH+uBYMN%!A!z|S=UF-?|1s6F ,2&:8Ro?Ext');

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
