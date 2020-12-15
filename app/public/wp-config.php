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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BlRRlM4VSBKS5+SSYYnLsd9P3M2fvVnzT3IgjuFFZU2UYmDnOl16WQ+XSB6eR720a8ZsRqowmd2tkrB/NaOkOg==');
define('SECURE_AUTH_KEY',  'EinkYV+dt7/ZBuL0zInDG/3WfcpgHD7WUy/c+aIc0Br2dPGPElEppvN5ml3IBTcQ5AvOGL+nhTlTGANSl2aZ5Q==');
define('LOGGED_IN_KEY',    'k7do3U9ID7Se3sk7fzlGiEc0CfSlFXO/QA6IR7vOzU9pxluJAd0ojO/W3y3J7L66C3LxzycAcXI7q8wjcQPVyg==');
define('NONCE_KEY',        'dkK12IEZYv9lCAI85MgDsjeurBW8TR5v40Fc3JWc7Ncv9CHDfr27K02JxamZ+u2OQnH4TaX0i8Q0vn5qZTZh7Q==');
define('AUTH_SALT',        'xAyZB/IWvARieQR45zLwtpSTohVsIMr9DkeinRza/NX+FwKzgzCvV9zjG8kivZI+GTxZqgzuHSNWiaQG/Qdt8A==');
define('SECURE_AUTH_SALT', 'nGbVmCWwf/GLYu/Po6N7e6kWqismqmpSP+ii1fPhpo4om+X6Q2LKoVeNEJucow6E0atrBDOxkoZ5qUIh+Ux+wQ==');
define('LOGGED_IN_SALT',   'miAL7Ar+tLVhFvw81IGa8GboF++bCdKKeP2P5ba5mqJurn2+pGiYmD3SlrLlY4tQ9abP0Sb34zj45bWr8aiuWw==');
define('NONCE_SALT',       'NSqQbe2Yd6MtaNcjQo1HGngxLlgcGm4XfmAGIC55vYRmJ43k4z91uLhN/DoTmU0ILErVm4TeCm05y9hKBmFIRg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
