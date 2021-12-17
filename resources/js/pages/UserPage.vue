<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <div class="content" v-if="isLoaded">

            <div class="block">
                <div class="top">
                    <h1>Your name</h1>
                </div>
                <div class="bottom">
                    <input type="text" :placeholder="user.name">
                    <button>Change</button>
                </div>
            </div>

            <div class="block">
                <div class="top">
                    <h1>Your second name</h1>
                </div>
                <div class="bottom">
                    <input type="text" :placeholder="user.name">
                    <button>Change</button>
                </div>
            </div>

            <div class="block">
                <div class="top">
                    <h1>Your email</h1>
                </div>
                <div class="bottom">
                    <input type="text" :placeholder="user.name">
                    <button>Change</button>
                </div>
            </div>

            <div class="block">
                <div class="top">
                    <h1>Your address</h1>
                </div>
                <div class="bottom">
                    <input type="text" :placeholder="user.name">
                    <button>Change</button>
                </div>
            </div>

            <div class="buttons">
                <button class="auth-btn" @click="logoutUser">Logout</button>
                <button class="auth-btn" @click="">Admin</button>
            </div>
        </div>
        <FooterComponent v-if="isLoaded"></FooterComponent>
        <LoaderComponent v-if="!isLoaded"></LoaderComponent>
    </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent";
import FooterComponent from "../components/FooterComponent";
import LoaderComponent from "../components/LoaderComponent";
import {mapActions, mapGetters} from "vuex";

export default {
    name: "UserPage",
    components: {LoaderComponent, FooterComponent, HeaderComponent},
    data() {
        return {
            user: null,
            isLoaded: false
        }
    },
    beforeMount() {
        if (!this.isAuth()) {
            this.$router.push('/login')
        } else {
            this.loadUserData()
        }
    },
    methods: {
        logoutUser() {
            this.logout()
            this.$router.push('/')
        },
        loadUserData() {
            axios
                .get('user')
                .then(res => {
                    console.log(res.data)
                    this.user = res.data
                    this.setLoaded()
                })
                .catch(errors => {
                    this.$router.push('/login')
                })
        },
        setLoaded() {
            setTimeout(() => {
                this.isLoaded = true
            }, 0);
        },
        ...mapGetters({
            isAuth: "auth/isAuth"
        }),
        ...mapActions({
            logout: "auth/logout"
        })
    }
}
</script>

<style scoped lang="scss">

.content {
    margin: auto;
    min-height: 400px;
    padding: 40px 0;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    .auth-btn {
        margin-top: 40px;
    }

    .block {
        p {
            font-size: 36px;
        }

        display: flex;
        flex-direction: column;
        width: 600px;
        height: 150px;
        justify-content: center;
        align-items: flex-start;
        border: 2px solid black;
        margin: 10px;
        border-radius: 10px;
        padding: 20px;

        .bottom {
            margin-top: 20px;
            display: flex;
            width: 100%;
            justify-content: space-between;

            input {
                width: 240px;
            }

            button {
                height: 30px;
                width: 80px;
                border: none;
                background-color: red;
                color: white;
            }
        }
    }
}
</style>
