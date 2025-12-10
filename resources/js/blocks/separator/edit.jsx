import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
  const blockProps = useBlockProps({ className: "soreau-separator" });

  return (
    <div {...blockProps}>
      <div className='my-10 bg-dark-12 h-0.25 w-full'>
      </div>
    </div>
  );
}
