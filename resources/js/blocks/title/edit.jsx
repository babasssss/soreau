import { __ } from '@wordpress/i18n';
import {
  useBlockProps,
  RichText,
  InnerBlocks,
} from '@wordpress/block-editor';

const BUTTON_TEMPLATE = [
  [
    'core/button',
    {
      text: __('En savoir plus', 'soreau'),
    },
  ],
];

export default function Edit({ attributes, setAttributes }) {
  const { subtitle = '', title = '' } = attributes;

  const blockProps = useBlockProps({
    className: 'soreau-title',
  });

  return (
    <div {...blockProps}>
      {/* Sous-titre */}
      <RichText
        tagName="p"
        className="soreau-title__subtitle"
        value={subtitle}
        onChange={(value) => setAttributes({ subtitle: value })}
        placeholder={__('Sous-titre…', 'soreau')}
        allowedFormats={[]} // tu peux en ajouter si besoin
      />

      {/* Titre */}
      <RichText
        tagName="h2"
        className="soreau-title__title"
        value={title}
        onChange={(value) => setAttributes({ title: value })}
        placeholder={__('Titre…', 'soreau')}
        allowedFormats={[]} // idem
      />

      {/* Bouton Gutenberg natif */}
      <InnerBlocks
        allowedBlocks={['core/button']}
        template={BUTTON_TEMPLATE}
        templateLock={false}
      />
    </div>
  );
}
