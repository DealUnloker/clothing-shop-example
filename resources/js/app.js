require('./bootstrap')

import Vue from "vue";
import VueRouter from "vue-router";
import router from "./router";

Vue.use(VueRouter)
Vue.component('pagination', require('laravel-vue-pagination'))

const app = new Vue({
    el: '#app',
    router,
})
