# ÉCHO DE LA PAIX MEDIA — Echo Paix News 1.1

Un thème WordPress à blocs pour une rédaction francophone en RDC et dans la région des Grands Lacs. Identité bleu profond, accent rouge pour le fil d’actualité, typographie éditoriale, une photographique, cartes de rubriques, espace vidéo et lecture longue.

WordPress 6.6 minimum, PHP 7.4 minimum ; utiliser des versions maintenues. Testé en intégration avec WordPress 6.8.3 et PHP 8.3. Aucune extension, compilation ou service distant requis. Les polices Newsreader et Manrope sont hébergées dans le thème, sous licence SIL Open Font License (textes inclus dans `assets/fonts/`). Le thème est sous GPL v2 ou ultérieure.

## Installer dans WordPress Studio

1. Télécharger **echo-paix-news.zip** depuis le dépôt GitHub et garder le fichier compressé.
2. Dans Studio, démarrer votre site et ouvrir **WP Admin**.
3. Aller dans **Apparence → Thèmes → Ajouter un thème → Téléverser un thème**.
4. Sélectionner le ZIP, installer et activer **Echo Paix News**.
5. Dans **Réglages → Général**, choisir Français, renseigner le titre et le fuseau horaire de la rédaction. La langue française de WordPress fournit aussi les traductions des commandes natives et des dates.
6. Dans **Réglages → Lecture**, sélectionner « Les derniers articles » pour démarrer simplement. Le modèle `front-page` prend en charge la une.
7. Ouvrir **Apparence → Éditeur** pour modifier l’en-tête, le pied de page, les styles et les modèles.

Installation manuelle : extraire uniquement le dossier `echo-paix-news` dans le répertoire `wp-content/themes/` de votre site Studio. Ne remplacer aucun autre thème. Le téléchargement « Code → Download ZIP » de GitHub emballe tout le dépôt : utiliser plutôt le fichier `echo-paix-news.zip` déjà fourni.

## Mettre à jour depuis la version 1.0

Sauvegarder votre site Studio et, si vous avez personnalisé les modèles, exporter ces personnalisations avant de continuer. Téléverser le nouveau ZIP par le même écran de thèmes, puis choisir **Remplacer la version actuelle par la version téléversée**. Cette opération met à jour les fichiers du thème ; les articles, médias, catégories et comptes restent dans votre base WordPress.

WordPress donne priorité aux modèles personnalisés enregistrés dans sa base. Si l’ancien accueil ou l’ancien en-tête reste visible, ouvrir **Apparence → Éditeur → Modèles**, sélectionner le modèle concerné, puis utiliser **Effacer les personnalisations / Réinitialiser** dans son menu d’actions (le libellé varie selon WordPress). Pour l’en-tête et le pied de page, retrouver les parties de modèles dans **Compositions → Gérer mes compositions → Parties de modèles** et réinitialiser uniquement celles que vous souhaitez remplacer. Cette action retire vos modifications de ces modèles : exporter celles-ci d’abord. Les articles et médias ne sont pas supprimés. Une simple mise à jour ne réinitialise jamais automatiquement vos modèles.

Après mise à jour, recharger la page avec **Ctrl+F5**. Le thème porte la version **1.1.0**, ce qui renouvelle aussi l’URL de ses styles.

## Logo, navigation et identité

Le monogramme typographique **ÉP** est inclus. Pour utiliser votre logo d’origine, sélectionner le bloc **Logo du site** dans l’en-tête et téléverser l’image depuis votre ordinateur. Le monogramme s’efface automatiquement lorsque le logo est présent. Le fichier original du logo fourni dans la conversation n’était pas accessible sous forme de fichier local ; il n’est donc pas incorporé dans cette archive.

La navigation est un bloc natif WordPress : menu mobile, sous-menu « Nos regards » et navigation clavier. Les liens de catégories livrés sont résolus par les API WordPress, y compris avec des permaliens simples ou une installation en sous-répertoire. Modifier ou ajouter vos liens dans l’Éditeur. Ajouter vos propres pages Contact, À propos, Mentions légales et Confidentialité selon les informations de votre structure ; aucun contact fictif n’est fourni.

## Contenus réels et rubriques

Le thème ne crée aucun article, compte ni catégorie automatiquement. Il ne publie jamais d’article. Sans contenu, une composition d’accueil présente le média et ses engagements ; les rubriques vides restent compactes. Dès que vous publiez, la une affiche automatiquement votre dernier article, son image et les trois articles suivants dans la colonne « À suivre ». Les dernières nouvelles affichent quatre articles avec pagination ; les rubriques présentent leurs trois dernières publications.

Créer les catégories dans **Articles → Catégories** avec ces slugs :

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

Un article peut appartenir à plusieurs catégories. Le fil utilise la catégorie `alerte`. Les articles apparentés partagent une catégorie avec l’article lu et excluent celui-ci. Les rubriques absentes ne sont jamais remplacées silencieusement par une liste de tous les articles.

Pour publier : **Articles → Ajouter un article**, saisir le titre et le texte, choisir une catégorie, renseigner une image mise en avant et son texte alternatif, puis utiliser le circuit éditorial habituel. Des images de 1600 pixels de large ou plus sont recommandées ; choisir un cadrage qui reste pertinent sur téléphone. Sans image, une carte affiche un repère graphique ÉP, jamais une photographie d’actualité inventée. Aucun visuel fictif de reportage n’est inclus.

Pour une vidéo, classer un article dans `videos` et insérer un bloc Vidéo ou un contenu embarqué dans son corps. La section vidéo affiche les cartes de ces articles ; la lecture se fait dans l’article. Les médias restent dans la médiathèque WordPress.

## Édition et rédaction

La composition **La une du journal — édition éditoriale** est modifiable avec le Site Editor. Les modèles utilisent notamment Boucle de requête, Auteur, Date, Catégories, Image mise en avant et Contenu de publication. Le seul petit bloc dynamique supplémentaire, **Partage de l’article**, fournit des liens Facebook, WhatsApp et courriel, sans pisteur ni script de réseau social. L’URL n’est transmise au service qu’au clic.

Contributeurs, auteurs, éditeurs et administrateurs conservent leurs permissions natives. Brouillons, articles en attente et publications programmées sont gérés par WordPress. Les listes publiques ne montrent que les articles publiés. Aucun système d’authentification ou stockage séparé n’est ajouté.

Le ZIP contient le thème et ses styles, pas les contenus ou réglages de votre site. Exporter ou sauvegarder le site Studio pour conserver articles, médias et personnalisations. Studio est un environnement local ; rendre le site public nécessite un hébergement et un déploiement.

## Validation

Voir `VERIFICATIONS.md` pour les contrôles effectués dans WordPress. Après installation locale, vérifier votre logo, vos menus, vos images et les modèles personnalisés existants. Les articles et illustrations de test sont restés dans une installation jetable, hors de cette archive.
