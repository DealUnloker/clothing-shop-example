<template>
    <header>
        <router-link to="/products">
            <h1 class="m-title">EUCLID</h1>
        </router-link>
        <div class="content">
            <div class="filter">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
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
    </header>
</template>

<script>
export default {
    name: "HeaderComponent"
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


</style>
