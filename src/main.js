import Vue from 'vue'
import App from './App.vue'
import './assets/tailwind.css';
import router from './router';
import Axios from 'axios';
import { store } from './store/Store';

Vue.prototype.$http = Axios;

Vue.config.productionTip = false

new Vue({
    store: store,
    router,
    render: h => h(App)
}).$mount('#app')