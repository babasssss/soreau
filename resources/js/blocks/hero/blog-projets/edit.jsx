import { useBlockProps, InspectorControls, MediaUpload, MediaUploadCheck, InnerBlocks } from '@wordpress/block-editor';
import { PanelBody, TextControl, Button, Notice } from '@wordpress/components';

const MAX_LOGOS = 5;

export default function Edit({ attributes, setAttributes }) {
  const { subtitle, title, backgroundImage, brands } = attributes;
  const blockProps = useBlockProps();

  const onSelectBg = (media) => {
    setAttributes({
      backgroundImage: media
        ? { id: media.id, url: media.url, alt: media.alt || media.title || '' }
        : {},
    });
  };

  const addBrand = (media) => {
    if (!media) return;

    if ((brands?.length || 0) >= MAX_LOGOS) return;

    const next = [
      ...(brands || []),
      { id: media.id, url: media.url, alt: media.alt || media.title || '' },
    ];

    setAttributes({ brands: next });
  };

  const removeBrand = (index) => {
    const next = [...(brands || [])];
    next.splice(index, 1);
    setAttributes({ brands: next });
  };

  const canAddMore = (brands?.length || 0) < MAX_LOGOS;

  return (
    <div {...blockProps}>
      <InspectorControls>
        <PanelBody title="Contenu" initialOpen>
          <TextControl
            label="Subtitle"
            value={subtitle}
            onChange={(value) => setAttributes({ subtitle: value })}
          />
          <TextControl
            label="Title"
            value={title}
            onChange={(value) => setAttributes({ title: value })}
          />
        </PanelBody>

        <PanelBody title="Background" initialOpen={false}>
          <MediaUploadCheck>
            <MediaUpload
              onSelect={onSelectBg}
              allowedTypes={['image']}
              value={backgroundImage?.id}
              render={({ open }) => (
                <Button variant="secondary" onClick={open}>
                  {backgroundImage?.url ? 'Changer l’image' : 'Choisir une image'}
                </Button>
              )}
            />
          </MediaUploadCheck>

          {!!backgroundImage?.url && (
            <div style={{ marginTop: 12 }}>
              <img src={backgroundImage.url} alt={backgroundImage.alt || ''} style={{ width: '100%', height: 'auto', borderRadius: 12 }} />
              <Button
                variant="link"
                isDestructive
                onClick={() => setAttributes({ backgroundImage: {} })}
              >
                Retirer l’image
              </Button>
            </div>
          )}
        </PanelBody>

        <PanelBody title={`Logos (max ${MAX_LOGOS})`} initialOpen={false}>
          {!canAddMore && (
            <Notice status="warning" isDismissible={false}>
              Maximum {MAX_LOGOS} logos.
            </Notice>
          )}

          <MediaUploadCheck>
            <MediaUpload
              onSelect={addBrand}
              allowedTypes={['image']}
              multiple={false}
              render={({ open }) => (
                <Button variant="secondary" onClick={open} disabled={!canAddMore}>
                  Ajouter un logo (SVG)
                </Button>
              )}
            />
          </MediaUploadCheck>

          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(5, 1fr)', gap: 10, marginTop: 12 }}>
            {(brands || []).map((logo, index) => (
              <div key={`${logo?.id || index}`} style={{ border: '1px solid #ddd', borderRadius: 10, padding: 8 }}>
                {logo?.url ? (
                  <img src={logo.url} alt={logo.alt || ''} style={{ width: '100%', height: 40, objectFit: 'contain' }} />
                ) : (
                  <div style={{ height: 40 }} />
                )}
                <Button
                  variant="link"
                  isDestructive
                  onClick={() => removeBrand(index)}
                  style={{ padding: 0, marginTop: 6 }}
                >
                  Retirer
                </Button>
              </div>
            ))}
          </div>
        </PanelBody>
      </InspectorControls>

      {/* Preview simple dans le canvas */}
      <div style={{ padding: 16, borderRadius: 16, border: '1px dashed #ccc' }}>
        <p style={{ margin: 0, opacity: 0.7 }}>{subtitle || 'Subtitle…'}</p>
        <h3 style={{ marginTop: 6 }}>{title || 'Title…'}</h3>
        <p style={{ marginTop: 10, opacity: 0.7 }}>
          Background: {backgroundImage?.url ? 'OK' : '—'} • Logos: {(brands?.length || 0)}/{MAX_LOGOS}
        </p>
      </div>
      <InnerBlocks renderAppender={InnerBlocks.ButtonBlockAppender} />
    </div>
  );
}
