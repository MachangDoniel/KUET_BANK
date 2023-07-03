import './bootstrap';

import Alpine from 'alpinejs';
// import Alpine from 'alpinejs/dist/alpine.js';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
