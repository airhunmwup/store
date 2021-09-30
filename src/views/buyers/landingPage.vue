<template>
  <section class="bg-light bg-gradient">
    <nav class="navbar  navbar-expand-lg navbar-warning bg-light bg-gradient">
  <div class="container-fluid ">
    <div class="dropdown">
  <a class="btn text-dark text-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
   Shop by Categories
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <router-link
          v-for="category of categoryList"
          :key="category.id"
          :to="{ name: 'UserCategoriePage', params: { cid: category.id, catname: category.cat_name}}"
          class="dropright"
          data-toggle="collapse"
          data-target=".navbar-collapse"
        >
    <li><a class="dropdown-item" href="#">{{category.cat_name}}</a></li></router-link>
  </ul>
</div>
    <a class="navbar-brand" style="font-style: tahoma;" href="#"></a>
                      <router-link v-if="this.$store.state.isLoggedIn" 
                        to="/newlisting"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="tart Selling."
                      >
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
        <span class=""><img src="img/myaccount/sellershub.png" style="width: 1.2rem; height: 1.2rem" /></span> 
  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sell on REJEE Stores</a>
        </li>
      </ul>
    </div></router-link>
                      <router-link  v-else  
                        to="/registertosell"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="tart Selling."
                      >
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
        <span class=""><img src="img/myaccount/sellershub.png" style="width: 1.2rem; height: 1.2rem" /></span> 
  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sell on REJEE Stores</a>
        </li>
      </ul>
    </div></router-link>
      
  </div>
</nav> 
<div class="m-1">
      <div class="row d-xs-none">
            <div class="col-md-12 mb-2">
              <div class="card">
                <img class="" style="height: 19rem" src="img/mainbanner.png" alt="courses" />
              </div>
            </div>
</div>
      </div>
<div class="m-2 text-sm">
<nav class="navbar card-footer bg-light navbar-expand-sm navbar-light bg-gradient">
    <div class="col">
  <a class="navbar-brand text-sm font-weight-bold text-dark" href="#">New Listing</a>
    </div>
    <div class="col text-right">
    <p class="navbar-text">
          <span class="text-dark">
              <router-link
                class="text-dark"
                to="/ProductPage"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                >see all
              </router-link>
            <b class="fa-bold fa fa-lg fa-angle-right"></b>
          </span>
    </p>
    </div>
</nav>
<div class="p-2">
  <div  class="row row-cols-2 row-cols-md-6 row-cols-xs-6 g-4">
  <div v-for="listings of newListings"
            :key="listings.id"
            v-bind:data-id="listings.id" class="col">
            <router-link         
          :to="{ name: 'productDetails_1', params: { pid: listings.id, pname: listings.product_name}}"
          class="dropright"
          data-toggle="collapse"
          data-target=".navbar-collapse"
        >
    <div class="card h-100">
      <div v-for="img in listings.product_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path" class="card-img-top" alt="Product" style="height:180px; width: 100%;" v-bind:data-id="img.id" /></div>
      <div class="card-body">
    <p class="title text-dark" v-bind:data-id="listings.id">{{ listings.product_name }}</p>
    <p class="font-weight-bold text-dark" v-bind:data-id="listings.id">£{{ listings.product_price }}</p>
      
      </div>
    </div>
            </router-link>
  </div>
</div>
</div>
</div>

<div class="m-4 pt-2">

      <div class="row" >
      <div class="col-lg-6 col-sm-12 card p-2">
                <img src="img/banner/bannerrejee1.jpg" class="card-img-top" style="height: 12rem" alt="Product"/>
      </div>
      <div class="col-lg-6 col-sm-12 card p-2">
                <img src="img/banner/bannerrejee1.jpg" class="card-img-top" style="height: 12rem" alt="Product"/>
      </div>
</div>
</div>

<div class="p-2">
  <div  class="row row-cols-2 row-cols-md-6 row-cols-xs-6 g-4">
  <div v-for="listings of newListings"
            :key="listings.id"
            v-bind:data-id="listings.id" class="col">
         <router-link         
          :to="{ name: 'productDetails_1', params: { pid: listings.id, pname: listings.product_name}}"
          class="dropright"
          data-toggle="collapse"
          data-target=".navbar-collapse"
        >
            
    <div class="card h-100">
      <div v-for="img in listings.product_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path" class="card-img-top" style="height:180px; width: 100%;" alt="Product" v-bind:data-id="img.id" /></div>
      <div class="card-body">
    <p class="title text-dark" v-bind:data-id="listings.id">{{ listings.product_name }}</p>
    <p class="font-weight-bold text-dark" v-bind:data-id="listings.id">£{{ listings.product_price }}</p>
      </div>
    </div>
            </router-link>
  </div>
