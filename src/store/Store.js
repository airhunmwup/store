import Vue from "vue";
import Vuex from "vuex";
import router from '../router/index'
import User from "../apis/User";

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        token: localStorage.getItem("token"),
        isLoggedIn: localStorage.getItem('isLoggedIn'),
        currentUser: "",
        full_name: "",
        product_detail_id: "",
        basket: [],
        cartTotal : '',
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
        },
        userloginInfo: (state, payload) => {    
            state.currentUser = payload;
            state.full_name = payload.first_name + " " + payload.last_name;
        },
        logout: state => {
            state.token = "";
            state.isLoggedIn = false;
            state.currentUser = "";
            state.full_name = "";
        },
        product_detail_page: (state, payload) => {
            state.product_detail_id = payload;
            router.push("/productDetail");
        },
        addToBasket: (state, payload) => {
            state.basket.push(payload);
        },
        updateBasket: (state, payload) =>{
            console.log(state);
            console.log(payload);
            console.log("Update"); 
            const getIndex = state.basket.findIndex(findIndex);
            
            state.basket.splice(getIndex, 1);
            state.basket.push(payload);
            function findIndex(index){
                return index.id === payload.id;
            }
            console.log(state.basket);
        },
        removeFromBasket: (state, payload) =>{
            
            const getIndex = state.basket.findIndex(findIndex);
            state.basket.splice(getIndex, 1);

            function findIndex(index){
                return index.id = payload;
            }
            console.log("removed");
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
        },
        product_detail_page: (context, id ) => {
            context.commit('product_detail_page', id);
        },
        addToBasket: (context, payload) => {
            context.commit('addToBasket', payload);
        },
        updateBasket: (context, payload) => {
            context.commit('updateBasket', payload);
        },
        removeFromBasket: (context, payload) => {
            context.commit('removeFromBasket', payload);
        }
    }
});