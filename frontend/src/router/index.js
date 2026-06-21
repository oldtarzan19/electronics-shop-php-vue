import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  scrollBehavior: () => ({ top: 0 }),
  routes: [
    { path: '/', name: 'home', component: HomeView },
    { path: '/termekek', name: 'products', component: () => import('../views/ProductsView.vue') },
    {
      path: '/termekek/sonic-pro',
      name: 'product',
      component: () => import('../views/ProductDetailView.vue'),
    },
    { path: '/bejelentkezes', name: 'login', component: () => import('../views/LoginView.vue') },
    { path: '/regisztracio', name: 'register', component: () => import('../views/RegisterView.vue') },
  ],
})

export default router
