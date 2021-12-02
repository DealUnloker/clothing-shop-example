<template>
    <div class="product-card-body">
        <div class="img">
        </div>
        <h3>product name</h3>
        <p>300$</p>
    </div>
</template>

<script>
export default {
    name: "ProductCardComponent"
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

h3 {
    color: $base-color;
    margin-top: 10px;
}

h3, p{
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
