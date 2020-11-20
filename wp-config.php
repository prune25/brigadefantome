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
define( 'DB_NAME', 'brigade-fantome_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', '218943_' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Ed7h9uv12' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql-brigade-fantome.alwaysdata.net' );

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
define( 'AUTH_KEY',         'J$VAG%*|2cn</m[Jq}Qr9M&-:R!I55^m%!~Bv>7PZ{6eQ?xRYF;VMK9>%UgsVLea' );
define( 'SECURE_AUTH_KEY',  ';Q_1if2o^X8`2d!gK?/d FO) ThU_J&9PD7tOI}0+D-,jB{uVIdD8lk)mD)~IUHH' );
define( 'LOGGED_IN_KEY',    '_FGiAWR+|6gtY~$rI[OEO4m<=k ;}[:Whg(^N2-m0<U( Z_],O#E5vR.U_}S+U1J' );
define( 'NONCE_KEY',        ']xe]Y_ZJpIt,Hm}b-N988_@z~HuY!F,;e8-&86+2u^^&aQ,C[tGvgx;BL}pz-CU1' );
define( 'AUTH_SALT',        '1%l u<[r7xoK; )M*RxHj}x|YvBPh1$>r=cEo~SE_)&JWm&zNM}L6_#B:EM|5Q7.' );
define( 'SECURE_AUTH_SALT', '!?vW5boQ)Ov gP8jXPPI(]21F{CtnE@5!.@g:ZZ{70|a*Ch<eOy$]>X+~iYR[oI4' );
define( 'LOGGED_IN_SALT',   '8]$!t3)qYt;1UC:CGQ3PgJV%Ca7wJ%Z[c fu<UYb*;Gd(yI=<M[9Gq,45:j=7y=,' );
define( 'NONCE_SALT',       'h{&%}-79qakuBvI%T)p3-8V3FEl;@nc(Uy+*324&i5%}{BBE_ZLg afD8O#X4<,e' );
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
