import Api from "./Api.js";


export default{

    register(formData){
        return Api().post("/register", formData);
    },

    login(formData){
        return Api().post("/login", formData);
    },

    logout(){
        return Api().post("/logout");
    },

    getUser(){
        return Api().get("/user");
    },

    getCategoryList(){
        return Api().get("/category");
    },

    getNewListings(){
        return Api().get("/newlistings");
    },

    product_detail_page(id){
        return Api().get("/products/" + id);
    }

};
