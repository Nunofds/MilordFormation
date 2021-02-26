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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'J2>ElAI8<(@l9iBOxm|9~,3}`#3nsF`+^jw/=BT3JWSH>%!mO>PC-=T9QV>oNVcE' );
define( 'SECURE_AUTH_KEY',  ';W:z=ziE]#@}~l>jW/ER+*_8i!MG5;9oH/Er,8(R2KUpxrtKQ<<Nf$czh@|VS/Ko' );
define( 'LOGGED_IN_KEY',    '3GkbkZw_#NSen@,&0Yb]kbVd(`RW:^!)YX^)ewh])}2~2H[{tk$m3kslq<!CiY@a' );
define( 'NONCE_KEY',        '-3~sq^ll}UL/v5;}O)YmUk[fA2pv$^24apllQX7?P>=Rh(JI8AB$EMa:2H .6d<~' );
define( 'AUTH_SALT',        'n]/ iJBEKf~1rO<2!)DxiijHjLs?$d%Bw,lIZSA72%D&ANB,-^4S^|k?j$rL}y}#' );
define( 'SECURE_AUTH_SALT', 'ikivu*RDwTVD3ykUAhshTq^(j]bb|-H@t&F[P1XJ5`HF&:pIt{vhc2GOiZ 7`|&t' );
define( 'LOGGED_IN_SALT',   '=N.8Lq&6enMXa1B~qteqD_q.*.bzz6&<<^F0|EO]^/<2l_^VSdE~$1uMPA8`6bOm' );
define( 'NONCE_SALT',       'Iypi]G=~EGG!_:E#ZlU!<N|FFL;>@LpqbV -n2Jv/&F2N0^|Sc(8}Vyq=3p617Uv' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
