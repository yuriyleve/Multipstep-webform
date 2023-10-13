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
                    component: () => import("@/pages/Dashboard.vue"),
                },
                {
                    path: "/ct/containers",
                    name: "containers",
                    component: () => import("@/pages/Containers.vue"),
                },
                {
                    path: "/ct/blog",
                    name: "blog",
                    component: () => import("@/pages/Blog.vue"),
                },
                {
                    path: "/ct/about",
                    name: "about",
                    component: () => import("@/pages/About.vue"),
                },
                {
                    path: "/ct/info",
                    component: () => import("@/pages/ContainerInfo.vue"),
                    children: [
                        {
                            path: "/ct/info",
                            component: () =>
                                import("@/components/ContainerInfo/Create.vue"),
                        },
                        {
                            path: "/ct/info/domain",
                            component: () =>
                                import("@/components/ContainerInfo/Domain.vue"),
                        },
                        {
                            path: "/ct/info/plan",
                            component: () =>
                                import("@/components/ContainerInfo/Plan.vue"),
                        },
                        {
                            path: "/ct/info/dns",
                            component: () =>
                                import("@/components/ContainerInfo/DNS.vue"),
                        },
                    ],
                },
            ],
        },
    ],
});

export default router;
