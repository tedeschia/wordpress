<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'entaweb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'bb92176ab8f16c');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '88a5da12');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'us-cdbr-azure-southcentral-f.cloudapp.net');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xY/xLtOMD$H:{z(2[4~oOK&#$]zL%eI/x?{t u;+t gK8K3^PtjNJ2@zI7,<!Ew@');
define('SECURE_AUTH_KEY',  'nQX~S 4rX.N/><S(%]/JmpXxZK={xj1Rk-<SaiKJ:[E,++[?f5@b;L%z*4#S[h-|');
define('LOGGED_IN_KEY',    ')N937BsWZWShGxxg6]=0?8-|#ENnJPE-Px*+z@-O:%;NPbwK<RJVxl7J|bn0bhdb');
define('NONCE_KEY',        'MZpk8jVR=hQrW]n*%!-29>v-=%YJS^c|BoB)`nQecJLqaeN wZghQutY50.Cr9pi');
define('AUTH_SALT',        'h7e7v2V_G`UO74PNfbd-ME7a~|I;k)1VTGh3[/]k|0,m}hp--jAa,pCwWuw;X-C!');
define('SECURE_AUTH_SALT', 'hg+FN9<PZA+,g#_z5{CGpyG$fAxReG4|Kg=V+qz=o-WD_ddZ9`O%{l,#?@XN$&.6');
define('LOGGED_IN_SALT',   'r0Oav1@7Uz|aP]1}Kutwdz]KdcRoG>OK-:%IZub~&>SvS88h<`5SIAOIEv(o9WN@');
define('NONCE_SALT',       'MAd$F@Q:UG!]rkl}/*~6Z$sTQwEs/NN8_P}1,upZT-Fwbx {d0=1%|l:B<[Ik+h2');
/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'public_';

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/*multisitio*/
define('MULTISITE',true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'entawebpublic.azurewebsites.net');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* ¡Eso es todo, deja de editar! Feliz blogging */
/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');





