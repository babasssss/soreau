import { registerFormatType, applyFormat, removeFormat } from '@wordpress/rich-text';
import { RichTextToolbarButton } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import { createElement } from '@wordpress/element';
import IconSoreau from '@iconSoreau';

export const registerAirtableFormat = () => {
  registerFormatType('custom/airtable', {
    title: __('Airtable', 'soreau'),
    tagName: 'span',
    className: 'has-airtable-style',
    edit({ isActive, value, onChange }) {
      return createElement(RichTextToolbarButton, {
        icon: IconSoreau,
        title: __('Airtable', 'soreau'),
        onClick: () => {
          onChange(
            isActive
              ? removeFormat(value, 'custom/airtable')
              : applyFormat(value, {
                  type: 'custom/airtable',
                })
          );
        },
        isActive,
      });
    },
  });
};
