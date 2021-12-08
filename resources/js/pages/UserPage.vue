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
            <button class="auth-btn" @click="logout">Logout</button>
        </div>
        <FooterComponent v-if="isLoaded"></FooterComponent>
        <LoaderComponent v-if="!isLoaded"></LoaderComponent>
    </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent";
import FooterComponent from "../components/FooterComponent";
import LoaderComponent from "../components/LoaderComponent";

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
        if (!this.$store.state.token) {
            this.$router.push('/login')
        } else {
            this.loadUserData()
        }
    },
    methods: {
        logout() {
            this.$store.commit('removeToken')
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
        },
        setLoaded(){
            setTimeout(() => { this.isLoaded = true}, 500);
        }
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
