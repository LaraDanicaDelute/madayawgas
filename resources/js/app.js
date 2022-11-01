import './bootstrap';
import { createApp } from 'vue';
//import exampleComponent from './components/exampleComponent.vue';
import addPurchase from './components/purchases/addPurchase.vue';
import store from './store'

//createApp (exampleComponent).mount('#app');

createApp (addPurchase).use(store).mount('#addPurchase');

//window.Alpine = Alpine;

//Alpine.start();
