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
define( 'DB_NAME', '1655193548_h_louison_pro' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', '1655193548_h_louison_pro' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'LnlgTwKtk4OYzA5rOGtmN6usaZZoTGYV' );

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
define( 'AUTH_KEY',         'atE8JAZX!(k^_z9c;8~BkQG&U1WjDSE)|k0+`?dc:P.u8eRXloX_bnxM8u?=WSW_' );
define( 'SECURE_AUTH_KEY',  '>br$-FKMu61>w7p9e3|/K-*l)-OZ3^LqB/vOirt,pJqDRh/Z{*X)ti&+:ADed_V;' );
define( 'LOGGED_IN_KEY',    'U^@SK1W y2UAd-RVaQ>l:d5*w-;vl$v|Mg1B.N*.7&80jy=CwprvhcNcsIX_O>O0' );
define( 'NONCE_KEY',        'iG+8rB_^?QF+7LryUb]6;RW?!-s>#m-ZWj-r(U8){nw:L-X}9DEtZ]a>tr06xqgQ' );
define( 'AUTH_SALT',        'lJm|1@t|Gp>Ut 6/4f:M3wGK>#`M9gT)D]z1d.k??o.6vw01Lkvp$VR`Fb<I|{Bf' );
define( 'SECURE_AUTH_SALT', 'uYB*gDUJ>!?,R_Ll(Xh9<O>2/W^>6V>-( 3W6_vF$=_qavyycY]XTxLF_-8|UpoK' );
define( 'LOGGED_IN_SALT',   'JK7*Z$-Cx2E/mLN%$G54g]Byir}CtVkP7+tCF().MWDaOEUh630|g*D=</wtQpy^' );
define( 'NONCE_SALT',       '@l!!~N2[s(vMJp$wq=#MuM4eG3W?oEI unpx7&lWWSCgJ*v3N68.&Y[6.9jSOA>F' );
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
