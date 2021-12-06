<template>
    <div>
        <header-component></header-component>
        <div class="content" v-if="isLoaded">
            <product-card-component v-for="product in this.products.data" v-bind:key="product.id" :product="product"
                                    class="product-card"></product-card-component>
        </div>
        <div class="pages">
            <pagination :data="this.products" v-if="isLoaded" @pagination-change-page="getResults" :limit="-1">
                <img slot="prev-nav" src="/img/icons/l_arrow.png" alt="">
                <img slot="next-nav" class="btn-nxt" src="/img/icons/r_arrow.png" alt="">
            </pagination>
        </div>
        <footer-component></footer-component>
    </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent";
import FooterComponent from "../components/FooterComponent";
import ProductCardComponent from "../components/ProductCardComponent";

export default {
    name: "MainPage",
    components: {
        HeaderComponent,
        FooterComponent,
        ProductCardComponent
    },
    data() {
        return {
            products: null,
            isLoaded: false
        }
    },
    created() {
        this.getResults()
    },
    methods: {
        getResults(page) {
            if (typeof page === "undefined") {
                page = 1;
            }
            axios
                .get("/api/v1/products?page=" + page)
                .then(response => {
                    this.products = response.data;
                    this.isLoaded = true;
                });
        },
        scrollToTop() {
            window.scrollTo(0,0);
        }
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";


.content {
    margin: 0 60px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.pages {
    display: flex;
    justify-content: center;
    margin: 50px 0;

    .page-item {
        border: none !important;
    }
    .btn-nxt {
        //margin-left: 10px !important;
    }

}

</style>
