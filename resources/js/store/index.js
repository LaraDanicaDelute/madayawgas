import { createStore } from 'vuex'
import stocks  from './modules/stocks'
import purchases from './modules/purchases'
import reports from './modules/reports'
import errors from './modules/utils/errors'

export default createStore ({
    modules: {
        errors,
        stocks,
        purchases,
        reports
        
    }
})