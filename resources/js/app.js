require('./bootstrap')

import Vue from "vue";
import VueRouter from "vue-router";
import router from "./router";
import store from "./store/index"

Vue.use(VueRouter)

new Vue({
    el: '#app',
    router,
    store,
    created() {
        axios.defaults.baseURL = '/api/v1/'
        store.dispatch('auth/loadToken').then(value => console.log(value))
    }
})
