<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */


// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp64\www\hetic\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'p1hyua7y4f11mazs');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'k6s8u4f8w3u2g46v');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'vrs0vyi5lknzn2ig');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'nr84dudlpkazpylz.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B2__4h!u[-%WwwL~dje=j<OtlpFrN .hZO^F|D~hMItEbO@af<Yrf`4dOv(8[01j');
define('SECURE_AUTH_KEY',  'Jj}?cJ)tlmEXX8IsA.+*;:],]u9HdQ}_Z$Oby BuuA>EC^?$Xt-VGk.4x:&r~wR/');
define('LOGGED_IN_KEY',    'v!<CZQQyA2Q||Y}ao[2Sf$p)b^6`POkF7thcczV]naqt`xI3Zh4ra8|d[YexZ@_g');
define('NONCE_KEY',        ' pA^%OXF9<p5L/B#O6mYfr9<x6.8laf~b)z~oF.7Lt>LuLWZVGyQDCn^4&kw[: 5');
define('AUTH_SALT',        '2oGKCbhhD[P(*Moj/cz#!./HHS69M=j;~UTe <8wAG]lK5HQ]}od?q+/#`~1c8@?');
define('SECURE_AUTH_SALT', 'yO;0v7Wyi7/[&cr_E8G475oHc#n_vyHrLVHRjG]ya:mr]s)W_$#Rj<Mv%(LT@-*f');
define('LOGGED_IN_SALT',   '5@-f(Tw}*]pD8P<XSe5m/Wy{G<Z uM,W3]n.+_4miK,%F[XDT!tgkHsT84/[=8_D');
define('NONCE_SALT',       '`ll_RgPl(Ot=f;M>ewBIpj<Q3>~BO/Ss4YBQ1_q)`u.$Zz=w|I D7ox3p&}L}u;~');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'sdds_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');