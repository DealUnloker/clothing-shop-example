<template>
    <div>
        <div class="types">
            <div class="type" v-for="type in types">
                <div class="info">
                    <h4> ID: {{ type.id }} </h4>
                    <p>{{ type.name }}</p>
                </div>
                <div class="btn-wrap">
                    <button @click="deleteType(type.id)">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Types",
    data() {
        return {
            types: []
        }
    },
    mounted() {
        this.getProductsTypes()
    },
    methods: {
        getProductsTypes() {
            axios.get('/admin/types')
                .then(res => {
                    this.types = res.data
                    console.log(res)
                });
        },
        deleteType(id){
            axios.post('/admin/delete_product', {
                id
            })
                .then(res => {
                    console.log(res)
                    this.getProductsTypes()
                });
        }
    }
}
</script>

<style scoped lang="scss">

.types {
    display: flex;
    flex-direction: column;

    .type {
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
