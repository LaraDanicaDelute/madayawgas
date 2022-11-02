import { createStore } from 'vuex';
import stocks  from './modules/stocks';
import purchases from './modules/purchases';
import errors from './modules/utils/errors'

export default createStore ({
    modules: {
        stocks,
        purchases,
        errors
    }
})