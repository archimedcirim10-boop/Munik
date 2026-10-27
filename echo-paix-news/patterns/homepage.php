<?php
/**
 * Title: La une du journal — édition éditoriale
 * Slug: echo-paix-news/homepage
 * Categories: echo-paix
 * Inserter: yes
 */
?>
<!-- wp:group {"className":"echo-front-opening","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-front-opening"><!-- wp:group {"className":"echo-breaking","layout":{"type":"default"}} -->
<div class="wp-block-group echo-breaking"><!-- wp:paragraph {"className":"echo-live-label"} -->
<p class="echo-live-label">LE FIL</p>
<!-- /wp:paragraph -->
<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"alerte"},"className":"echo-query echo-query--ticker"} -->
<div class="wp-block-query echo-query echo-query--ticker"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-ticker-empty"} -->
<p class="echo-ticker-empty">L’essentiel de l’actualité, au rythme de la rédaction.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:paragraph {"className":"echo-eyebrow"} -->
<p class="echo-eyebrow">LE JOURNAL</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">À la une</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-lead","layout":{"type":"default"}} -->
<div class="wp-block-group echo-lead"><!-- wp:group {"className":"echo-lead-main","layout":{"type":"default"}} -->
<div class="wp-block-group echo-lead-main"><!-- wp:query {"queryId":2,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true},"className":"echo-query echo-query--hero"} -->
<div class="wp-block-query echo-query echo-query--hero"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":2} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":28} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:group {"className":"echo-welcome","layout":{"type":"default"}} -->
<div class="wp-block-group echo-welcome"><!-- wp:paragraph {"className":"echo-eyebrow"} -->
<p class="echo-eyebrow">LE MÉDIA DES COMMUNAUTÉS</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">L’information qui<br>nous rapproche.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"echo-welcome-description"} -->
<p class="echo-welcome-description">Depuis la RDC et les Grands Lacs, un regard indépendant sur l’actualité, les initiatives et les voix qui font avancer la société.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"echo-welcome-status"} -->
<p class="echo-welcome-status">Notre journal se prépare. Les premiers articles de la rédaction seront à découvrir ici.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"echo-welcome-link"} -->
<p class="echo-welcome-link"><a href="#nos-regards">Découvrir nos engagements <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-lead-side","layout":{"type":"default"}} -->
<div class="wp-block-group echo-lead-side"><!-- wp:heading {"level":2,"className":"echo-side-title"} -->
<h2 class="wp-block-heading echo-side-title">À suivre</h2>
<!-- /wp:heading -->
<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true},"className":"echo-query echo-query--compact"} -->
<div class="wp-block-query echo-query echo-query--compact"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:group {"className":"echo-discovery","layout":{"type":"default"}} -->
<div class="wp-block-group echo-discovery"><!-- wp:paragraph {"className":"echo-eyebrow"} -->
<p class="echo-eyebrow">DES SUJETS QUI NOUS RASSEMBLENT</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Une autre manière<br>de raconter l’actualité.</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>La paix, les droits humains et la participation citoyenne au cœur de notre regard.</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"echo-discovery-links","layout":{"type":"default"}} -->
<div class="wp-block-group echo-discovery-links"><!-- wp:paragraph -->
<p><a href="/category/paix-cohesion/">Paix et cohésion <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="/category/femmes/">Femmes et jeunesse <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="/category/actualites-rdc/">Initiatives locales <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section echo-latest","layout":{"type":"default"},"align":"wide","anchor":"dernieres-nouvelles"} -->
<div id="dernieres-nouvelles" class="wp-block-group alignwide echo-section echo-latest"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:paragraph {"className":"echo-eyebrow"} -->
<p class="echo-eyebrow">L’ACTUALITÉ EN CONTINU</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Les dernières nouvelles</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":4,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Articles précédents"} /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next {"label":"Articles suivants"} /-->

