import './bootstrap';
import { createApp } from 'vue';
//import exampleComponent from './components/exampleComponent.vue';
import addPurchase from './components/purchases/addPurchase.vue';
import store from './store'
import addStocks from './components/stocks/addStocks.vue';

//createApp (exampleComponent).mount('#app');

createApp (addPurchase).use(store).mount('#addPurchase');
createApp (addStocks).use(store).mount('#addStocks');

//window.Alpine = Alpine;

//Alpine.start();
