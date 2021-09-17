import Vue from "vue";
import VueRouter from "vue-router";

import Game from "../view/Game.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/vue/game",
        name: "game",
        component: Game,
    }
]

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
