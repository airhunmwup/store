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
    getCategory(id){
        return Api().get("/categorie/" + id);
    },
    getListing(id){
        return Api().get("/getlisting/" + id);
    },
    getSubCategoryList2(id){
        return Api().get("/subcategory/" + id);
    },
    getSubCategoryList3(){
        return Api().post("/getsubcategories");
    },
    catInfo(id){
        return Api().get("/subcat/" + id);
    },

    getSubCategoryList(){
        return Api().get("/sub_category");
    },
    sendmessage(data){
        return Api().post("/sendmessage", data);
    },
    fetchMessages(id){
        return Api().get("/fetchmessages/" + id);
    },
    getMessage(id){
        return Api().get("/getmessage/" + id);
    },
    getNewListings(){
        return Api().get("/newlistings");
    },
    
    getNewListings2(id){
        return Api().get("/newlistings2/" + id);
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
    getResults(data){
        return Api().post("/getResults", data);
    },

    deletelisting(id){
        return Api().delete("/deletelisting/" + id);
    },

    purchase(data){
        return Api().post("/purchase", data);
    },
    
    myOrders(data){
        return Api().post("/myorders", data);
    }
};
