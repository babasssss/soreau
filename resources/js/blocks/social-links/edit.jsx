import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
  const blockProps = useBlockProps({ className: "soreau-social-links" });

  return (
    <div {...blockProps}>
      <div className='flex justify-center items-center rounded-full border border-dark-12 bg-dark-03 p-2 1920:p-2.5'>
        <p>Social Links</p>
      </div>
    </div>
  );
}
