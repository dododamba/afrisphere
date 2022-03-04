import Vue from 'vue';
import Vuex from 'vuex';

import auth from './modules/auth';

import logs from './modules/logs'
import users from './modules/users'
import account from './modules/account'
import contact from './modules/contact'

import createPersistedState from 'vuex-persistedstate';

import _ from 'lodash';

const modules = {
    auth, 
    logs, 
    users, 
    account, 
    contact
};

Vue.use(Vuex);

export default new Vuex.Store({
    mutations: {
        resetState(state) {
            _.forOwn(modules, (value, key) => {
                state[key] = _.cloneDeep(value.state);
            });
        },
    },
    modules,
    plugins: [
        createPersistedState({
            paths: ['auth', 'logs', 'users', 'account', 'contact'],
        }), 
    ]
});
