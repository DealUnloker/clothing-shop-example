<template>
    <div class="content">
        <div class="left">
            <h1>SIGN IN</h1>
            <input type="email" placeholder="email" v-model="email">
            <input type="password" placeholder="password" v-model="password">
            <p>Forgot your password?</p>
            <button v-on:click="login">LOG IN</button>
        </div>
        <div class="right">
            <div class="text">
                <h2>HELLO, FRIEND!</h2>
                <p>Don’t have an account?<br>
                    Change it now :)</p>
            </div>
            <router-link to="/register">
                <button>SIGN UP</button>
            </router-link>
        </div>
    </div>
</template>

<script>
import {mapActions} from "vuex";

export default {
    name: "LoginPage",
    data() {
        return {
            'email': '',
            'password': ''
        }
    },
    methods: {
        ...mapActions({
           setNewToken: "auth/setNewToken"
        }),
        login() {
            axios
                .post('login', {
                    email: this.email,
                    password: this.password
                })
                .then(res => {
                    this.setNewToken(res.data.access_token)
                    this.$router.push('/user')
                })
        }
    }
}
</script>

<style scoped lang="scss">

.content {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #E5E5E5;
    flex-wrap: wrap;
}

.left, .right {
    width: 690px;
    height: 780px;
}

.left {
    background: #FFFFFF;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    input {
        margin-top: 35px;
        border: none;
        width: 465px;
        height: 60px;
        background: #E1E1E1;
        color: #5F5F5F;
        padding: 0 20px;
        font-size: 30px;
    }

    p {
        margin-top: 46px;
        font-size: 24px;
    }

}

.right {
    background: conic-gradient(from 256.44deg at 100% 0%, rgba(255, 66, 100, 0.17) -189.75deg, #FF4264 32.04deg, rgba(255, 66, 100, 0.17) 170.25deg, #FF4264 392.04deg);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    .text {
        text-align: center;
        color: #FFFFFF;

        h2 {
            font-size: 48px;
        }

        p {
            margin-top: 40px;
            font-size: 36px;
        }
    }

    button {
        margin-top: 145px;
    }
}

button {
    margin-top: 40px;
    width: 245px;
    font-size: 24px;
    color: white;
    height: 81px;
    border: none;
    background: conic-gradient(from 254.97deg at 99.13% 0.57%, rgba(255, 66, 100, 0.17) -189.75deg, #FF4264 32.04deg, rgba(255, 66, 100, 0.17) 170.25deg, #FF4264 392.04deg);
}

@media screen and (max-width: 500px) {
    .left {
        input {
            width: 100%;
        }
    }
}

</style>
