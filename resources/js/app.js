 // Import our custom CSS 
 
 import '../sass/app.scss'
import './bootstrap';

import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);

  // resources/js/app.js
  // Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

