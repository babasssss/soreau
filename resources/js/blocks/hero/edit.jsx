import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function Edit() {
  const blockProps = useBlockProps();
  return (
    <div {...blockProps}>
      <InnerBlocks
        allowedBlocks={[
          'soreau/home-page',
          'soreau/about-me', 
          'soreau/blog-projets',
        ]}
        template={[['soreau/home-page']]}
        renderAppender={InnerBlocks.ButtonBlockAppender}
      />
    </div>
  );
}