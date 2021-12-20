<template>
    <div>
        <div class="product-card-body" v-on:click="goToRoute(product.id)">
            <img v-bind:src="product.img" alt="">
            <h3> {{ product.name }}</h3>
            <p> ${{ product.price }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: ['product'],
    name: "ProductCardComponent",
    methods: {
        goToRoute(id) {
            this.$router.push('/products/' + id)
            window.scrollTo(0, 0);
        }
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

h3 {
    margin-top: 10px;
}

h3, p {
    font-size: 24px;
}


.product-card-body {
    height: 555px;
    width: 285px;
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    text-align: center;

    img {
        width: 284px;
        height: 478px;
        background-color: #C4C4C4;
    }
}
</style>
