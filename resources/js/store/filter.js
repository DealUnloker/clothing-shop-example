export default {
    namespaced: true,
    state: {
        gender: 0,
        type: 0
    },
    getters: {
        getGender(state) {
            return state.gender
        },
        getType(state) {
            return state.type
        },
        getQuery(state) {
            let params = {}
            if (state.gender !== 0) {
                params.gender_id = state.gender
            }
            if (state.type !== 0) {
                params.type_id = state.type
            }

            return params
        }
    },
    mutations: {
        SET_GENDER(state, gender_id) {
            state.gender = gender_id
        },
        SET_TYPE(state, type_id) {
            state.type = type_id
        },
        RESET_FILTER(state) {
            state.gender = 0
            state.type = 0
        }
    }
}
