import * as mutations from '../../mutation-types';

export default {
    [mutations.SET_STOCKS](state, payload){
        state.stocks = payload
    }
}