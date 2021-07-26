import Vue from 'vue'
import App from './App.vue'
import './assets/tailwind.css';
import router from './router';
import Axios from 'axios'

Vue.prototype.$http = Axios;
Vue.config.productionTip = false

export const store = {
    debug: true,
    logout($http) {
        console.log($http);
        this.$http.post("http://localhost:8000/api/logout").then((response) => {
            console.log(response);
            localStorage.removeItem('token');
            localStorage.removeItem('user');
            this.$router.push('/login');
        }).catch((errors) => {
            console.log(errors)
        })
    }
}

new Vue({
    router,
    render: h => h(App)
}).$mount('#app')