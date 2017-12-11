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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'IiSKPcGJGdcIPUshadMMmanHcHevVYxbwYYulvMtULZVUTsfqe5XCxtLBM1vzkMufNnmVA564s0M+Of3CtjqWw==');
define('SECURE_AUTH_KEY',  'x8HXZpfzRMV7Pdrf4dvBphLry4wN+tk8zXyrzIj+HL7CHRNtZ6SxMSJBQI6Ttq4gkp7t0oYJVEMDix30kq05Ug==');
define('LOGGED_IN_KEY',    'HbPCP1LQ3EnkaBMJh6Mh2CKiYt3BQ3A7n1LjvO+iEQRj7xcKhKYdTjhBcAcFILkMRXz9IqJf5eFBHPWVR8DpyA==');
define('NONCE_KEY',        'b292DrVebXjTWuhxalMwLEkqeN3yO84rC1zh8cmJzGLo72luaMEQTCKWK+PX/8FP+aSO7Z5bhHHRzkAr01+dhw==');
define('AUTH_SALT',        '+xi49F1P8SVIQWyEL9MFUkj7GVWm6B51vMpFog/WTALA+yaeOqOV3WZJeflVNt79FRPUzE+PwhjlvjsH3kDmVA==');
define('SECURE_AUTH_SALT', 'U6rdKYUqYDsSCw7rECwUuW2aJxsyit8jc+3Am8mkPqWjBTUPG1em2JiBsHXoz4kTEh/wxRBMExrF2b/82BYQkw==');
define('LOGGED_IN_SALT',   'vFpMOVroG+05nLUoYKjVHOkhtQ6MhUYuBoPV6HnVWeniJyr4RHPqyyqCpfLJmLRC9/WP9P5qlYo0wPlLwwiUow==');
define('NONCE_SALT',       'yk1N1cgwMYj66+7P4JY4ZjaxxYgCpvm0kX56zttWfTZuexXhTOf/cm1pFb/4dcWi+uo0FOC2lOzaJxHQKFUGKg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
