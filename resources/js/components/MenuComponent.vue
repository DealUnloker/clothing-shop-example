<template>
    <div class="menu slideRight">
        <div class="top">
            <div class="block">
                <h1>MALE</h1>
            </div>
            <div class="separator">

            </div>
            <div class="block">
                <h1>FEMALE</h1>
            </div>
        </div>
        <div class="bottom">
            <div class="block">
                <p>Clothes type</p>
            </div>
            <div class="block">
                <p>Clothes type</p>
            </div>
            <div class="block">
                <p>Clothes type</p>
            </div>
            <div class="block">
                <p>Clothes type</p>
            </div>
            <div class="block">
                <p>Clothes type</p>
            </div>
            <div class="block">
                <p>Clothes type</p>
            </div>
            <div class="block">
                <p>Clothes type</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MenuComponent"
}
</script>

<style scoped lang="scss">

h1, p {
    font-size: 24px;
}

.menu {
    position: absolute;
    width: 400px;
    min-height: 100vh;
    background-color: white;
    left: 0;
    top: 0;
    .top{
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 60px;
        .separator{
            height: 100%;
            border-right: 1px solid black;
        }
    }
    .bottom {
        .block {
            padding: 20px;
            border-bottom: 1px solid black;
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

</style>
