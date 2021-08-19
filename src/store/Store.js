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
        wishList: '',
        wishListUser: "",
        basket: JSON.parse(localStorage.getItem('basket')) ? JSON.parse(localStorage.getItem('basket')) : [],
        basketTotal: localStorage.getItem('basketTotal') ? localStorage.getItem('basketTotal') : 0,
    },
    getters: {
        isLoggedIn: state => {
            return state.isLoggedIn
        },
        wishListUser: state => {
            return state.wishListUser = state.currentUser.id;
        },
        wishList: state => {
            return state.wishList;
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
            state.basketTotal = 0;

            const total = Object.keys(state.basket);
            total.forEach(key => {
                state.basketTotal += state.basket[key]['qnty_price'];
            });
            //OPTIMIZATION NEEDED
            localStorage.setItem('basketTotal', state.basketTotal);
            state.basketTotal = parseInt(localStorage.getItem('basketTotal'));
            localStorage.setItem('basket', JSON.stringify(state.basket));
            state.basket = JSON.parse(localStorage.getItem('basket'));
            console.log("Item added to basket");
        },
        updateBasket: (state, payload) => { 
            state.basketTotal = 0;
            const getIndex = state.basket.findIndex(findIndex);
             
            state.basket.splice(getIndex, 1);
            state.basket.push(payload);
            function findIndex(index){
                return index.id === payload.id;
            }

            const total = Object.keys(state.basket);
            total.forEach(key => {
                state.basketTotal += state.basket[key]['qnty_price'];
            });
            //OPTIMIZATION NEEDED
            localStorage.setItem('basketTotal', state.basketTotal);
            state.basketTotal = parseInt(localStorage.getItem('basketTotal'));
            localStorage.setItem('basket', JSON.stringify(state.basket));
            state.basket = JSON.parse(localStorage.getItem('basket'));
            console.log("Item updated in basket");
        },
        removeFromBasket: (state, payload) =>{
            
            const getIndex = state.basket.findIndex(findIndex);
            const item = state.basket.find(findIndex);
            state.basket.splice(getIndex, 1);
            localStorage.setItem('basket', JSON.stringify(state.basket));
            state.basket = JSON.parse(localStorage.getItem('basket'));

            function findIndex(index){
                return index.id = payload;
            }

            state.basketTotal -= item.qnty_price;
            //OPTIMIZATION NEEDED
            localStorage.setItem('basketTotal', state.basketTotal);
            state.basketTotal = parseInt(localStorage.getItem('basketTotal'));
            console.log("Item removed from basket");
        },
        showWishlist: (state, payload) => {
            state.wishList = payload;
            console.log(state.wishList);
        }
    },
    actions: {
        getuser: (context, payload) => {
            console.log(payload);
            User.mywishlist(payload).then((res) => {
                context.commit('showWishlist', res.data);
              }).catch(err => {
                console.log(err);
              });
        },
        login: context => {
            context.commit('login');
            context.dispatch('userloginInfo');
        },
        userloginInfo: context => {
            if(context.state.token){
                User.getUser(context.state.token).then((response)=>{ 
                  context.commit('userloginInfo',response.data);
                  console.log(response.data.id);
                  context.dispatch('getuser', response.data.id);
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
        },
        showWishlist: (context, payload) => { 
            console.log(payload);
            context.commit('showWishlist', payload);
        },
        removeWishlist: (context, payload) => {
            User.removeWishlist(payload).then((res) => {
                context.dispatch('showWishlist');
            }).catch(err => {
                console.log(err);
            });
        }
    }
});