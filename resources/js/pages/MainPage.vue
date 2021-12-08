<template>
    <div>
        <header-component></header-component>
        <main v-if="isLoaded">
            <div class="products">
                <div class="out" v-for="product in this.products.data" v-bind:key="product.id">
                    <div class="in">
                        <product-card-component :product="product"></product-card-component>
                    </div>
                </div>
            </div>
            <div class="pages">
                <span v-if="prev_page_url" @click="getResults(prev_page_url)"> <img src="/img/icons/l_arrow.png" alt=""></span>
                <span v-for="link in links" @click="getResults(link.url)"
                      v-bind:class="{ active: link.active }"> {{ link.label }}</span>
                <span v-if="next_page_url" @click="getResults(next_page_url)"><img src="/img/icons/r_arrow.png" alt=""></span>
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
    name: "MainPage",
    components: {
        LoaderComponent,
        HeaderComponent,
        FooterComponent,
        ProductCardComponent
    },
    data() {
        return {
            products: null,
            prev_page_url: null,
            next_page_url: null,
            links: [],
            isLoaded: false
        }
    },
    created() {
        this.getResults('products')
    },
    methods: {
        getResults(link) {
            this.isLoaded = false
            axios
                .get(link)
                .then(response => {
                    this.products = response.data;
                    console.log(response.data)
                    this.links = response.data.links.slice(1, -1)
                    this.prev_page_url = response.data.prev_page_url
                    this.next_page_url = response.data.next_page_url
                    this.setLoaded()
                });
        },
        setLoaded() {
            window.scrollTo(0, 0);
            setTimeout(() => {
                this.isLoaded = true
            }, 100);
        }
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";


main {
    margin: 0 30px;
}

.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;

    .out {
        flex-grow: 1;
        display: flex;
        justify-content: center;
        align-items: center;

        .in {
            margin: 20px 80px;
        }
    }
}

.pages {
    display: flex;
    justify-content: center;
    font-size: 24px;
    margin: 90px 0;

    span {
        cursor: pointer;
        margin: 0 10px;
    }

    .active {
        color: $base-color;
    }
}

@media screen and (max-width: 500px) {
    .products {
        display: block;
    }
}

</style>
