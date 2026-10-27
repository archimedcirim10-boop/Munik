# Vérifications de livraison

## Effectuées

- Syntaxe PHP des deux fichiers PHP vérifiée par `token_get_all(..., TOKEN_PARSE)` sous PHP 8.3.33 (WebAssembly).
- JSON de configuration décodé ; fichiers obligatoires et métadonnées contrôlés.
- Les sept modèles, les deux parties de modèle et la composition d’accueil ont été analysés avec le parseur de blocs officiel de WordPress 6.8.3, sans contenu non analysé inattendu.
- Trois contrôles ciblés de la logique des requêtes : catégorie existante, catégorie absente, articles apparentés et exclusion de l’article courant. Les API WordPress étaient simulées pour ces contrôles ; ils ne constituent pas un test d’intégration WordPress.
- Six contrôles Chromium sur une maquette HTML isolée reprenant les styles du thème et la bibliothèque de blocs WordPress : états vides et alimentés à 375, 768 et 1440 pixels, sans débordement horizontal. Inspection visuelle d’une capture mobile vide et d’une capture de bureau alimentée. Les contenus de test sont restés hors du thème et du ZIP.
- Intégrité ZIP vérifiée ; une seule racine `echo-paix-news/`.

## À vérifier dans WordPress Studio

L’installation WordPress de l’utilisateur est locale. La tentative de lancer WordPress Playground dans l’environnement de livraison n’a pas abouti : téléchargement WordPress bloqué par l’accès réseau (HTTP 403 à wordpress.org). L’activation réelle, les requêtes en base, la pagination, les images, le menu mobile natif, la validation des blocs dans l’Éditeur et les permissions éditoriales n’ont donc pas pu être testés en intégration.

La vérification visuelle isolée n’atteste pas du rendu complet de WordPress ni du fonctionnement du menu mobile. Suivre la liste du README après activation. Aucun article, compte, média ni catégorie n’est créé automatiquement. Aucun fichier du cœur ni thème existant n’a été modifié.
