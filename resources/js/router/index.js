import { createRouter, createWebHashHistory } from "vue-router";
import Layout from "@/layout/Layout.vue";

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: "/",
            component: Layout,
            children: [
                {
                    path: "/",
                    name: "dashboard",
                    component: () => import("@/components/Dashboard.vue"),
                },
                {
                    path: "/ct/containers",
                    name: "containers",
                    component: () => import("@/components/Containes.vue"),
                },
                {
                    path: "/ct/blog",
                    name: "blog",
                    component: () => import("@/components/Blog.vue"),
                },
                {
                    path: "/ct/about",
                    name: "about",
                    component: () => import("@/components/About.vue"),
                },
                {
                    path: "/ct/create_container",
                    name: "create_container",
                    component: () =>
                        import("@/components/Containers/Create.vue"),
                },
            ],
        },
    ],
});

export default router;
