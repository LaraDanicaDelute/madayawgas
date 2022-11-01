import { createStore } from 'vuex';
import stocks  from './modules/stocks';


export default createStore ({
    modules: {
        stocks
    }
})