<template>
    <div>
        <div class="status">
            <h3 @click="toggleNew">Show New Orders</h3>
            <h3 @click="toggleDone">Show Completed Orders</h3>
        </div>
        <div class="orders">
            <div class="order" v-for="order in orders">
                <div class="info">
                    <h4> Order #{{ order.id }} </h4>
                    <p> From user with id {{ order.user_id }}</p>
                </div>
                <div class="btn-wrap" v-if="!order.status">
                    <button @click="setDone(order.id)">Set completed</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Orders",
    data() {
        return {
            status: 0,
            orders: []
        }
    },
    mounted() {
        this.getOrders()
    },
    methods: {
        getOrders() {
            axios.get('admin/orders', {
                params: {
                    status: this.status
                }
            })
                .then(res => {
                    this.orders = res.data
                    console.log(res)
                });
        },
        toggleNew() {
            this.status = 0
            this.getOrders()
        },
        toggleDone() {
            this.status = 1
            this.getOrders()
        },
        setDone(id){
            axios.post('/admin/change_status', {
                id: id
            })
                .then(res => {
                    console.log(res)
                    this.getOrders()
                });
        }
    }
}
</script>

<style scoped lang="scss">

.status {
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

.orders {
    display: flex;
    flex-direction: column;

    .order {
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
