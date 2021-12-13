<template>
    <header>
        <router-link to="/products">
            <h1 class="m-title">EUCLID</h1>
        </router-link>
        <div class="content">
            <div class="filter">
                <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu" @click="toggleMenu">
                    <svg width="100" height="100" viewBox="0 0 100 100">
                        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                        <path class="line line2" d="M 20,50 H 80" />
                        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                    </svg>
                </button>
            </div>

            <div class="title">
                <router-link to="/products">
                    <h1>EUCLID</h1>
                </router-link>
            </div>

            <div class="menu">
                <router-link to="/user"><img src="/img/icons/user_log.png" height="54" width="54" alt=""></router-link>
                <router-link to="/basket"><img src="/img/icons/black_cart.png" height="54" width="54" alt=""
                                               style="margin-left: 40px"></router-link>
            </div>
        </div>
        <MenuComponent v-if="isShowMenu"></MenuComponent>
    </header>
</template>

<script>
import MenuComponent from "./MenuComponent";

export default {
    components: {MenuComponent},
    name: "HeaderComponent",
    data() {
        return {
            isShowMenu: false
        }
    },
    methods: {
        toggleMenu() {
            this.isShowMenu = !this.isShowMenu
        }
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

.content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    min-height: 120px;
}

.m-title {
    display: none;
}

.filter {
    width: 71px;
    height: 32px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    cursor: pointer;

    margin-left: 2%;

    .line {
        width: 100%;
        height: 3px;
        background-color: $base-color;
    }
}

.menu {
    display: flex;
    margin-right: 5%;
}

@media screen and (max-width: 500px) {
    .content {
        min-height: 70px;
        margin-bottom: 30px;
    }

    .title {
        display: none;
    }

    .m-title {
        width: 100%;
        display: block;
        text-align: center;
        margin-top: 10px;
    }
}

.filter {
    .menu {
        background-color: transparent;
        border: none;
        cursor: pointer;
        display: flex;
        padding: 0;
    }
    .line {
        fill: none;
        stroke: black;
        stroke-width: 6;
        transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
        stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
    }
    .line1 {
        stroke-dasharray: 60 207;
        stroke-width: 6;
    }
    .line2 {
        stroke-dasharray: 60 60;
        stroke-width: 6;
    }
    .line3 {
        stroke-dasharray: 60 207;
        stroke-width: 6;
    }
    .opened .line1 {
        stroke-dasharray: 90 207;
        stroke-dashoffset: -134;
        stroke-width: 6;
    }
    .opened .line2 {
        stroke-dasharray: 1 60;
        stroke-dashoffset: -30;
        stroke-width: 6;
    }
    .opened .line3 {
        stroke-dasharray: 90 207;
        stroke-dashoffset: -134;
        stroke-width: 6;
    }
}


</style>