<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-manifesto","layout":{"type":"default"},"align":"wide","anchor":"nos-regards"} -->
<div id="nos-regards" class="wp-block-group alignwide echo-manifesto"><!-- wp:group {"className":"echo-manifesto-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-manifesto-text"><!-- wp:paragraph {"className":"echo-eyebrow"} -->
<p class="echo-eyebrow">NOTRE REGARD</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Des voix. Des solutions.<br>Des raisons d’avancer.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Au-delà des événements, nous racontons les initiatives qui rapprochent les communautés et construisent une paix durable.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-manifesto-pillars","layout":{"type":"default"}} -->
<div class="wp-block-group echo-manifesto-pillars"><!-- wp:paragraph {"className":"echo-pillar"} -->
<p class="echo-pillar"><span class="echo-pillar-number">01</span><strong>Paix &amp; cohésion</strong><span>Donner de la place au dialogue.</span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"echo-pillar"} -->
<p class="echo-pillar"><span class="echo-pillar-number">02</span><strong>Femmes &amp; jeunesse</strong><span>Faire entendre toutes les voix.</span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"echo-pillar"} -->
<p class="echo-pillar"><span class="echo-pillar-number">03</span><strong>Journalisme de solutions</strong><span>Éclairer les réponses, aussi.</span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Actualités RDC</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/actualites-rdc/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":5,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"actualites-rdc"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Afrique</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/afrique/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":6,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"afrique"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">International</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/international/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"international"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Politique</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/politique/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":8,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"politique"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Économie</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/economie/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"economie"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Société</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/societe/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"societe"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Sports</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/sports/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"sports"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Culture</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/culture/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"culture"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Sciences et Technologies</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/sciences-technologies/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"sciences-technologies"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Interviews et Reportages</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/interviews-reportages/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"interviews-reportages"},"className":"echo-query echo-query--cards"} -->
<div class="wp-block-query echo-query echo-query--cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"moreText":"Lire l’article →","excerptLength":18} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section echo-video-section","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section echo-video-section"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:paragraph {"className":"echo-eyebrow"} -->
<p class="echo-eyebrow">VIDÉOS & REPORTAGES</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Le journal en images</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/videos/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":15,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"videos"},"className":"echo-query echo-query--video"} -->
<div class="wp-block-query echo-query echo-query--video"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-section echo-community","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide echo-section echo-community"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:paragraph {"className":"echo-eyebrow"} -->
<p class="echo-eyebrow">NOS ENGAGEMENTS</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Au cœur de nos communautés</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-community-grid","layout":{"type":"default"}} -->
<div class="wp-block-group echo-community-grid"><!-- wp:group {"className":"echo-community-desk","layout":{"type":"default"}} -->
<div class="wp-block-group echo-community-desk"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Paix et cohésion</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/paix-cohesion/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":16,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"paix-cohesion"},"className":"echo-query echo-query--compact"} -->
<div class="wp-block-query echo-query echo-query--compact"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-community-desk","layout":{"type":"default"}} -->
<div class="wp-block-group echo-community-desk"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Femmes</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/femmes/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":17,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"femmes"},"className":"echo-query echo-query--compact"} -->
<div class="wp-block-query echo-query echo-query--compact"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-community-desk","layout":{"type":"default"}} -->
<div class="wp-block-group echo-community-desk"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Jeunesse</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/jeunesse/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":18,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"jeunesse"},"className":"echo-query echo-query--compact"} -->
<div class="wp-block-query echo-query echo-query--compact"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-community-desk","layout":{"type":"default"}} -->
<div class="wp-block-group echo-community-desk"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Gouvernance</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/gouvernance/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":19,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"gouvernance"},"className":"echo-query echo-query--compact"} -->
<div class="wp-block-query echo-query echo-query--compact"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-community-desk","layout":{"type":"default"}} -->
<div class="wp-block-group echo-community-desk"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Enquêtes</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/enquetes/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":20,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"enquetes"},"className":"echo-query echo-query--compact"} -->
<div class="wp-block-query echo-query echo-query--compact"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-community-desk","layout":{"type":"default"}} -->
<div class="wp-block-group echo-community-desk"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Environnement</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/environnement/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":21,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"environnement"},"className":"echo-query echo-query--compact"} -->
<div class="wp-block-query echo-query echo-query--compact"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"echo-community-desk","layout":{"type":"default"}} -->
<div class="wp-block-group echo-community-desk"><!-- wp:group {"className":"echo-section-heading","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-heading"><!-- wp:group {"className":"echo-section-label","layout":{"type":"default"}} -->
<div class="wp-block-group echo-section-label"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Fact-checking</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"echo-section-more"} -->
<p class="echo-section-more"><a href="/category/fact-checking/">Toute la rubrique <span aria-hidden="true">↗</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":22,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"echoNews":true,"echoCategory":"fact-checking"},"className":"echo-query echo-query--compact"} -->
<div class="wp-block-query echo-query echo-query--compact"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"echo-story","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"echo-story-image"} /-->
<!-- wp:group {"className":"echo-story-text","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-text"><!-- wp:group {"className":"echo-story-meta","layout":{"type":"default"}} -->
<div class="wp-block-group echo-story-meta"><!-- wp:post-terms {"term":"category","className":"echo-kicker"} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"echo-empty"} -->
<p class="echo-empty">Aucun article publié pour le moment. Retrouvez bientôt les nouvelles de cette rubrique.</p>
<!-- /wp:paragraph -->

<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
