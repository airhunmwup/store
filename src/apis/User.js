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
    
    getSubCategoryList(id){
        return Api().get("/subcategory/" + id);
    },
    catInfo(id){
        return Api().get("/subcat/" + id);
    },

    getSubCategoryList(){
        return Api().get("/sub_category");
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
    
    editaddress(data){
        return Api().post("/editAddress", data);
    },
    
    getAddress(id){
        return Api().post("/getaddress/" + id);
    },
    
    fetchAddress(id){
        return Api().post("/fetchAddress/" + id);
    },
    deleteaddress(data){
        return Api().post("/deleteaddress", data);
    },

    changeemail(data){
        return Api().post("/changeemail", data);
    },

    changename(data){
        return Api().post("/changename", data);
    },

    changepassword(data){
        return Api().post("/changepassword", data);
    },

    upload(data){
        return Api().post("/uploader", data);
    },

    createlisting(data){
        return Api().post("/createlisting", data);
    },

    getlistings(userid){
        return Api().post("/getlistings/"+ userid);
    },

    productdelete(id){
        return Api().delete("/productdelete/" + id);
    }


};
