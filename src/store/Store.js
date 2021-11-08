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
        basketShippingCost: localStorage.getItem('basketShippingCost') ? localStorage.getItem('basketShippingCost') : 0,
        address: '',
        setCategoryList: [],
        setSubCategoryList: [],
        mylistings: '',
        myvehicles: '',
        myproperties: '',
        myRecentViews: [],
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
        },
        getCurrentUser: state => {
            return state.currentUser;
        },
        getAddress: state => {
            return state.address;
        },
        seller_id: state => {
            return state.currentUser['id'];
        }
    },
    mutations: {
        login: state => {
            state.token = localStorage.getItem("token");
            state.isLoggedIn = localStorage.getItem('isLoggedIn');
        },
        setCategoryList: (state, payload) => {
            state.setCategoryList = payload;
        },
        setSubCategoryList: (state, payload) => {
            state.setSubCategoryList = payload;
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
            state.basketShippingCost = 0;

            const total = Object.keys(state.basket);
            total.forEach(key => {
                state.basketTotal += state.basket[key]['qnty_price'];
                state.basketShippingCost += parseInt(state.basket[key]['product_shipping_cost']);
            });
            

            
            //OPTIMIZATION NEEDED
            localStorage.setItem('basketTotal', state.basketTotal);
            state.basketTotal = parseInt(localStorage.getItem('basketTotal'));
            localStorage.setItem('basketShippingCost', state.basketShippingCost);
            state.basketShippingCost = parseInt(localStorage.getItem('basketShippingCost'));
            localStorage.setItem('basket', JSON.stringify(state.basket));
            state.basket = JSON.parse(localStorage.getItem('basket'));
            console.log("Item added to basket");
        },
        updateBasket: (state, payload) => { 
            state.basketTotal = 0;
            state.basketShippingCost = 0;
            const getIndex = state.basket.findIndex(findIndex);
             
            state.basket.splice(getIndex, 1);
            state.basket.push(payload);
            function findIndex(index){
                return index.id === payload.id;
            }

            const total = Object.keys(state.basket);
            total.forEach(key => {
                state.basketTotal += state.basket[key]['qnty_price'];
                state.basketShippingCost += parseInt(state.basket[key]['product_shipping_cost']);
            });
            
            //OPTIMIZATION NEEDED
            localStorage.setItem('basketTotal', state.basketTotal);
            state.basketTotal = parseInt(localStorage.getItem('basketTotal'));
            localStorage.setItem('basketShippingCost', state.basketShippingCost);
            state.basketShippingCost = parseInt(localStorage.getItem('basketShippingCost'));
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
            state.basketShippingCost -= item.product_shipping_cost;
            //OPTIMIZATION NEEDED
            localStorage.setItem('basketTotal', state.basketTotal);
            state.basketTotal = parseInt(localStorage.getItem('basketTotal'));
            localStorage.setItem('basketShippingCost', state.basketShippingCost);
            state.basketShippingCost = parseInt(localStorage.getItem('basketShippingCost'));
            console.log("Item removed from basket");
        },
        showWishlist: (state, payload) => {
            state.wishList = payload;
            console.log(state.wishList);
        },
        addaddress: (state, payload) => {
            state.address = payload;
        },
        getAddress: (state, payload) => {
            state.address = payload;
        },
        deleteaddress: (state, payload) => {
            console.log(state);
            if(payload == 0){
                console.log("error: unable to delete");
            }else if(payload == 1){
                state.address = "";
            }
        },
        error: (state, payload) => {
            state.errors = payload;
            console.log(payload);
        },
        changeemail: (state, payload) => {
            console.log(payload);
            state.currentUser.email = payload.email;
        },
        getlistings: (state, payload) => {
            state.mylistings = payload;
        },
        getvehicles: (state, payload) => {
            state.myvehicles = payload;
        },
        getproperties: (state, payload) => {
            state.myproperties = payload;
        },
        getRecentViews: (state, payload) => {
            state.myRecentViews = payload;
            console.log(state.myRecentViews);
        }
    },
    actions: {
        getuser: (context, payload) => {
            console.log(payload);
            User.mywishlist(payload).then((res) => {
                context.commit('showWishlist', res.data);
                context.dispatch('getAddress', payload);
                context.dispatch('setCategoryList');
              }).catch(err => {
                console.log(err);
              });
        },
        setCategoryList: (context) => {
            User.getCategoryList()
            .then((response) => {
            context.commit('setCategoryList', response.data);
            context.dispatch("setSubCategoryList");
            })
            .catch((errors) => {
            console.log(errors);
            console.log("cat list info api call error");
            });
        },
        setSubCategoryList: (context) => {
            User.getSubCategoryList()
            .then((response) => {
            context.commit('setSubCategoryList', response.data);
            })
            .catch((errors) => {
            console.log(errors);
            console.log("cat list info api call error");
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
                  context.dispatch('getlistings', response.data.id);
                  context.dispatch('getvehicles', response.data.id);
                  context.dispatch('getproperties', response.data.id);
                  context.dispatch('getRecentViews', response.data.id);
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
            console.log(payload);
            User.removeWishlist(payload).then((res) => {
                console.log(res);
                context.dispatch('getuser', context.getters.wishListUser);
            }).catch(err => {
                console.log(err);
            });
        },
        addAddress: (context, payload) => {
            context.commit('addaddress', payload);
            context.dispatch('getAddress', payload.address.user_id);
        },
        getAddress: (context, payload) => {
            User.getAddress(payload).then((res) => {
                console.log(res);
                context.commit('getAddress', res.data);
            }).catch(err => {
                console.log(err);
            });
        },
        deleteaddress: (context, payload) => {
            User.deleteaddress(payload).then((res) => {
                context.commit('deleteaddress',res.data);
            }).catch(err => {
                console.log(err);
            })
        },
        changeemail: (context, payload) => {
            context.commit('changeemail', payload);
        },
        getlistings: (context, payload) => {
            User.getlistings(payload).then(response => {
                console.log(response);
                context.commit('getlistings', response.data);
            }).catch(error => {
                console.log(error);
            });
        },
        getvehicles: (context, payload) => {
            User.getmyvehicles(payload).then(response => {
                console.log(response);
                context.commit('getvehicles', response.data);
            }).catch(error => {
                console.log(error);
            });
        },
        getproperties: (context, payload) => {
            User.getmyproperties(payload).then(response => {
                console.log(response);
                context.commit('getproperties', response.data);
            }).catch(error => {
                console.log(error);
            });
        },
        getRecentViews: (context, payload) => {
            User.getRecentViews(payload).then(response => {
                console.log(response);
                context.commit('getRecentViews', response.data);
                
            }).catch(error => {
        if (!error.response) {
            // network error
            console.log('Error: Network Error');
        } else {

            console.log(error.response.data.message);
        }
      });
        }

    }
});