import { __ } from '@wordpress/i18n';
import {
  useBlockProps,
  InnerBlocks,
} from '@wordpress/block-editor';

export default function Edit() {
  const blockProps = useBlockProps({
    className: 'soreau-title',
  });

  return (
    <div {...blockProps}>
      <InnerBlocks />
    </div>
  );
}
