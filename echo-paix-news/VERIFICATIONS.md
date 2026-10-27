# Vérifications — version 2.0.0

## Installation de validation

Installation WordPress réelle et isolée : **WordPress 6.8.3**, **PHP 8.5.10**, base SQLite, Chromium. Le site WordPress local de l’utilisateur dans Studio reste inaccessible depuis cette session.

Les contenus de validation comprennent **72 articles publiés** et des articles privés de test en brouillon, en attente et programmés. Les illustrations de validation portent une mention de test. Ces contenus, la base, les contrôleurs de test et les images de test ne sont pas livrés dans le thème.

## Contrôles réussis

| Contrôle | Résultat |
|---|---|
| Syntaxe PHP | Les cinq fichiers PHP du thème ont été analysés par `token_get_all(..., TOKEN_PARSE)` dans PHP. Le thème s’exécute aussi réellement dans WordPress. |
| Structure du thème | WordPress reconnaît le thème à blocs, sa version 2.0.0, ses modèles et ses blocs de présentation. |
| Blocs | **509 blocs** analysés par les composants JavaScript de l’Éditeur WordPress, sans bloc invalide. |
| Site Editor | La une s’ouvre dans l’éditeur ; ses **19 requêtes** sont présentes. La conversion d’une catégorie portable en sélection native est vérifiée, puis une modification de catégorie est effectuée dans l’état de l’éditeur, sans enregistrer de changement dans la base. Aucune erreur JavaScript dans cette vérification. |
| Accueil alimenté | Vérifié à **320, 375, 768, 1024, 1051 et 1440 pixels** : images chargées, polices locales disponibles, recherche visible, date d’édition française et aucun débordement horizontal. |
| Accueil vide | Vérifié à **375, 768 et 1440 pixels** : composition d’attente, messages de rubrique, recherche disponible et absence de débordement. |
| Navigation mobile | Ouverture au clavier, dialogue natif et fermeture avec Échap. |
| Choix de la une | Un article publié épinglé prend la première place. Un article privé épinglé est ignoré. Le sujet principal n’est pas répété dans les deux sujets secondaires. Sans article épinglé publié, le dernier article publié prend la une. |
| Fil chronologique | Pagination native : la page suivante présente d’autres articles. |
| Articles | À **375, 768 et 1440 pixels** : titre, chapô, corps, auteur, date, image, légende réelle du média, étiquettes, trois liens de partage et articles apparentés. L’article courant est exclu des articles apparentés. Pas de débordement. |
| Catégories | L’archive Afrique présente uniquement ses quatre articles publiés de test. |
| Recherche | Résultats et état sans résultat vérifiés. |
| Page introuvable | Véritable réponse HTTP 404 et modèle personnalisé affiché. |
| Édition des catégories | Une sélection native enregistrée dans la requête prend priorité sur le slug fourni par défaut. |
| Publication | Les marqueurs des articles en brouillon, en attente et programmés sont absents des listes publiques. |
| JavaScript | Syntaxe du script éditorial contrôlée et aucune erreur JavaScript dans les scénarios publics testés. |
| ZIP | Racine unique `echo-paix-news/`, intégrité vérifiée et comparaison exacte des fichiers de l’archive avec les sources. |

Les compositions RDC, Afrique / International et Politique / Économie ont également été inspectées visuellement avec plusieurs publications par catégorie. Les accueils sur téléphone et ordinateur ont été inspectés. `screenshot.png` montre l’accueil sans articles de démonstration.

## Tests non réalisés et limites

- Pas de test direct de votre installation Studio, de ses extensions, de ses médias ou de ses modèles personnalisés. Un modèle sauvegardé dans votre base peut masquer les nouveaux fichiers ; suivre le guide de remplacement avant de réinitialiser vos personnalisations.
- Pas de campagne complète dans Firefox, Safari ou avec lecteurs d’écran. Aucun audit d’accessibilité certifié n’est revendiqué.
- WordPress 6.6 et PHP 7.4 sont les minima déclarés ; ces versions minimales n’ont pas été exécutées dans cette session.
- Les transitions de rôles et la publication programmée à l’heure prévue n’ont pas fait l’objet d’un test de bout en bout. Ces mécanismes restent entièrement ceux de WordPress, et les contenus non publiés ont été contrôlés comme absents des listes publiques.
- Les destinations des liens de partage n’ont reçu aucune publication automatique ; aucune action sur un réseau social n’a été effectuée.
- Pas de test de charge ou de déploiement sur hébergement public.

Le thème ne remplit pas votre rédaction et ne déploie pas votre site. Il conserve les fonctions de contenu et de publication natives de WordPress.
