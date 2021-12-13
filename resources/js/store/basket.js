export default {
    namespaced: true,
    state: {
        basket: []
    },
    getters: {
        allProducts(state) {
            return state.basket
        },
        isBasketEmpty(state) {
            return !state.basket.length
        }
    },
    mutations: {
        ADD_TO_BASKET(state, product) {
            if (!state.basket.find(element => element.id === product.id)) {
                state.basket.push(product)
            }
        },
        REMOVE_FROM_BASKET(state, id) {
            state.basket = state.basket.filter(product => product.id !== id)
        },
        increment(state, product) {
            product.count = parseInt(product.count) + 1
        },
        decrement(state, product) {
            if (product.count >= 2) {
                product.count -= 1
            }
        }
    }
}
