import { useBlockProps, InspectorControls, MediaUpload, MediaUploadCheck, InnerBlocks } from '@wordpress/block-editor';
import { PanelBody, TextControl, Button } from '@wordpress/components';

const MAX_FIGURES = 5;

export default function Edit({ attributes, setAttributes }) {
  const { subtitle, title, backgroundImage, keyFigures = [] } = attributes;
  const blockProps = useBlockProps();

  const setFigure = (index, patch) => {
    const next = [...keyFigures];
    next[index] = { ...(next[index] || {}), ...patch };
    setAttributes({ keyFigures: next });
  };

  const addFigure = () => {
    if (keyFigures.length >= MAX_FIGURES) return;
    setAttributes({ keyFigures: [...keyFigures, { value: '', label: '' }] });
  };

  const removeFigure = (index) => {
    const next = keyFigures.filter((_, i) => i !== index);
    setAttributes({ keyFigures: next });
  };

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

        <PanelBody title={`Key figures (${keyFigures.length}/${MAX_FIGURES})`} initialOpen={false}>
          {keyFigures.map((fig, index) => (
            <div key={index} style={{ padding: 12, border: '1px solid #ddd', borderRadius: 8, marginBottom: 10 }}>
              <TextControl
                label="Value"
                value={fig?.value || ''}
                onChange={(v) => setFigure(index, { value: v })}
              />
              <TextControl
                label="Label"
                value={fig?.label || ''}
                onChange={(v) => setFigure(index, { label: v })}
              />

              <Button
                variant="secondary"
                isDestructive
                onClick={() => removeFigure(index)}
              >
                Supprimer
              </Button>
            </div>
          ))}

          <Button
            variant="primary"
            onClick={addFigure}
            disabled={keyFigures.length >= MAX_FIGURES}
          >
            + Ajouter un item
          </Button>
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

        {keyFigures.length > 0 && (
          <div style={{ marginTop: 16, display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(140px, 1fr))', gap: 12 }}>
            {keyFigures.map((fig, i) => (
              <div key={i} style={{ padding: 12, borderRadius: 10, background: 'rgba(0,0,0,0.35)' }}>
                <div style={{ fontSize: 18, fontWeight: 700 }}>{fig?.value}</div>
                <div style={{ opacity: 0.85 }}>{fig?.label}</div>
              </div>
            ))}
          </div>
        )}
        <InnerBlocks renderAppender={InnerBlocks.ButtonBlockAppender} />
      </div>
    </>
  );
}
