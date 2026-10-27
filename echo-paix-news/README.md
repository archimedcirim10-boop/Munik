# ECHO DE LA PAIX MEDIA — Echo Paix News 2.0

Thème WordPress à blocs destiné à une rédaction francophone. La version 2.0 adopte une composition de journal : grand titre de marque, photographie lisible, titres éditoriaux, bureaux de rubriques différenciés et navigation adaptée au téléphone.

WordPress 6.6 minimum, PHP 7.4 minimum ; versions maintenues recommandées. Validation réalisée sur WordPress 6.8.3 et PHP 8.5.10. Aucune extension ni compilation requise. Polices Newsreader et Manrope fournies localement, avec leurs licences SIL OFL dans `assets/fonts/`. Code du thème sous GPL v2 ou ultérieure.

## Installation dans WordPress Studio

1. Télécharger le fichier **echo-paix-news.zip** fourni dans le dépôt GitHub et le garder compressé. Le bouton GitHub « Code → Download ZIP » télécharge tout le dépôt : utiliser le fichier installable déjà fourni.
2. Démarrer votre site Studio et ouvrir **WP Admin**.
3. Aller dans **Apparence → Thèmes → Ajouter un thème → Téléverser un thème**.
4. Choisir le ZIP, installer puis activer **Echo Paix News**.
5. Dans **Réglages → Général**, choisir Français, installer les traductions WordPress proposées et régler le fuseau horaire de la rédaction. Renseigner le titre du site.
6. Dans **Réglages → Lecture**, choisir « Les derniers articles » pour une installation simple. Le modèle `front-page` compose la une.
7. Ouvrir **Apparence → Éditeur** pour modifier styles, modèles, navigation, en-tête et pied de page.

Installation manuelle : extraire le dossier `echo-paix-news` dans le `wp-content/themes/` de votre site Studio. Ne remplacer aucun autre thème.

## Remplacer la version 1.0 ou 1.1

Sauvegarder votre site Studio et exporter vos personnalisations de modèles avant de commencer. Téléverser le ZIP 2.0 par le même écran des thèmes, puis choisir **Remplacer la version actuelle par la version téléversée**. La version affichée doit être **2.0.0**. Recharger ensuite la page avec **Ctrl+F5**.

Les modèles enregistrés dans la base par l’Éditeur ont priorité sur les nouveaux fichiers. Si l’ancien accueil reste visible, aller dans **Apparence → Éditeur → Modèles**, ouvrir les actions du modèle d’accueil et utiliser **Effacer les personnalisations / Réinitialiser**. Le libellé varie selon la version WordPress. Pour l’en-tête et le pied de page, retrouver leurs parties de modèles dans **Compositions → Gérer mes compositions → Parties de modèles** et réinitialiser uniquement les parties que vous souhaitez remplacer. Exporter les personnalisations avant cette opération : une réinitialisation retire vos modifications de ces modèles. Elle ne supprime pas vos articles ou médias.

Le thème ne réinitialise aucun modèle automatiquement. Il ne modifie pas les comptes, contenus, médias ou permissions.

## Logo et identité

Le titre typographique du média fonctionne dès l’activation. Pour utiliser votre logo, ouvrir l’en-tête dans le Site Editor, sélectionner le bloc **Logo du site** et téléverser le fichier original depuis votre ordinateur. Il ne remplace pas automatiquement le titre du média ; vous pouvez adapter les deux blocs. La pièce jointe du logo dans la conversation n’étant pas disponible comme fichier source local, elle n’est pas incorporée au ZIP.

La barre d’édition affiche la date en français selon le fuseau horaire configuré dans WordPress. Les dates des articles et les commandes natives suivent les traductions WordPress installées.

La navigation et la recherche restent disponibles sur mobile. Modifier vos liens de rubriques dans le bloc Navigation. Le pied de page liste vos pages WordPress publiées : créer vos vraies pages À propos, Contact, Mentions légales et Confidentialité, et retirer ou renommer les pages d’exemple créées par WordPress si nécessaire. Aucun contact, réseau social ou document juridique fictif n’est ajouté.

## Rubriques

Créer les catégories dans **Articles → Catégories**, avec les slugs suivants :

| Rubrique | Slug |
|---|---|
| Fil d’actualité / alertes | `alerte` |
| Actualités RDC | `actualites-rdc` |
| Afrique | `afrique` |
| International | `international` |
| Politique | `politique` |
| Économie | `economie` |
| Société | `societe` |
| Sports | `sports` |
| Culture | `culture` |
| Sciences et Technologies | `sciences-technologies` |
| Interviews et Reportages | `interviews-reportages` |
| Vidéos | `videos` |
| Paix et cohésion | `paix-cohesion` |
| Femmes | `femmes` |
| Jeunesse | `jeunesse` |
| Gouvernance | `gouvernance` |
| Enquêtes | `enquetes` |
| Environnement | `environnement` |
| Fact-checking | `fact-checking` |

