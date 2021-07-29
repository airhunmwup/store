import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        token: localStorage.getItem('token'),
        isLoggedIn: localStorage.getItem('isLoggedIn'),
        currentUser: JSON.parse(localStorage.getItem('currentUser')),
    },
    getters: {
        isLoggedIn: state => {
            return state.isLoggedIn
        }
    },
    mutations: {
        login: state => {
            state.token = localStorage.getItem("token");
            state.isLoggedIn = localStorage.getItem('isLoggedIn');
            state.currentUser = JSON.parse(localStorage.getItem('currentUser'));
            console.log("mutated");
        },
        SET_CURRENT_USER: state => {
            state.currentUser = JSON.parse(localStorage.getItem('currentUser'));
            console.log(state.currentUser);
        }
    },
    actions: {
        login: context => {
            context.commit('login');
        },
    }
});