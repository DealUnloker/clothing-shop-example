<template>
    <div>
        <div class="products">
            <div class="product" v-for="product in products">
                <img :src="product.img" alt="img" width="50px" height="50px">
                <div class="info">
                    <h4> ID: {{ product.id }} </h4>
                    <p>{{ product.name }}</p>
                </div>
                <div class="btn-wrap">
                    <button @click="deleteProduct(product.id)">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Products",
    data() {
        return {
            products: []
        }
    },
    mounted() {
        this.getProducts()
    },
    methods: {
        getProducts() {
            axios.get('/admin/products')
                .then(res => {
                    this.products = res.data
                    console.log(res)
                });
        },
        deleteProduct(id){
            axios.post('/admin/delete_product', {
                id
            })
                .then(res => {
                    console.log(res)
                    this.getProducts()
                });
        }
    }
}
</script>

<style scoped lang="scss">
.products {
    display: flex;
    flex-direction: column;

    .product {
        margin: 10px;
        padding: 10px;
        border: 2px solid black;
        border-radius: 10px;
        display: flex;
        justify-content: flex-start;
        align-items: center;

        img {
            object-fit: cover;
            margin-right: 10px;
        }

        .btn-wrap {
            display: flex;
            justify-content: flex-end;
            flex-grow: 1;

            button {
                background: conic-gradient(from 254.97deg at 99.13% 0.57%, rgba(255, 66, 100, 0.17) -189.75deg, #FF4264 32.04deg, rgba(255, 66, 100, 0.17) 170.25deg, #FF4264 392.04deg);
                border: none;
                color: white;
                padding: 10px;
                border-radius: 10px;
            }
        }
    }
}
</style>
