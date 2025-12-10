import domReady from '@wordpress/dom-ready';

import { registerStarFormat } from './gutenberg/FormatTypeStar';
import { registerButtonStyles } from './gutenberg/RegisterButtonStyles';

import './blocks/title';
import './blocks/introduction';
import './blocks/social-links';
import './blocks/separator';
import './blocks/hero';

domReady(() => {
  registerButtonStyles();
  registerStarFormat();
});