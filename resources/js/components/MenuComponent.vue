<template>
    <div class="menu slideRight">
        <div class="top">
            <div class="block">
                <h1 v-bind:class="{ active_gender: 1 === getGender }" @click="setGender(1)">MALE</h1>
            </div>
            <div class="separator">

            </div>
            <div class="block">
                <h1 v-bind:class="{ active_gender: 2 === getGender }" @click="setGender(2)">FEMALE</h1>
            </div>
        </div>
        <div class="bottom">
            <div class="block" v-for="type in types">
                <p v-bind:class="{ active_type: type.id === getType }" @click="setType(type.id)">{{ type.name }}</p>
            </div>
        </div>
        <div class="actions">
            <div class="block">
                <h1 @click="reset">RESET</h1>
            </div>
        </div>
    </div>
</template>

<script>
import {mapGetters, mapMutations} from "vuex";

export default {
    name: "MenuComponent",
    data() {
        return {
            types: []
        }
    },
    created() {
        this.loadTypes()
    },

    computed: {
        ...mapGetters({
            "getGender": "filter/getGender",
            "getType": "filter/getType"
        })
    },

    methods: {
        ...mapMutations({
            "SET_GENDER": "filter/SET_GENDER",
            "SET_TYPE": "filter/SET_TYPE",
            "RESET_FILTER": "filter/RESET_FILTER"
        }),

        loadTypes() {
            axios
                .get("product_types")
                .then(response => {
                    this.types = response.data;
                });
        },

        setGender(id){
            this.SET_GENDER(id)
        },

        setType(id){
            this.SET_TYPE(id)
        },

        reset(){
            this.RESET_FILTER()
        }
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

h1, p {
    font-size: 24px;
}

.active_gender {
    text-decoration: underline;
}

.active_type {
    color: $base-color;
}

.menu {
    position: absolute;
    width: 400px;
    background-color: white;
    left: 10px;
    top: 120px;
    display: flex;
    border: 2px solid black;
    flex-direction: column;
    border-radius: 10px;

    .top, .actions {
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 60px;

        .separator {
            height: 100%;
            border-right: 1px solid black;
        }

        h1 {
            cursor: pointer;
        }
    }

    .bottom {
        .block {
            padding: 20px;
            border-bottom: 1px solid black;
            cursor: pointer;
        }
    }
}

.slideRight {
    animation-name: slideRight;
    -webkit-animation-name: slideRight;

    animation-duration: 2s;
    -webkit-animation-duration: 2s;

    animation-timing-function: ease-in-out;
    -webkit-animation-timing-function: ease-in-out;

    visibility: visible !important;
}

@keyframes slideRight {
    0% {
        transform: translateX(-150%);
    }
    50% {
        transform: translateX(8%);
    }
    65% {
        transform: translateX(-4%);
    }
    80% {
        transform: translateX(4%);
    }
    95% {
        transform: translateX(-2%);
    }
    100% {
        transform: translateX(0%);
    }
}

@-webkit-keyframes slideRight {
    0% {
        -webkit-transform: translateX(-150%);
    }
    50% {
        -webkit-transform: translateX(8%);
    }
    65% {
        -webkit-transform: translateX(-4%);
    }
    80% {
        -webkit-transform: translateX(4%);
    }
    95% {
        -webkit-transform: translateX(-2%);
    }
    100% {
        -webkit-transform: translateX(0%);
    }
}

@media screen and (max-width: 500px) {
    .menu {
        left: 0;
        top: 163px;
        width: 100vw;
        min-width: 320px;
        min-height: calc(100vh - 163px);
    }
}

</style>
