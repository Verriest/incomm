# incomm
Projet WordPress - Recettes
Ce projet est un site WordPress développé pour afficher des recettes culinaires en utilisant un Custom Post Type (CPT) "Recettes" avec des champs spécifiques via le plugin ACF, et une page d'accueil et des pages de détail créées avec le plugin Elementor.

# Prérequis
- WordPress 6.5.5 ou plus récent
- Plugin ACF (Advanced Custom Fields)
- Plugin Elementor
- Thème enfant (fourni dans ce dépôt)


# Installation

Cloner le dépôt :
`git clone https://github.com/votre-utilisateur/votre-depot.git`

Téléverser les fichiers sur votre serveur.

Importer la base de données :
Vous recevrez la base de données par mail. Utilisez phpMyAdmin ou un outil similaire pour importer le fichier SQL dans votre base de données WordPress.

Configurer le fichier wp-config.php avec les informations de votre base de données.

## Activer le thème enfant :

Allez dans le tableau de bord de WordPress, puis dans Apparence > Thèmes.
Activez le thème enfant.

## activer les plugins nécessaires :

Allez dans Extensions > Ajouter et recherchez Advanced Custom Fields et Elementor.
activez les deux plugins.

La page d'accueil affiche les dernières recettes créées. Assurez-vous que la page d'accueil utilise le modèle de page Custom Home Page dans les attributs de la page.

Page de détail d'une recette
Chaque recette peut être consultée en détail sur une page dédiée, utilisant le modèle single-recettes.php pour afficher les informations.

## Shortcodes
Vous pouvez utiliser un shortcode pour afficher des éléments spécifiques sur vos pages ou articles.
Voici le shortcode pour afficher les dernières recettes :

Utilisez le shortcode `[latest_recipes]` dans vos pages ou articles pour afficher les dernières recettes.

# Améliorations possibles

### Sécurisation de the_field
L'utilisation de the_field pour afficher les champs personnalisés peut être sécurisée davantage en échappant les sorties pour prévenir les injections XSS. Par exemple :
`echo esc_html(get_field('liste_des_ingredients'));`

### Amélioration du design UI/UX
Elementor :

Utiliser Elementor pour concevoir des pages plus interactives et visuellement attractives sans avoir besoin de coder.
Créer des modèles de page personnalisés et des sections réutilisables.
CSS et JavaScript personnalisés :

Ajouter du CSS personnalisé pour améliorer le style et l'apparence.
Utiliser JavaScript pour ajouter des interactions et des animations.


# Installation du site
Installation locale :

Utilisez des outils comme Local by Flywheel, MAMP, WAMP, ou XAMPP pour créer un environnement de développement local.
Suivez les étapes d'installation décrites ci-dessus pour configurer votre site localement.
Migration vers un serveur de production :

Utilisez des plugins comme All-in-One WP Migration ou Duplicator pour migrer facilement votre site WordPress vers un serveur en ligne.

# Contact
Pour toute question ou assistance, veuillez contacter mverriest.dev@gmail.com.

