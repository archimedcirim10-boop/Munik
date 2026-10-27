/* global wp */
(function () {
  "use strict";
  var el = wp.element.createElement;
  var previews = {
    sharing: [
      "Partage de l’article",
      "share",
      "Partager cet article · Facebook · WhatsApp · Courriel",
    ],
    edition: [
      "Date de l’édition",
      "calendar-alt",
      "Date du jour · fuseau horaire WordPress",
    ],
    "image-caption": [
      "Légende de l’image",
      "format-image",
      "Légende et crédit de l’image mise en avant, si renseignés dans la médiathèque.",
    ],
  };
  Object.keys(previews).forEach(function (name) {
    var item = previews[name];
    wp.blocks.registerBlockType("echo-paix/" + name, {
      apiVersion: 3,
      title: item[0],
      icon: item[1],
      category: "theme",
      supports: { html: false },
      edit: function () {
        return el(
          "div",
          wp.blockEditor.useBlockProps({ className: "echo-editor-preview" }),
          item[2],
        );
      },
      save: function () {
        return null;
      },
    });
  });

  // Convert portable category slugs into native query selections for accurate editor previews.
  // After an editor changes categories, the normal WordPress taxQuery takes priority.
  function NewsQuery(props) {
    var query = props.attributes.query || {};
    var slugs = query.echoCategory
      ? [query.echoCategory]
      : query.echoCategories || [];
    var key = slugs.join(",");
    var terms = wp.data.useSelect(
      function (select) {
        return key
          ? select("core").getEntityRecords("taxonomy", "category", {
              slug: slugs,
              per_page: 100,
            })
          : null;
      },
      [key],
    );
    wp.element.useEffect(
      function () {
        if (
          !Object.prototype.hasOwnProperty.call(query, "taxQuery") &&
          terms &&
          terms.length
        ) {
          props.setAttributes({
            query: Object.assign({}, query, {
              taxQuery: {
                category: terms.map(function (term) {
                  return term.id;
                }),
              },
            }),
          });
        }
      },
      [terms, query],
    );
    var notice = null;
    if (props.isSelected && key && terms && !terms.length) {
      notice = el(
        wp.components.Notice,
        { status: "info", isDismissible: false },
        "Créez la catégorie « " +
          key +
          " » pour alimenter cette rubrique. Le site public affiche un état vide tant qu’elle n’existe pas.",
      );
    }
    if (props.isSelected && query.echoLead) {
      notice = el(
        wp.components.Notice,
        { status: "info", isDismissible: false },
        "Sur le site, la une privilégie le dernier article publié épinglé. Sans article épinglé, elle présente le plus récent.",
      );
    }
    return el(
      wp.element.Fragment,
      null,
      el(props.BlockEdit, props),
      notice
        ? el(
            wp.blockEditor.InspectorControls,
            null,
            el(
              wp.components.PanelBody,
              { title: "Rubrique du journal" },
              notice,
            ),
          )
        : null,
    );
  }
  wp.hooks.addFilter(
    "editor.BlockEdit",
    "echo-paix-news/native-query",
    wp.compose.createHigherOrderComponent(function (BlockEdit) {
      return function (props) {
        return props.name === "core/query"
          ? el(NewsQuery, Object.assign({}, props, { BlockEdit: BlockEdit }))
          : el(BlockEdit, props);
      };
    }, "withEchoNewsQuery"),
  );
})();
