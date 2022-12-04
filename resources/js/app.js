import './bootstrap';
import { createApp } from 'vue';
//import exampleComponent from './components/exampleComponent.vue';
import store from './store'
import addPurchase from './components/purchases/addPurchase.vue';
import addStock from './components/stocks/addStock.vue';
import addReport from './components/reports/addReport.vue';
//import editStock from './components/stocks/editStock.vue';
//createApp (exampleComponent).mount('#app');

createApp (addPurchase).use(store).mount('#addPurchase');
createApp (addStock).use(store).mount('#addStock');
createApp (addReport).use(store).mount('#addReport');
//createApp (editStock).use(store).mount('#editStock');

//window.Alpine = Alpine;

//Alpine.start();
