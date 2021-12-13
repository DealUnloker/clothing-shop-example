<template>
    <div>
        <header-component></header-component>
        <main v-if="isLoaded">
            <div class="content">
                <div class="additional-img">
                    <img :src="this.product.img" width="130" height="232" alt="">
                    <img :src="this.product.img" width="130" height="232" alt="">
                    <img :src="this.product.img" width="130" height="232" alt="">
                    <img :src="this.product.img" width="130" height="232" alt="">
                </div>
                <img :src="this.product.img" width="284" height="478" alt="" class="main-img">
                <div class="about-block">
                    <div class="info">
                        <p>{{ this.product.name }}</p>
                        <h3> ${{ this.product.price }}</h3>
                    </div>
                    <div class="size-block">
                        <p>size</p>
                        <div class="sizes">
                            <span class="size">X</span>
                            <span class="size">M</span>
                            <span class="size">XL</span>
                        </div>
                    </div>
                    <div class="buy-block">
                        <div class="block">
                            <button class="buy-btn bubbly-button" @click="addToBasket"
                            ><img src="/img/icons/cart.png" height="46" width="50"
                                  alt=""> in cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description">
                <div class="text">
                    <h2>Description</h2>
                    <p>{{ this.product.description }}</p>
                    <div class="benefits">
                        <div class="benefit">
                            <img src="/img/icons/delivery.png" alt="">
                            <p>Delivery quality</p>
                        </div>
                        <div class="benefit">
                            <img src="/img/icons/payment.png" alt="">
                            <p>Prepayment <br>
                                or <br>
                                Payment upon receipt</p></div>
                        <div class="benefit">
                            <img src="/img/icons/cool_box.png" alt="">
                            <p>Return back until 14 days</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relevant">
                <p>RELEVANT FOR YOU</p>
                <div class="cards" v-if="isLoadedRelevant">
                    <div class="out" v-for="product in this.relevant"
                         v-bind:key="product.id">
                        <product-card-component v-on:click.native="changeProduct"
                                                :product="product"></product-card-component>
                    </div>
                </div>
            </div>
        </main>
        <LoaderComponent v-if="!isLoaded"></LoaderComponent>
        <footer-component></footer-component>
    </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent";
import FooterComponent from "../components/FooterComponent";
import ProductCardComponent from "../components/ProductCardComponent";
import LoaderComponent from "../components/LoaderComponent";

export default {
    name: "ProductPage",
    components: {LoaderComponent, ProductCardComponent, FooterComponent, HeaderComponent},
    data() {
        return {
            isLoaded: false,
            isLoadedRelevant: false,
            product: {
                name: null,
                description: null,
                price: null,
                img: null,
                id: null
            },
            relevant: []
        }
    },
    beforeMount() {
        this.loadProduct()
        this.loadRelevantProducts()
    },
    methods: {
        addToBasket() {
            this.$store.commit('basket/ADD_TO_BASKET', this.product)
            console.log(this.$store.state.basket)
        },
        setLoaded() {
            setTimeout(() => {
                this.isLoaded = true
            }, 500);
        },
        loadProduct() {
            if (this.product.id === this.$route.params.id) {
                return
            }
            this.product.id = this.$route.params.id
            this.isLoaded = false
            axios
                .get('products/' + this.product.id)
                .then(
                    res => {
                        this.product = res.data
                        this.product.count = 1
                        console.log(this.product)
                        this.setLoaded()
                    }
                ).catch(errors => this.$router.push('/404'))
        },
        loadRelevantProducts() {
            axios
                .get('products/relevant')
                .then(
                    res => {
                        this.relevant = res.data
                        this.isLoadedRelevant = true
                    }
                ).catch(errors => console.log(errors))
        },
        changeProduct() {
            this.loadProduct()
            this.loadRelevantProducts()
        }
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

img {
    object-fit: cover;
}

p {
    font-size: 36px;
}

main {
    min-height: 600px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
}

.content {
    width: 100%;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;

    .additional-img {
        width: 280px;
        height: 478px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-content: space-between;
    }

    .about-block {
        width: 670px;

        .info {
            h3 {
                text-align: center;
                font-size: 36px;
                margin-top: 10px;
            }

            padding-bottom: 60px;
            border-bottom: 2px solid black;
        }
    }

    .size-block {
        text-align: center;
        font-size: 36px;
        margin-top: 20px;
        padding-bottom: 75px;
        border-bottom: 2px solid black;

        .sizes {
            display: flex;
            justify-content: center;
        }
    }

    .buy-block {
        display: flex;
        justify-content: center;
        padding-top: 20px;
    }
}

.description {
    margin-top: 40px;
    margin-bottom: 80px;
    border-top: 2px solid black;
    padding: 20px 100px;
    width: 100%;

    h2, p {
        font-size: 36px;
    }

    .benefits {
        text-align: center;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;

        p {
            font-size: 24px;
        }

        .benefit {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 120px;
        }

        img {
            margin-bottom: 20px;
        }
    }
}

.relevant {
    border-top: 2px solid black;
    padding: 70px 120px;
    width: 100%;

    p {
        margin-bottom: 30px;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;

        .out {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            margin: 10px;
        }
    }
}



@media screen and (max-width: 1233px) {
    .relevant {
        padding: 20px 10px;
    }

    .additional-img, .main-img {
        margin: 10px 0;
    }
    .about-block {
        margin: 30px 0;
    }
}

@media screen and (max-width: 700px) {
    .about-block {
        width: auto;
    }
    .description {
        padding: 10px;
        margin: 0;
    }
    p {
        margin-left: 10px;
    }
}

</style>