La rubrique « Paix & communautés » réunit les catégories `paix-cohesion`, `femmes`, `jeunesse`, `gouvernance`, `environnement` et `fact-checking`. Les étiquettes de chaque carte sont les catégories réellement affectées à l’article.

Le thème ne crée ni catégories ni articles. Une rubrique absente ou sans article affiche un message discret ; elle n’affiche pas silencieusement tous les articles du site.

## Choisir la une et publier

La une privilégie le plus récent des articles **publiés et épinglés** à la page d’accueil avec l’option native WordPress. Sans article épinglé publié, elle utilise le dernier article publié. Les deux sujets secondaires excluent le sujet principal. Le fil « En continu » reste chronologique et paginé. La catégorie `alerte` alimente le bandeau d’actualité.

Pour alimenter le journal : **Articles → Ajouter un article**, saisir titre, texte et catégorie, choisir l’auteur selon vos permissions, ajouter l’image mise en avant et son texte alternatif, puis suivre votre procédure de publication. Un résumé manuel dans le champ **Extrait** améliore la présentation du chapô et des cartes. À défaut, WordPress génère un extrait depuis le contenu.

Les brouillons, articles en attente et articles programmés ne sont pas affichés publiquement par les requêtes du thème. Les rôles WordPress conservent leurs permissions natives : le thème n’authentifie aucun utilisateur et ne publie aucun article automatiquement.

Pour les vidéos, classer les articles dans `videos` et placer un bloc Vidéo ou Contenu embarqué dans leur contenu. La lecture se fait dans l’article. Les portraits sont utiles aux entretiens, mais toutes les images restent gérées par la médiathèque WordPress.

## Images et lecture

Utiliser des images correctement licenciées, de préférence 1600 pixels de large ou davantage pour les sujets principaux. Vérifier le cadrage sur téléphone. Les compositions utilisent des proportions différentes selon la rubrique ; les photographies principales des articles sont présentées sans recadrage imposé.

Renseigner le champ **Légende** du média pour afficher la légende et le crédit photographique sous l’image de l’article. Ne pas utiliser le texte alternatif comme champ de crédit : il sert à décrire utilement l’image. Une carte sans image reçoit un repère typographique neutre, jamais une fausse photographie.

Les pages d’article comprennent catégorie, titre, chapô, auteur, date, image, légende éventuelle, corps, étiquettes, partage et articles apparentés. Les articles apparentés partagent au moins une catégorie et excluent l’article courant.

## Modifier le Site Editor

La composition **La une — rédaction Écho de la Paix** fournit les blocs de l’accueil. Les requêtes, leurs mises en page et les en-têtes de rubriques sont modifiables dans l’Éditeur.

Les catégories sont résolues par slug pour être portables entre installations. Dans l’Éditeur, le script du thème les convertit en sélections natives pour l’aperçu. Toute catégorie ensuite choisie dans les réglages natifs de la Boucle de requête prend priorité lors de son enregistrement. Une notice signale les catégories absentes. Le sujet principal conserve sa logique éditoriale d’articles épinglés.

Les petits blocs « Date de l’édition », « Légende de l’image » et « Partage de l’article » sont déplaçables dans le Site Editor. Leurs données viennent des API WordPress. Aucun service de partage n’est appelé avant le clic du lecteur. Aucun script externe ni police distante n’est chargé par le thème.

## Fichiers et sauvegarde

- `theme.json` : palette, polices locales, dimensions et réglages de styles.
- `templates/` et `parts/` : modèles et parties de modèles à blocs.
- `patterns/homepage.php` : composition éditoriale de la une.
- `assets/editorial.css` : système visuel et mises en page responsives.
- `assets/editorial.js` : blocs de présentation et intégration native des catégories dans l’Éditeur.
- `inc/` : requêtes, liens et rendus dynamiques WordPress.
- `DESIGN.md` : audit et direction approuvée.
- `VERIFICATIONS.md` : contrôles réalisés et limites.

Le ZIP contient les fichiers du thème. Vos contenus, médias, réglages et personnalisations de modèles restent dans la base et les fichiers de votre site : sauvegarder le site Studio complet pour les conserver. Studio est local ; un hébergement et un déploiement sont nécessaires pour rendre le site public.
