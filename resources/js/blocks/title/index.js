import { registerBlockType } from '@wordpress/blocks';
import metadata from './block.json';
import Edit from './edit';
import Save from './save';
import IconSoreau from '@iconSoreau';

registerBlockType(metadata.name, {
  ...metadata,
  icon: IconSoreau,
  edit: Edit,
  save: Save,
});