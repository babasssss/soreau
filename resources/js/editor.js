import domReady from '@wordpress/dom-ready';

import { registerAirtableFormat } from './gutenberg/FormatTypeAirtable';
import { registerButtonStyles } from './gutenberg/RegisterButtonStyles';

import './blocks/title';

domReady(() => {
  registerButtonStyles();
  registerAirtableFormat();
});
