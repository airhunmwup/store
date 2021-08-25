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
    },

    addToWishlist(productData){
        return Api().post("/wishlist", productData);
    },

    checkwishlist(data){
        return Api().post("/checkwishlist", data);
    },

    watchersCounter(data){
        return Api().post("/watcherCount", data);
    },

    mywishlist(data){
        return Api().post("/mywishlist/" + data);
    },

    removeWishlist(id){
        return Api().delete("/removeWishlist/" + id);
    },

    addaddress(data){
        return Api().post("/addaddress", data);
    },

    getAddress(id){
        return Api().post("/getaddress/" + id);
    },
    
    deleteaddress(data){
        return Api().post("/deleteaddress", data);
    },

    changeemail(data){
        return Api().post("/changeemail", data);
    }

};
