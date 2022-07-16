import { createRouter, createWebHistory } from "vue-router";
const routes = [{
        path: "/",
        name: "Layout",
        component: () =>
            import ("../views/layout/Layout.vue"),
        children: [{
                path: '',
                component: () =>
                    import ('../components/Test.vue')
            },
            {
                path: 'product',
                name: "product-list",
                component: () =>
                    import ('../views/pages/product/List-Product.vue')
            }
        ]
    },

];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;