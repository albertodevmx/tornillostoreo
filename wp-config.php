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
define('DB_NAME', 'tornillostoreo');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'imb090503');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'Q+o(UTt~4Rm9@hx>O`EZ@5SB%Ft}#}bE%6 ?KWak@xvLJQu0kUeA36mZ&re5 (T-');
define('SECURE_AUTH_KEY', '1 ;5gdnTkg_lKdDDVcfVuE~jjSV`UQxk$K}Za(CUkbHk`{k$8`IN:HU ]EWSW9]}');
define('LOGGED_IN_KEY', 'E-0^1U&Okx[?3u?$Z@UL3[ne0DX<*q4(O*#w%fGDa5d98Ld!>jy|:gU>7yi Lwyy');
define('NONCE_KEY', 'Ypv3CM-V!*bQ|HTH25/QLzpw~0]lKwd@Gb$S9MlMn*MMS|?r++JhH`{?i `G/RwS');
define('AUTH_SALT', '6~9+)5BZ6Yfu`rXS{f|_3t]ak0P4 Avsy)(6j|8|0arO&wWv7,kkP~F_LH2OHha/');
define('SECURE_AUTH_SALT', 'bgaW^^>(;}g01@m)%>AaovZ)k29zv._JL Y-YG-tw(H,7V++SJUC_g&WL}C|fMr`');
define('LOGGED_IN_SALT', '_mKM{L.[k$cMdt!J~Z*8I@@%cnD(:qhp$o3Bw},Tog?yQrtu#X-O>%&.Q^~h7FKS');
define('NONCE_SALT', 'BO6-L~4{r9277~VFad.#&D*bkn&eUO6pKFC8M^%)}kWUvM9]k{mce<)gt0H~G^%e');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );
ini_set( 'memory_limit', '256M' );

