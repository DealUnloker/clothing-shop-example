<template>
    <div>
        <header>
            <router-link to="/"><h3>Back</h3></router-link>
            <h3 @click="toggleProducts">Show Products</h3>
            <h3 @click="toggleTypes">Show Types</h3>
            <h3 @click="toggleOrders">Show Orders</h3>
        </header>
        <main>
            <Products v-if="isShowProducts"></Products>
            <Types v-if="isShowTypes"></Types>
            <Orders v-if="isShowOrders"></Orders>
        </main>
    </div>
</template>

<script>
import Products from "../components/admin/Products";
import Types from "../components/admin/Types";
import Orders from "../components/admin/Orders";

export default {
    name: "AdminPage",
    components: {Orders, Products, Types},
    data(){
        return{
            isShowProducts: false,
            isShowTypes: false,
            isShowOrders: true
        }
    },
    methods: {
        toggleProducts() {
            this.isShowProducts = true
            this.isShowTypes = false
            this.isShowOrders = false
        },
        toggleTypes() {
            this.isShowProducts = false
            this.isShowTypes = true
            this.isShowOrders = false
        },
        toggleOrders() {
            this.isShowProducts = false
            this.isShowTypes = false
            this.isShowOrders = true
        }
    }
}
</script>

<style scoped lang="scss">

header {
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    border-bottom: 2px solid black;
    align-items: center;
    max-width: 800px;
    min-width: 320px;
    min-height: 50px;

    h3 {
        margin: 5px;
        cursor: pointer;
    }
}

main {
    max-width: 800px;
    margin: 20px auto;
}

</style>
