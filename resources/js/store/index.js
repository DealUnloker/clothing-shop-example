import Vue from "vue";
import Vuex from "vuex";
import auth from "./auth";
import basket from "./basket";
import filter from "./filter";

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {auth, basket, filter}
})
