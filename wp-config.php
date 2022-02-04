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
define( 'DB_USER', 'nicolas' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'nicolas' );

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
define( 'AUTH_KEY',         '..jXcF)5|[CEG5hfj8Af !w&VDZUEAN(uqz?%>} )CiyW!/$m^y*3IZEa[cNyDdC' );
define( 'SECURE_AUTH_KEY',  'qnZT>-x)%>0yR2Y?&$jF.N#xWeeRBS(i~U!} 8&g}ZIv<EB1&a@~`id+qHgUP7yg' );
define( 'LOGGED_IN_KEY',    'eY +h$UB8lP[W=_>F1LMU&;W*k*/,~dl|vlc3?*_Y[F*-4}6})nAgI] ,qF>DwL1' );
define( 'NONCE_KEY',        '8>?{b&1s$K/$9IC%,%5Kf:8~@eZF_>GL2G|INQ{hSVVqy{]6MNbJ3&Ce;5ExB*L<' );
define( 'AUTH_SALT',        'vWoW3l`%xn5Ofb]xH[C 2-Gt]n:H/m^QlWZGG{n9B/X?MUW!O0Q]`]3oav/bH_U]' );
define( 'SECURE_AUTH_SALT', 'ZnWCcSo>.w@{U1$a,mNX_eH!na]fgCmf4L2EQ#SQC4Kg>yrbwMH<f7`O*h^1r!%n' );
define( 'LOGGED_IN_SALT',   '2T9*aW|jp5#]r5>5p J?jWHL-VCMHcir@gWrv=z<lbBQv>8CGHB$8~V~6C|>scCI' );
define( 'NONCE_SALT',       'z^?,}Jx6GNi)}`@G=* uMHphhe{04+8>Jj}8T<rl_qfZZmHMCy h(D6%E8f;;W`:' );
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
