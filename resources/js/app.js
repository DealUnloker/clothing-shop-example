require('./bootstrap')

import Vue from "vue";
import VueRouter from "vue-router";
import Vuex from 'vuex';
import router from "./router";

Vue.use(VueRouter)
Vue.use(Vuex)
Vue.component('pagination', require('laravel-vue-pagination'))

const store = new Vuex.Store({
    state: {
        token: null,
        basket: []
    },
    mutations: {
        setToken(state, newToken) {
            state.token = newToken
            axios.defaults.headers.common["Authorization"] = "Bearer " + newToken
            localStorage.setItem('token', newToken)
        },
        loadToken(state){
            if (localStorage.token) {
                state.token = localStorage.token
                axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.token
            }
        },
        removeToken(state){
            state.token = null
            axios.defaults.headers.common["Authorization"] = null
            localStorage.removeItem('token')
        },
        loadBasket(state){
            if(localStorage.basket){
                state.basket = JSON.parse(localStorage.basket)
            }
        },
        saveBasket(state){
            localStorage.setItem('basket', JSON.stringify(state.basket))
        },
        addToBasket(state, product){
            state.basket.push(product)
            localStorage.setItem('basket', JSON.stringify(state.basket))
        }
    }
})

const app = new Vue({
    el: '#app',
    router,
    store,
    created() {
        axios.defaults.baseURL = '/api/v1/'
        store.commit('loadToken')
        store.commit('loadBasket')
    }
})
