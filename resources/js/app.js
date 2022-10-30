import './bootstrap';
import { createApp } from 'vue';
import exampleComponent from './components/exampleComponent.vue';
import addPurchase from './components/purchases/addPurchase.vue';
import store from './store'

createApp (exampleComponent).use(store).mount('#app');

createApp (addPurchase).mount('#addPurchase');


window.Alpine = Alpine;

Alpine.start();
