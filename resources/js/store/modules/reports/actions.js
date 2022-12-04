import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import Axios from 'axios'

export default {
    [actions.ADD_REPORT]({commit}, payload) {
        Axios.post('/reports', payload)
         .then(res=>{
              window.location = '/reports'
         })
         .catch(err=> {
           //console.log(err.response.data.errors)
           commit(mutations.SET_ERRORS, err.response.data.errors)
         })
    }
}