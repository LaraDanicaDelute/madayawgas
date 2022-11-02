import * as actions from '../../action-types';
import * as mutations from '../../mutation-types';
import Axios from 'axios';

export default {
    [actions.GET_STOCKS]({ commit }) {
        Axios.get('/api/stocks')
        .then(res=>{
            if(res.data.success == true) {
                commit(mutations.SET_STOCKS, res.data.data);
            }
        })
        .catch(err=>{
            console.log(err.response)
        })
    },
    [actions.ADD_STOCKS]({commit}, payload) {
        Axios.post('/stocks', payload)
         .then(res=>{

         })
         .catch(err=> {
           // console.log(response.data.errors)
            commit(mutations.SET_ERRORS, err.response.data.errors)
         })
    }
}