<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <main>
            <div class="content" v-if="basket[0]">
                <div v-for="product in basket" class="item">
                    <img :src="product.img" height="158px" width="130px" alt="">
                    <div class="actions">
                        <div class="top">
                            <div class="name">
                                <p> {{ product.name }}</p>
                            </div>
                            <img src="/img/icons/close_button.png" width="24" height="24"
                                 @click="removeProduct(product.id)" class="img-btn" alt="">
                        </div>
                        <div class="bottom">
                            <div class="close">
                            </div>
                            <div class="count">
                                <img src="/img/icons/minus.svg" @click="decrement(product)" height="24" width="24"
                                     alt=""
                                     class="img-btn">
                                <input type="text" v-model="product.count">
                                <img src="/img/icons/plus.svg" @click="increment(product)" height="24" width="24" alt=""
                                     class="img-btn">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="buy-btn-2">Purchase</button>
            </div>
            <div class="warning" v-if="!basket[0]">
                <h1>Your basket is empty!</h1>
            </div>
        </main>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent";
import FooterComponent from "../components/FooterComponent";

export default {
    name: "BasketPage",
    components: {FooterComponent, HeaderComponent},
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

.img-btn {
    margin: 0 10px;
    cursor: pointer;
}

.buy-btn-2 {
    margin: 20px;
    border: 0;
    background: none;
    font-size: 36px;
    align-self: flex-end;
}

.warning{
    text-align: center;
    margin: 40px;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 120px);
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
        width: 100%;

        .top {
            margin: 0 10px;
            width: 100%;
            font-size: 18px;
            align-self: flex-start;
            display: flex;
            justify-content: space-between;
        }

        .actions {
            height: 100%;
            text-align: right;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;

            input {
                width: 90px;
                text-align: center;
                margin: 10px;
            }
        }
    }
}

@media screen and (max-width: 800px) {
    .content {
        width: 100%;
    }
}

</style>
