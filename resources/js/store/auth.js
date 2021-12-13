export default {
    namespaced: true,
    state: {
        token: null,
        auth: false
    },
    getters: {
        isAuth(state) {
            return state.auth
        },
        getToken(state) {
            return state.token
        }
    },
    mutations: {
        SET_TOKEN(state, token) {
            state.token = token
            axios.defaults.headers.common["Authorization"] = "Bearer " + token
            state.auth = true
        },
        SET_AUTH(state, status) {
            state.auth = status
        }
    },
    actions: {
        loadToken({commit}) {
            if (localStorage.token) {
                commit('SET_TOKEN', localStorage.token)
                return 'Token is loaded'
            }
            return 'Token is not loaded'
        },
        setNewToken({commit}, newToken) {
            commit('SET_TOKEN', newToken)
            localStorage.setItem('token', newToken)
            return 'Token was set'
        },
        logout({commit}) {
            commit('SET_TOKEN', null)
            commit('SET_AUTH', false)
            localStorage.removeItem('token')
        }
    }
}
