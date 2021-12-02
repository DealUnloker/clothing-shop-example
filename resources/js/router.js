import VueRouter from "vue-router";
import WelcomePage from "./pages/WelcomePage";
import MainPage from "./pages/MainPage";
import PageNotFound from "./pages/PageNotFound";
import ProductPage from "./pages/ProductPage";
import LoginPage from "./pages/LoginPage";
import RegisterPage from "./pages/RegisterPage";


export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: WelcomePage
        },
        {
            path: '/main',
            component: MainPage
        },
        {
            path: '/product',
            component: ProductPage
        },
        {
            path: '/login',
            component: LoginPage
        },
        {
            path: '/register',
            component: RegisterPage
        },
        {
            path: '*',
            component: PageNotFound
        }
    ],
});

