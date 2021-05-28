import Vue from 'vue'
import VueRouter from 'vue-router'
import LandingPage from '../views/buyers/landingPage.vue'
import UserOrderPage from '../views/buyers/userOrderPage.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Landingpage',
    component: LandingPage,
  },
  {
    path: '/orderpage',
    name: 'Orderpage',
    component: UserOrderPage,
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router
