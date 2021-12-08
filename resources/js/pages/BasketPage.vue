<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <main>
            <div class="content">
                <div v-for="product in basket" class="item">
                    <img :src="product.img" height="158px" width="130px" alt="">
                    <div class="name">
                        <p> {{ product.name }}</p>
                    </div>
                    <div class="actions">
                        <div class="close">
                            <button @click="removeProduct(product.id)">X</button>
                        </div>
                        <div class="count">
                            <button @click="decrement(product)"> -</button>
                            <input type="text" v-model="product.count">
                            <button @click="increment(product)"> +</button>
                        </div>
                    </div>
                </div>
                <button>Purchase</button>
            </div>
        </main>
    </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent";

export default {
    name: "BasketPage",
    components: {HeaderComponent},
    data() {
        return {
            basket: this.$store.state.basket
        }
    },
    methods: {
        increment(product) {
            product.count += 1
            this.$store.commit('saveBasket')
        },
        decrement(product) {
            product.count -= 1
            this.$store.commit('saveBasket')
        },
        showBasket() {
            console.log(this.basket)
        },
        removeProduct(id) {
            this.basket = this.basket.filter(product => product.id !== id)
            this.$store.state.basket = this.basket
            this.$store.commit('saveBasket')
        }
    }
}
</script>

<style scoped lang="scss">
img {
    object-fit: cover;
}

main{
    display: flex;
    justify-content: center;
}

.content {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    width: 800px;

    .item {
        height: 160px;
        margin: 20px 10px;
        display: flex;
        align-items: center;
        width: 100%;

        .name {
            margin: 0 10px;
            font-size: 18px;
            align-self: flex-start;
        }

        .actions {
            height: 100%;
            padding: 20px;
            text-align: right;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;

            input {
                width: 90px;
            }
        }
    }
}

@media screen and (max-width: 800px) {
    .content{
        width: 100%;
    }
}

</style>
