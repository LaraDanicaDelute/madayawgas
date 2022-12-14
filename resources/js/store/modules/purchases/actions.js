import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import Axios from 'axios'

export default {
    [actions.ADD_PURCHASE]({commit}, payload) {
        Axios.post('/purchases', payload)
         .then(res=>{
              window.location = '/purchases'
         })
         .catch(err=> {
           //console.log(err.response.data.errors)
           commit(mutations.SET_ERRORS, err.response.data.errors)
         })
    }
}