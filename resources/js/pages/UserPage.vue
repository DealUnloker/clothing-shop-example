<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <div class="content" v-if="isLoaded">
            <table class="table table-hover table-dark">
                <tbody>
                <tr>
                    <td>Your nickname</td>
                    <td>{{ user.name }}</td>
                </tr>
                <tr>
                    <td>Your email</td>
                    <td>{{ user.email }}</td>
                </tr>
                <tr>
                    <td>Your id</td>
                    <td>{{ user.id }}</td>
                </tr>
                </tbody>
            </table>
            <button class="auth-btn" @click="logoutUser">Logout</button>
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
    height: 400px;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    .auth-btn {
        margin-top: 40px;
    }
}
</style>
