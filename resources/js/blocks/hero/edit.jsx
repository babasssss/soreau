import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function Edit() {
  const blockProps = useBlockProps();
  return (
    <div {...blockProps}>
      <InnerBlocks
        allowedBlocks={[
          'soreau/home-page',
        ]}
        template={[['soreau/home-page']]}
        renderAppender={InnerBlocks.ButtonBlockAppender}
      />
    </div>
  );
}