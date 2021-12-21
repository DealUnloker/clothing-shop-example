<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <div class="content" v-if="isLoaded">

            <div class="block">
                <div class="top">
                    <h1>Your name</h1>
                </div>
                <div class="bottom">
                    <input type="text" class="form__input" id="first_name" v-model="user.first_name" required=""/>
                </div>
            </div>

            <div class="block">
                <div class="top">
                    <h1>Your second name</h1>
                </div>
                <div class="bottom">
                    <input type="text" class="form__input" id="second_name" v-model="user.second_name" required=""/>
                </div>
            </div>

            <div class="block">
                <div class="top">
                    <h1>Your email</h1>
                </div>
                <div class="bottom">
                    <input type="text" class="form__input" id="email" v-model="user.email" required=""/>
                </div>
            </div>

            <div class="block">
                <div class="top">
                    <h1>Your address</h1>
                </div>
                <div class="bottom">
                    <input type="text" class="form__input" id="address" v-model="user.address" required=""/>
                </div>
            </div>

            <div class="buttons">
                <button class="auth-btn" @click="changeData">Submit changes</button>
                <button class="auth-btn" @click="logoutUser">Logout</button>
                <button class="auth-btn" @click="goToAdminPanel" v-if="user.isAdmin">Admin</button>
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
        changeData(){
            axios.post('update_user', {
                address: this.user.address,
                email: this.user.email,
                first_name: this.user.first_name,
                second_name: this.user.second_name
            }).then(res =>
                console.log(res)
            );
        },
        goToAdminPanel(){
            this.$router.push('/admin')
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

    .buttons{
        display: flex;
        flex-direction: column;
    }

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
        height: 200px;
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
                height: 50px;
                color: #333;
                font-size: 1.2rem;
                padding: 1.5rem 2rem;
                border-radius: 0.2rem;
                background-color: rgb(255, 255, 255);
                border: none;
                display: block;
                border-bottom: 0.3rem solid transparent;
                transition: all 0.3s;
            }

            button {
                height: 50px;
                width: 80px;
                border: none;
                color: white;
                background: conic-gradient(from 254.97deg at 99.13% 0.57%, rgba(255, 66, 100, 0.17) -189.75deg, #FF4264 32.04deg, rgba(255, 66, 100, 0.17) 170.25deg, #FF4264 392.04deg);

            }
        }
    }
}


</style>
