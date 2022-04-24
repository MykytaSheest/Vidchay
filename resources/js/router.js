import {createRouter, createWebHistory} from "vue-router";
import Welcome from "./views/Welcome";
import About from "./views/About";
import Concert from "./views/Concert";
import Merch from "./views/Merch";

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/concert',
        name: 'concert',
        component: Concert
    },
    {
        path: '/merch',
        name: 'merch',
        component: Merch
    }
]

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
})

export default router
