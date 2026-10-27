# Vérifications — version 1.1.0

## Installation utilisée

WordPress **6.8.3**, PHP **8.3** via WordPress Playground, base SQLite, Chromium réel. WordPress a été obtenu depuis son dépôt GitHub officiel pour éviter le téléchargement wordpress.org indisponible lors du premier essai. Le site de test est séparé du dépôt livré et de votre WordPress Studio local.

## Contrôles réussis

- Activation réelle : WordPress reconnaît le thème, sa version 1.1.0 et son type « thème à blocs ».
- **569 blocs** analysés par les composants JavaScript de l’Éditeur WordPress : aucun bloc invalide dans les modèles, parties de modèles ou la composition d’accueil.
- Accueil sans article testé dans Chromium à **375, 768 et 1440 pixels** : composition d’accueil affichée, états vides propres, polices locales chargées, aucun débordement horizontal ni erreur JavaScript.
- Accueil avec **18 articles de test publiés** : article principal correct, images réellement chargées, cartes de catégories, fil d’actualité, colonne secondaire et repli graphique pour les images absentes.
- Accueil alimenté à **375, 768 et 1440 pixels** : pas de débordement horizontal. Le sous-menu a été aligné à droite après découverte d’un débordement pendant les essais.
- Menu mobile : ouverture du dialogue natif WordPress et fermeture avec Échap.
- Article : titre, corps, auteur, date, image, trois liens de partage et articles apparentés affichés.
- Archive Afrique : uniquement l’article affecté à cette catégorie.
- Recherche avec résultats et recherche sans résultat.
- Pagination des dernières nouvelles : les articles de la page suivante sont différents de ceux de la première page.
- Page introuvable : modèle 404 affiché.
- Articles de test en brouillon, en attente et programmés : absents des listes publiques.
- Inspections visuelles des accueils réels sur ordinateur et téléphone. `screenshot.png` représente l’accueil vide fourni, sans articles de démonstration.
- Syntaxe JavaScript contrôlée et archive ZIP vérifiée, avec une seule racine `echo-paix-news/` et des contenus correspondant aux sources.

Les articles et les illustrations portant la mention « test » sont restés dans le site de validation. Aucun de ces articles, aucune base, aucun identifiant et aucune illustration de test ne sont livrés dans le thème.

## Limites

Votre installation Studio, vos éventuels modèles personnalisés, vos extensions et vos images ne sont pas accessibles depuis cette session. Ils doivent être vérifiés après remplacement du thème. Les modèles enregistrés dans votre base peuvent prendre priorité sur les nouveaux fichiers : suivre la procédure de mise à jour du README.

La navigation et les mises en page ont été contrôlées dans Chromium ; Safari, Firefox et les lecteurs d’écran n’ont pas fait l’objet d’une campagne complète. Aucun audit d’accessibilité certifié ou test de charge n’est revendiqué. Les liens de partage ont été vérifiés comme liens sortants ; aucune publication sur les réseaux sociaux n’a été effectuée. Les permissions des rôles restent celles de WordPress, sans mécanisme ajouté.

Le thème ne déploie pas de site public et ne remplit pas automatiquement votre rédaction. Les articles publiés et leurs images doivent provenir de votre WordPress.
