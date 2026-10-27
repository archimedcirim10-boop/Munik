/* global wp */
wp.blocks.registerBlockType('echo-paix/sharing', {apiVersion: 3, title: 'Partage de l’article', icon: 'share', category: 'widgets', supports: {html: false}, edit: function () {return wp.element.createElement('div', wp.blockEditor.useBlockProps({className: 'echo-sharing'}), 'Partager cet article · Facebook · WhatsApp · Courriel');}, save: function () {return null;}});
