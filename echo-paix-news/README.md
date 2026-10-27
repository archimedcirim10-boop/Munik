# ECHO DE LA PAIX MEDIA — Echo Paix News

Thème WordPress à blocs, version 1.0.0. WordPress 6.6 minimum, PHP 7.4 minimum (versions maintenues recommandées). Licence GPL v2 ou ultérieure. Aucune extension, police distante ou compilation nécessaire.

## Installation dans WordPress Studio

1. Démarrer votre site dans Studio et ouvrir son administration WordPress.
2. Aller dans Apparence → Thèmes → Ajouter un thème → Téléverser un thème.
3. Choisir `echo-paix-news.zip`, installer puis activer **Echo Paix News**.
4. Dans Réglages → Général, choisir Français et le fuseau horaire de votre rédaction. Définir le titre du site.
5. Dans Réglages → Lecture, choisir « Les derniers articles » pour un démarrage simple. Le modèle front-page définit la une du site.
6. Dans Apparence → Éditeur, modifier l’en-tête, le pied de page, les styles et les modèles. Ajouter le logo fourni dans le bloc Logo du site de l’en-tête : le fichier original doit être téléversé dans la médiathèque. Il n’est pas inclus dans le ZIP, la pièce jointe du chat n’étant pas disponible comme fichier source local.

Installation manuelle possible : extraire le dossier `echo-paix-news` dans le `wp-content/themes/` de votre installation Studio, puis activer le thème. Ne remplacer aucun autre thème.

## Rubriques et contenu réel

Créer les catégories dans Articles → Catégories, avec les slugs exacts suivants. Le thème ne crée ni articles ni catégories automatiquement et ne publie jamais de contenu.

| Rubrique | Slug |
|---|---|
| Alertes du fil d’actualité | alerte |
| Actualités RDC | actualites-rdc |
| Afrique | afrique |
| International | international |
| Politique | politique |
| Économie | economie |
| Société | societe |
| Sports | sports |
| Culture | culture |
| Sciences et Technologies | sciences-technologies |
| Interviews et Reportages | interviews-reportages |
| Vidéos | videos |
| Paix et cohésion | paix-cohesion |
| Femmes | femmes |
| Jeunesse | jeunesse |
| Gouvernance | gouvernance |
| Enquêtes | enquetes |
| Environnement | environnement |
| Fact-checking | fact-checking |

Les boucles WordPress affichent uniquement les articles publiés. Une catégorie absente ou vide produit un message d’attente. Un article peut appartenir à plusieurs catégories. Le fil utilise `alerte` ; l’article principal est le plus récent, les deux suivants apparaissent à côté. Les dernières nouvelles sont paginées ; chaque rubrique affiche ses trois derniers articles. Les articles apparentés partagent au moins une catégorie avec l’article courant et excluent ce dernier.

Ajouter un titre, une image mise en avant, un texte alternatif utile et une catégorie à chaque article. Pour la rubrique Vidéos, créer des articles classés `videos` et insérer un bloc Vidéo ou Contenu embarqué dans le corps. La une affiche leurs cartes ; la vidéo se lit dans l’article. Les images restent facultatives.

## Personnalisation et rédaction

Tous les textes publics livrés sont en français. Les dates, les textes natifs et les commandes WordPress suivent la langue choisie dans les réglages. Remplacer ou compléter les liens de navigation dans l’Éditeur. Les liens de catégories fournis sont résolus par WordPress, même avec des permaliens simples ou une installation en sous-répertoire. Ajouter vos pages Contact, À propos, Mentions légales et Confidentialité selon vos informations réelles ; aucun contact fictif n’est livré.

Les modèles sont composés de blocs natifs, notamment Boucle de requête, Image mise en avant, Auteur, Date, Catégories et Contenu de publication. La composition « Une et rubriques du journal » peut être insérée et adaptée dans l’Éditeur. Le petit bloc dynamique `echo-paix/sharing` fournit des liens Facebook, WhatsApp et courriel sans script ni suivi externe. Il est déplaçable dans l’Éditeur et affiche les liens réels sur le site. Les liens de partage transmettent l’URL uniquement après un clic.

Le thème respecte les rôles WordPress : contributeurs, auteurs, éditeurs et administrateurs conservent leurs permissions natives. Utiliser Brouillon, En attente de relecture et Planifier dans l’éditeur d’article. Seuls les utilisateurs déjà autorisés par WordPress peuvent publier. Aucun compte, système d’authentification ou stockage séparé n’est ajouté.

Les modifications de modèles enregistrées par l’Éditeur résident dans la base de données et prennent priorité sur les fichiers du thème. Exporter ou sauvegarder le site Studio pour conserver articles, réglages, médias et personnalisations ; le ZIP du thème seul ne contient pas ces données.

## Vérification après activation

- Tester l’accueil sans article, puis avec des articles publiés et des images de formats différents.
- Créer un brouillon, un article en attente et un article planifié : ils ne doivent pas être listés publiquement.
- Tester chaque catégorie, les résultats de recherche, une recherche sans résultat et une URL inexistante.
- Ouvrir un article et vérifier auteur, date, contenu, partage et articles apparentés.
- Tester le menu au clavier, le bouton mobile, les contrastes et les mises en page à 375, 768 et 1440 pixels.
- Vérifier la pagination avec plus de six articles et les blocs dans l’Éditeur de site.

Aucun fichier du cœur de WordPress n’est modifié. Aucun article de démonstration n’est inclus.
