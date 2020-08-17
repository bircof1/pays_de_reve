<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'paysDeReve' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SKL*~+.xm/(^c H$&v}F/P0$5jtjrY[(6l5`: f1~|:q2U!W>?o[8Ur<F`IAD!At' );
define( 'SECURE_AUTH_KEY',  'H/:IeTBW(7fdOXfrQu2Ojq1DSWG~}4y<#1s>XLVGR9^!0%}ld}X4a4^xsF(Fr-si' );
define( 'LOGGED_IN_KEY',    '`+Oun*a%L.+Ys!dwLqs9n~N|6Sn?;z}ZVcKFO??bav,!jSHYc--i?c]#&b1;CxK=' );
define( 'NONCE_KEY',        'E7:^}Z #!sHC+Wh!0p6(<!V@b3+=sV)(<Dqe[g}^T`B,Cs$$+w)c=(ZqC=dfd_!B' );
define( 'AUTH_SALT',        'XCYh3K5|Za/A>0Ypwi-VM!hB!1*[[9ml+vm,<cHY=;(SI#@hO2}6<9-.DO@^tE~0' );
define( 'SECURE_AUTH_SALT', 'c{IcLJMn?y2L/5Uf?SX-D2pKPc2Q8K3^v8Bc6if=$(]SVdvzy`Wgq>j=ZuT<zPt=' );
define( 'LOGGED_IN_SALT',   '^D*-)Ldv7VU8m3,I&~=V|_=$<Kc[-$442oU?=2#/DXCt:O%lJV4T524<4K.R_D6S' );
define( 'NONCE_SALT',       'q-[u.<$?r4jS-W%~q.;JfZoXd O;d]pyPv{32PG$$gxjrS)QA}aAT:g{;D|avi.z' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
