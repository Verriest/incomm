<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'incomm' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'd;0T~8QInFIdb)h.WpeLQlEqawx XIT.6F.9`.R30<|9mMA>.%y@1a*$_Yp%:B-g' );
define( 'SECURE_AUTH_KEY',  '&QtmiJ-lim2Us;RKN6h}#Qa/ylfn;lm~VNA.->N8nSnEtx(1l[D1!cuWI981kdjp' );
define( 'LOGGED_IN_KEY',    '=3fo:nc~Gg*EJQ:O)(fqdM!LW.Mp:2$ j$E!>765PvXK:A+09p-,Q}gUcj9pkpy$' );
define( 'NONCE_KEY',        'js#JbHCJM:?DF ^+kCT3XwD<2l;20bN_:[@Mz0~o-|0}Ba/%ApoZ)yZcsPYYZnEc' );
define( 'AUTH_SALT',        '/4 %j$,!1<T,UHh+grIdm(h/6j/C#a!gYX@QDnZ)<u[1TGLEj4^aMmfa(&@HqQS,' );
define( 'SECURE_AUTH_SALT', ', G6n5$*MY-+)&Ro2,u_6?s0p[Ak4>&oRxW_XHZpUg0}]J-,_.90e[5l$U|Hu}p]' );
define( 'LOGGED_IN_SALT',   '*m!4a&`:]p1/VeDhFt><zyjzmHt4PnNFm:;OQ-e#%UmLzo4ey~[E_N_&IB1+8#ed' );
define( 'NONCE_SALT',       ')[5--PIS~t:;A`-yxsDl/n)q@hl)Fv(4W?@zen9.T:P@{:}|OqnQ(JOU]g<mxmrB' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
