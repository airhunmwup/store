import Vue from 'vue'
import App from './App.vue'
import './assets/tailwind.css';
import router from './router';
import VueLazyload from 'vue-lazyload'

Vue.use(VueLazyload)

Vue.config.productionTip = false

new Vue({
    router,
    render: h => h(App)
}).$mount('#app')