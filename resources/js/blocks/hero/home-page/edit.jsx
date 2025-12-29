import { useBlockProps, InnerBlocks, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { images = [] } = attributes;
  const blockProps = useBlockProps();

  const onSelectImages = (media) => {
    // media = array d’objets WordPress (si multiple: true)
    const next = (media || []).slice(0, 6).map((img) => ({
      id: img.id,
      url: img.url,
      alt: img.alt || img.title || '',
    }));

    setAttributes({ images: next });
  };

  const removeImage = (id) => {
    setAttributes({ images: images.filter((img) => img.id !== id) });
  };

  const clearAll = () => setAttributes({ images: [] });

  return (
    <div {...blockProps}>
      <div className="soreau-admin-grid" style={{ display: 'grid', gap: 12 }}>
        <MediaUploadCheck>
          <MediaUpload
            onSelect={onSelectImages}
            allowedTypes={['image']}
            multiple
            gallery
            value={images.map((i) => i.id)}
            render={({ open }) => (
              <div style={{ display: 'flex', gap: 8, flexWrap: 'wrap' }}>
                <Button variant="primary" onClick={open}>
                  {images.length ? `Modifier la sélection (${images.length}/6)` : 'Sélectionner 6 images'}
                </Button>

                {images.length > 0 && (
                  <Button variant="secondary" onClick={clearAll}>
                    Tout supprimer
                  </Button>
                )}
              </div>
            )}
          />
        </MediaUploadCheck>

        {images.length > 0 && (
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3, minmax(0, 1fr))', gap: 12 }}>
            {images.map((img) => (
              <div key={img.id} style={{ border: '1px solid #ddd', padding: 8, borderRadius: 8 }}>
                <img
                  src={img.url}
                  alt={img.alt || ''}
                  style={{ width: '100%', height: 140, objectFit: 'cover', borderRadius: 6 }}
                />
                <div style={{ marginTop: 8, display: 'flex', justifyContent: 'space-between', gap: 8 }}>
                  <span style={{ fontSize: 12, opacity: 0.7 }}>#{img.id}</span>
                  <Button
                    variant="link"
                    isDestructive
                    onClick={() => removeImage(img.id)}
                    style={{ padding: 0 }}
                  >
                    Retirer
                  </Button>
                </div>
              </div>
            ))}
          </div>
        )}
      </div>

      <InnerBlocks
        renderAppender={InnerBlocks.ButtonBlockAppender}
      />
    </div>
  );
}
