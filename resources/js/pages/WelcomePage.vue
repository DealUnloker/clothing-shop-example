<template>
    <div>
        <div class="top">
            <div class="left">
                <h1>Euclid</h1>
                <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti
                    atque
                    corrupti quos some qweqasd
                </p>
            </div>
            <div class="right">
                <router-link to="/products">
                    <div id="parallelogram"></div>
                </router-link>
                <div class="centered-text">
                    <div>
                        <h1>Check it out!</h1>
                    </div>
                </div>
            </div>
            <div class="alternative">
                <router-link to="/products">
                    <h1>Check it out!</h1>
                </router-link>
            </div>
        </div>
        <footer-component></footer-component>
    </div>
</template>

<script>

import FooterComponent from "../components/FooterComponent";

export default {
    name: "WelcomePage",
    components: {
        FooterComponent
    },
    beforeMount() {
        if (!localStorage.first_time) {
            localStorage.setItem('first_time', "true")
        } else {
            this.$router.push('products')
        }
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

h1 {
    color: $base-color;
    margin-bottom: 45px;
}

h1, p {
    font-size: 48px;
}

.top {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 0 60px;
    margin-bottom: 150px;

    .left, .right {
        margin-top: 130px;
    }

    .left {
        max-width: 680px;
    }

    .right {
        position: relative;
        margin-left: 120px;
        width: 970px;
        height: 450px;

        #parallelogram {
            position: absolute;
            left: 80px;
            width: 810px;
            height: 100%;
            border: 3px solid black;
            transform: skew(20deg);
        }

        .centered-text {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
}

.alternative {
    display: none;
}

@media screen and (max-width: 1200px) {
    .top {
        .right {
            display: none;
        }
    }

    .alternative {
        margin: 40px auto;
        display: block;
    }
}


</style>
