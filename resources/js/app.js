import './bootstrap';
import { createApp } from 'vue';
import exampleComponent from './components/exampleComponent.vue';

createApp (exampleComponent).mount('#app');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
