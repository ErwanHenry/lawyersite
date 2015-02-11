<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lawyersite');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nTtKBt9-D!<l!7j<qjS6nbm.aH0?O9m6*j8^mr&16CpJuU7Uf?{W$MU($MiG[z,$');
define('SECURE_AUTH_KEY',  'mBrx/G][.V+{gXAP~BC0?O166b G6OQ%DX=$w+$`jX|2g`uE-6.Js77Z@`..2Jbd');
define('LOGGED_IN_KEY',    '.l@ws9rqjigIIGyw6,qMlB7N!|hnG`z6,1P6tC0o|l0Q(fxqFAT:1E8gy)iI$|Cd');
define('NONCE_KEY',        'aovVL@t#VvNc@9MIk QmP0v-IW:*~=ElpSW?o<7{Pgs7;A09!<]F<E,#_rKl^t5x');
define('AUTH_SALT',        'X?+m1&}/tXZ ,&DoiQ Qn(p3!zJBC5J46tqg*TogS5J>eN$1>g0U<kp+#RbKhXa,');
define('SECURE_AUTH_SALT', ',883$O3/q$gI|y9*>+7mc.RMZp243Se$x881rZ~frts;@QMGiEdDgf$JYsQinCkk');
define('LOGGED_IN_SALT',   'L|!-5.!j{!stP4u#8|)-hFR2YXhu<;`+s`~8v;3&Y~^!ZhwUrOL~[.<E#vw3gXF*');
define('NONCE_SALT',       'I|oxqVt4mszP(/t<#=4@0fHSK+pw]5$2bwM,:v+:k.vvXzU7V]D2@,Fscr[)tAE,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');