<template>
    <div id="header">
        <div class="menu-btn">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <router-link to="/products" style="text-decoration: none">
            <div class="title">
                <h1>EUCLID</h1>
            </div>
        </router-link>
        <div class="btns">
            <router-link to="/login"><img src="/img/icons/user_log.png" alt=""></router-link>
            <router-link to="/cart"><img src="/img/icons/black_cart.png" alt="" style="margin-left: 40px"></router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "HeaderComponent"
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

h1 {
    color: $base-color;
}

#header {
    display: flex;
    padding: 30px;
    justify-content: space-between;
}

.menu-btn {
    width: 71px;
    height: 32px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;

    .line {
        width: 100%;
        height: 3px;
        background-color: $base-color;
    }
}

.btns {
    display: flex;
    margin-right: 60px;
}
</style>
