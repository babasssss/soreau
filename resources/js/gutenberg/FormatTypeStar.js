import { registerFormatType, applyFormat, removeFormat } from '@wordpress/rich-text';
import { RichTextToolbarButton } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import { createElement } from '@wordpress/element';
import IconSoreau from '@iconSoreau';

export const registerStarFormat = () => {
  registerFormatType('custom/star', {
    title: __('Star', 'soreau'),
    tagName: 'span',
    className: 'has-star-style',
    edit({ isActive, value, onChange }) {
      return createElement(RichTextToolbarButton, {
        icon: IconSoreau,
        title: __('Star', 'soreau'),
        onClick: () => {
          onChange(
            isActive
              ? removeFormat(value, 'custom/star')
              : applyFormat(value, {
                  type: 'custom/star',
                })
          );
        },
        isActive,
      });
    },
  });
};
