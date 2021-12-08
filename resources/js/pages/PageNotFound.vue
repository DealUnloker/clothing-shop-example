<template>
    <div class="content">
        <div style="position: relative">
            <h1>404</h1>
            <p>Page not found</p>
            <router-link to="/products"><img src="img/icons/hanger.png" alt=""></router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "PageNotFound"
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

h1 {
    color: $base-color;
}

h1, p {
    font-size: 64px;
}

.content {
    height: 100vh;
    user-select: none;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    img {
        position: absolute;
        left: 168px;
        top: 132px;
    }
}
@media screen and (max-width: 427px) {
    .content {
        img {
            display: none;
        }
    }
}

</style>
