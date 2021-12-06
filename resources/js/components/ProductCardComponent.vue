<template>
    <router-link :to="'/products/' + product.id">
        <div class="product-card-body" v-on:click="scrollToTop">
            <img v-bind:src="product.img" class="img" alt="">
            <h3> {{ product.name }}</h3>
            <p> {{ product.price }}</p>
        </div>
    </router-link>
</template>

<script>
export default {
    props: ['product'],
    name: "ProductCardComponent",
    methods: {
        scrollToTop() {
            window.scrollTo(0,0);
        }
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

h3 {
    color: $base-color;
    margin-top: 10px;
}

h3, p {
    font-size: 24px;
}


.img {
    width: 284px;
    height: 478px;
    background-color: #C4C4C4;
}

.product-card-body {
    margin: 30px 50px;
    height: 555px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
