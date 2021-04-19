import '@carbon/grid/scss/grid.scss'
import 'carbon-components/scss/components/ui-shell/_content.scss'

import BXHeader from 'carbon-web-components/es/components/ui-shell/header.js';

import 'carbon-web-components/es/components/button/button.js';
import 'carbon-web-components/es/components/ui-shell/header.js';
import 'carbon-web-components/es/components/ui-shell/header-nav.js';
import 'carbon-web-components/es/components/ui-shell/header-nav-item.js';
import 'carbon-web-components/es/components/ui-shell/header-menu.js';
import 'carbon-web-components/es/components/ui-shell/header-menu-item.js';
import 'carbon-web-components/es/components/ui-shell/header-menu-button.js';
import 'carbon-web-components/es/components/ui-shell/header-name.js';
import './index.scss';

import './index.scss'

import { css } from 'lit-element';

//Header Nav Item
class TSRHeader extends BXHeader {}

TSRHeader.styles = [
  BXHeader.styles,
  css`
    bx-header {
      background-color: white;
    }
  `,
];

customElements.define('tsr-header', TSRHeader);