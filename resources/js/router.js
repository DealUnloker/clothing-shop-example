import VueRouter from "vue-router";
import WelcomePage from "./pages/WelcomePage";
import MainPage from "./pages/MainPage";
import PageNotFound from "./pages/PageNotFound";
import ProductPage from "./pages/ProductPage";
import LoginPage from "./pages/LoginPage";
import RegisterPage from "./pages/RegisterPage";
import UserPage from "./pages/UserPage";
import BasketPage from "./pages/BasketPage";
import TestPage from "./pages/TestPage";


export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: WelcomePage
        },
        {
            path: '/products',
            component: MainPage
        },
        {
            path: '/products/:id',
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
            path: '/user',
            component: UserPage
        },
        {
            path: '/basket',
            component: BasketPage
        },
        {
            path: '/test',
            component: TestPage
        },
        {
            path: '*',
            component: PageNotFound
        }
    ],
});
