<template>
    <div>
        <header-component></header-component>
        <div class="content">
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
            <product-card-component class="product-card"></product-card-component>
        </div>
        <div class="pages">
            <p>< 1 2 3 4 5 6 ></p>
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

.pages p{
    text-align: center;
    font-size: 24px;
    letter-spacing: 0.1rem;
    margin-bottom: 50px;
}

</style>
