import { useBlockProps, InspectorControls, MediaUpload, MediaUploadCheck, InnerBlocks } from '@wordpress/block-editor';
import { PanelBody, TextControl, Button } from '@wordpress/components';

const MAX_FIGURES = 5;

export default function Edit({ attributes, setAttributes }) {
  const { subtitle, title, backgroundImage = [] } = attributes;
  const blockProps = useBlockProps();

  const onSelectBg = (media) => {
    if (!media) return;
    setAttributes({
      backgroundImage: {
        id: media.id,
        url: media.url,
        alt: media.alt || media.title || ''
      }
    });
  };

  const removeBg = () => setAttributes({ backgroundImage: {} });

  return (
    <>
      <InspectorControls>
        <PanelBody title="Contenu" initialOpen>
          <TextControl
            label="Subtitle"
            value={subtitle || ''}
            onChange={(v) => setAttributes({ subtitle: v })}
          />
          <TextControl
            label="Title"
            value={title || ''}
            onChange={(v) => setAttributes({ title: v })}
          />
        </PanelBody>

        <PanelBody title="Image de background" initialOpen={false}>
          <MediaUploadCheck>
            <MediaUpload
              onSelect={onSelectBg}
              allowedTypes={['image']}
              value={backgroundImage?.id}
              render={({ open }) => (
                <div style={{ display: 'flex', gap: 8, flexWrap: 'wrap' }}>
                  <Button variant="primary" onClick={open}>
                    {backgroundImage?.url ? 'Changer l’image' : 'Choisir une image'}
                  </Button>

                  {backgroundImage?.url && (
                    <Button variant="secondary" isDestructive onClick={removeBg}>
                      Supprimer
                    </Button>
                  )}
                </div>
              )}
            />
          </MediaUploadCheck>

          {backgroundImage?.url && (
            <div style={{ marginTop: 12 }}>
              <img
                src={backgroundImage.url}
                alt={backgroundImage.alt || ''}
                style={{ width: '100%', height: 'auto', borderRadius: 8 }}
              />
            </div>
          )}
        </PanelBody>
      </InspectorControls>

      {/* Preview simple dans l’éditeur */}
      <div
        {...blockProps}
        style={{
          padding: 24,
          borderRadius: 12,
          minHeight: 220,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
          backgroundImage: backgroundImage?.url ? `url(${backgroundImage.url})` : undefined,
          backgroundColor: '#1C1C21'
        }}
      >
        {subtitle ? <p style={{ margin: 0, opacity: 0.8 }}>{subtitle}</p> : null}
        {title ? <h2 style={{ marginTop: 8 }}>{title}</h2> : null}

        <InnerBlocks renderAppender={InnerBlocks.ButtonBlockAppender} />
      </div>
    </>
  );
}
