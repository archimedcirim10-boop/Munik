# Vérifications — version 3.0.0

## Installation de validation

Installation WordPress réelle, isolée : **WordPress 6.8.3**, **PHP 8.5.10**, SQLite, Chromium. Le site local de l’utilisateur dans WordPress Studio n’est pas accessible depuis cette session.

Les contenus de validation comprennent **75 articles publiés** après ajout des trois publications de test de la catégorie Analyses et Décryptages, ainsi que des articles privés en brouillon, en attente et programmés. Aucun article, compte, base, image de test ou contrôleur de validation n’est inclus dans le thème livré.

## Contrôles exécutés et réussis

- **PHP** : analyse de syntaxe des cinq fichiers PHP avec `token_get_all(..., TOKEN_PARSE)` et exécution réelle du thème dans WordPress.
- **Structure** : thème à blocs reconnu, version 3.0.0, modèles et blocs de présentation enregistrés.
- **Blocs** : **564 blocs** analysés par les composants JavaScript de l’Éditeur WordPress, sans bloc invalide, y compris les blocs sociaux et le bouton natif du pied de page.
- **Site Editor** : la une contient **21 requêtes** ; conversion des slugs en sélections natives et modification d’une catégorie dans l’état de l’Éditeur vérifiées. Aucune personnalisation de modèle n’a été enregistrée par ce test. Les styles du canevas ont été vérifiés : Playfair Display et encre `#171717` appliqués.
- **Accueil alimenté** : tests à **320, 375, 768, 1024, 1101, 1180 et 1440 pixels**. Images chargées, polices locales disponibles, recherche visible, date française et aucun débordement horizontal.
- **Grille** : nombre de colonnes contrôlé à 375 / 768 / 1440 pixels : respectivement une, deux et trois. Les cinq sujets de soutien ne se répètent pas et excluent le sujet principal. Les auteurs natifs sont présents.
- **Accueil vide** : tests à **375, 768 et 1440 pixels**, sans débordement, avec composition d’attente et messages de rubriques.
- **Navigation** : ouverture du menu au clavier et fermeture du dialogue natif avec Échap.
- **Une** : priorité à un article publié épinglé ; article privé épinglé ignoré ; retour au dernier article publié en absence d’article épinglé publié.
- **Publication** : marqueurs des brouillons, articles en attente et programmés absents des listes publiques.
- **Dernières actualités** : pagination native présentant un autre ensemble d’articles.
- **Articles** : tests à **375, 768 et 1440 pixels** du titre, chapô, corps, auteur, date, image, légende réelle du média, étiquettes, trois liens de partage et articles apparentés excluant l’article courant. Aucun débordement.
- **Catégories** : archive Afrique limitée à ses quatre publications de test ; Analyses et Décryptages affiche ses trois publications de catégorie.
- **Édition des requêtes** : les catégories sélectionnées nativement prennent priorité sur les valeurs portables du thème.
- **Recherche et 404** : résultats, état sans résultat et réponse HTTP 404 avec modèle dédié.
- **Pied de page** : cinq icônes visibles sans faux lien et bouton de don désactivé sans adresse. Vérification du rendu configuré avec des URL de test dans la seule installation de validation : liens natifs générés et bouton de don activé. Ces adresses ne sont ni enregistrées dans le thème ni ouvertes vers un prestataire.
- **Pied de page responsive** : contrôles et captures à **375, 768 et 1440 pixels**. Lien « Notre mission » vérifié depuis un article : il revient à la section de l’accueil.
- **Polices** : conteneurs WOFF2 générés depuis les fontes officielles, avec contrôle du nom et de la couverture de caractères conservés. Aucun chargement de police distante.
- **JavaScript** : syntaxe vérifiée et aucune erreur JavaScript dans les parcours publics et éditoriaux testés.
- **ZIP** : racine unique `echo-paix-news/`, intégrité et correspondance exacte des fichiers avec les sources contrôlées lors de l’emballage.

Les accueils sur ordinateur et téléphone et les pieds de page ont été inspectés visuellement. La capture `screenshot.png` montre l’accueil sans articles de démonstration.

## Limites et tests non réalisés

- Les vraies adresses de profils sociaux et de dons n’ont pas été fournies. Les contrôles sont prêts à les recevoir dans le Site Editor ; ils ne sont pas présentés comme configurés. Aucun don, paiement ou contact avec un prestataire n’a été effectué.
- Pas de test direct de votre Studio, de vos extensions, médias ou modèles personnalisés. Les modèles enregistrés dans votre base peuvent masquer les nouveaux fichiers : suivre la procédure de remplacement du README.
- Pas de campagne complète dans Firefox, Safari ou avec lecteurs d’écran ; aucun audit d’accessibilité certifié.
- WordPress 6.6 et PHP 7.4 sont les minima déclarés ; ces versions minimales n’ont pas été exécutées dans cette session.
- Pas de test de bout en bout des changements de rôles ou de la publication à l’heure programmée. Ces fonctions restent celles de WordPress ; les contenus non publiés ont été contrôlés comme absents des listes publiques.
- Pas de publication réelle sur un réseau social, de test de lecture d’un fichier vidéo de la rédaction, de test de charge ou de déploiement public.

Le thème conserve les données et fonctions natives WordPress. Il ne publie pas automatiquement de contenu et ne rend pas le site Studio accessible sur Internet.