</div>
</div>

    <div class="appion">

      <div class="col-12">
        <p class="text-dark">Recently viewed</p>
      </div>

      <div class="ul gs full">
        <li class="li itemi" v-for="listings of this.$store.state.myRecentViews" :key="listings.id">
          <router-link
            class=""
            :to="{ name: 'productDetails_1', params: { pid: listings.id, pname: listings.product_name}}"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="">
              <div class="">
                
                <div v-for="img in listings.product_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path" class="card-img-top" style="height:180px; width: 100%;" alt="Product" v-bind:data-id="img.id" /></div>
                <div class="card-body">
                  <p class="text-dark">{{ listings.product_name }}</p>

                  <p class="font-weight-bold text-dark">£{{ listings.product_price }}</p>
                </div>
              </div>
            </div>
          </router-link>
        </li>

      </div>
    </div>

    <div id="home3" class="">
      <footer class="footer-one">
        <div class="inner-footer bg-secondary">
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="footer-top">
              <div class="row pl-4">
                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block text-light">Buy</div>
                      <ul>
                        <li class="underline text-light">
                          <router-link
                            to="/register"
                            data-toggle="collapse"
                            class="text-light"
                            data-target=".navbar-collapse"
                            >Registration</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/money back guarantee"
                            class="text-light"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >REJEE Stores Money back Guarantee</router-link
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="block-content pt-2">
                      <div class="title-block text-light">Sell</div>
                      <ul>
                        <li class="underline">
                          <router-link
                            to="/Start selling"
                            class="text-light"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Start Selling</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/Start selling guide"
                            class="text-light"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >How to sell</router-link
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block text-light">About REJEE Stores</div>
                      <ul>
                        <li class="underline">
                          <router-link
                            to="/User Privacy"
                            class="text-light"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Policies</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/User Agreement"
                            class="text-light"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >User Agreement</router-link
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block text-light">Help & Contact</div>
                      <ul>
                        <li class="underline">
                          <router-link
                            to="/Resolut Center"
                            class="text-light"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Resolution Center</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/selling"
                            class="text-light"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Seller Center</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/managing returns missing items and refunds for sellers"
                            data-toggle="collapse"
                            class="text-light"
                            data-target=".navbar-collapse"
                            >REJEE Stores Returns</router-link
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block text-light">Stay Connected</div>
                      <ul>
                        <li>
                          <a href="https://www.facebook.com/REJEELtd"
                            class="text-light"
                            ><i class="fa fa-facebook"></i> Facebook</a
                          >
                        </li>
                        <li>
                          <a href="https://instagram.com/REJEEcompany"
                            class="text-light"
                            ><i class="fa fa-instagram"></i> Instagram</a
                          >
                        </li>
                        <li>
                          <a href="https://twitter.com/REJEEcompany"
                            class="text-light"
                            ><i class="fa fa-twitter"></i> Twitter</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    
        <div id="tiva-copyright" class="text-xs bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 align-items-center justify-content-md-start justify-content-sm-center justify-content-xs-center">
                        <span>
                            <b>Copyright © 2021 REJEE COMPANY LIMITED. All Rights Reserved.</b>
                      <router-link
                        to="/User Agreement"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="User Agreement"
                      > User Agreement | </router-link>
                      <router-link
                        to="/User Privacy"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="User Privacy"
                      >Privacy | </router-link>
                      <router-link
                        to="/Cookie Policy"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Cookies"
                      >Cookies </router-link>
                      <router-link
                        to="/Ad Choice"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Ad Choice"
                      >and AdChoice</router-link>
                        </span>
                    </div>
                    <div class="col-md-4 col-xs-12 align-items-center justify-content-md-end d-flex justify-content-xs-center">
                        <img src="img/SSL/PositiveSSL_SectigoTag_72dpi.png" class="col-6 img-thumbnail" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none pb-5"></div>
  </section>
</template>



<script>
import { mapState } from 'vuex';
import User from "../../apis/User";
import Constants from "../../common/constants";

export default {
  name: "landingPage",
  data() {
    return {
      categoryList: [],
      newListings:[],
      recentlyViews:[],
      API_BASE_URL: Constants.API_BASE_URL,
      userid: this.$store.state.currentUser.id,
    };
  },
  methods: {
    getCategoryList() {
      User.getCategoryList().then(response => {
      this.categoryList = response.data;
    }).catch((errors) => {
        console.log(errors);
        console.log("cat list info api call error");
      });
    },
   
    getNewListings() {
      User.getNewListings().then(response => {
      this.newListings = response.data;
      console.log(this.newListings);
    }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
            console.log('Error: Network Error');
        } else {
            this.errorStatus = error.response.data.message;
             console.log(error.response.data.message);
        }
      })
    },
    product_detail_link(event){
      var id = event.target.getAttribute("data-id");
      this.$store.dispatch("product_detail_page", id);
    }

  },
  mounted() {   
    this.getCategoryList();
    this.getNewListings();
    console.log(this.categoryList);
  },
}
</script>