import { __ } from '@wordpress/i18n';
import {
  useBlockProps,
  MediaUpload,
  MediaUploadCheck,
  InspectorControls,
  InnerBlocks
} from '@wordpress/block-editor';
import { PanelBody, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { image } = attributes;
  const blockProps = useBlockProps({ className: "soreau-introduction" });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Image d'introduction", "soreau")}>

          <MediaUploadCheck>
            <MediaUpload
              onSelect={(media) => setAttributes({ image: media })}
              allowedTypes={['image']}
              value={image?.id}
              render={({ open }) => (
                <Button variant="primary" onClick={open}>
                  {image ? __("Changer l'image", "soreau") : __("Choisir une image", "soreau")}
                </Button>
              )}
            />
          </MediaUploadCheck>

        </PanelBody>
      </InspectorControls>

      <div {...blockProps}>
        {/* Preview de l’image */}
        {image && (
          <img
            src={image.url}
            alt={image.alt || ""}
            className="w-1/2 h-auto my-4"
          />
        )}

        <div className='border border-dark-12 1440:rounded-(--radius-20) rounded-2xl 1920:p-10 1440:p-7.5 p-6 bg-dark-03'>
          <InnerBlocks />
        </div>
      </div>
    </>
  );
}
