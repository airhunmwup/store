import Vue from "vue";
import Vuex from "vuex";
import User from "../apis/User";

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        token: localStorage.getItem("token"),
        isLoggedIn: localStorage.getItem('isLoggedIn'),
        currentUser: "",
        full_name: "",
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
            console.log("mutated");
        },
        userloginInfo: (state, payload) => {    
            state.currentUser = payload;
            state.full_name = payload.first_name + " " + payload.last_name;
            console.log(state.currentUser);
        },
        logout: state => {
            state.token = "";
            state.isLoggedIn = false;
            state.currentUser = "";
            state.full_name = "";
        }
    },
    actions: {
        login: context => {
            context.commit('login');
            context.dispatch('userloginInfo');
        },
        userloginInfo: context => {
            console.log(context.state.token);
            if(context.state.token){
                User.getUser(context.state.token).then((response)=>{ 
                  context.commit('userloginInfo',response.data);
                }).catch((errors) => {
                  console.log(errors);
                  console.log("user info api call error");
                });
            }else{
                console.log("not logged in");
            }
            
        },
        logout: context => {
            if(context.state.token){
                localStorage.removeItem('token');
                localStorage.removeItem('isLoggedIn');
                context.commit('logout');
            }
        }
    }
});