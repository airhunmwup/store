<template>
  <section class="bg-light bg-gradient">
    <nav class="navbar  navbar-expand-lg navbar-warning bg-light bg-gradient">
  <div class="container-fluid ">
    <div class="dropdown">
  <a class="btn text-dark text-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
   Shop by Categories
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"><router-link
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
</nav> <!-- 
<div class="container pt-2">
  
  <div class="row justify-content-center">
    <div class="col-lg-3 col-md-3 col-sm-lg d-xs-none card border">
  <ul class="list-group list-group-flush">

        <router-link
          v-for="category of categoryList"
          :key="category.id"
          to="/Categorie page"
          class="dropright"
          data-toggle="collapse"
          data-target=".navbar-collapse"
        >
          <li class="font-weight-bold list-group-item text-xs text-dark">{{category.cat_name}}</li>

        </router-link>

  </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 row">
<div id="carouselExampleIndicators" class="carousel slide card" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/home/effect2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="img/home/effect1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/home/effect3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container pt-2 card">
      <div class="row" >
      <div class="col-lg-6 col-sm-12">
                <img src="img/banner/bannerrejee1.jpg" class="card-img-top" style="height: 8rem" alt="Product"/>
      </div>
      <div class="col-lg-6 col-sm-12">
                <img src="img/banner/bannerrejee2.webp" class="card-img-top" style="height: 8rem" alt="Product"/>
      </div>
</div>
      </div>
</div>
    </div>

  </div> -->

<div class="m-4">
      <div class="row">
            <div class="col-md-12 mb-2">
              <div class="card">
                <img class="" style="height: 19rem" src="img/mainbanner.png" alt="courses" />
              </div>
            </div>
</div>
      </div>
<div class="m-2 text-sm">
<nav class="navbar card-footer navbar-expand-sm navbar-light bg-gradient">
    <div class="col">
  <a class="navbar-brand text-sm font-weight-bold text-dark" href="#">Todays Listing</a>
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
            <a 
              v-bind:data-id="listings.id"
              href="#"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              @click="product_detail_link">
    <div class="card h-100">
      <img v-bind:src="'http://127.0.0.1:8000/storage/images/' + listings.product_image1" class="card-img-top" alt="Product" v-bind:data-id="listings.id" />
      <div class="card-body">
    <p class="title text-dark" v-bind:data-id="listings.id">{{ listings.product_name }}</p>
    <p class="font-weight-bold text-dark" v-bind:data-id="listings.id">£{{ listings.product_price }}</p>
      </div>
    </div>
            </a>
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
                <img src="img/banner/bannerrejee2.webp" class="card-img-top" style="height: 12rem" alt="Product"/>
      </div>
</div>
</div>

<div class="p-2">
  <div  class="row row-cols-2 row-cols-md-6 row-cols-xs-6 g-4">
  <div v-for="listings of newListings"
            :key="listings.id"
            v-bind:data-id="listings.id" class="col">
            <a 
              v-bind:data-id="listings.id"
              href="#"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              @click="product_detail_link">
    <div class="card h-100">
      <img v-bind:src="'http://127.0.0.1:8000/storage/images/' + listings.product_image1" class="card-img-top" alt="Product" v-bind:data-id="listings.id" />
      <div class="card-body">
    <p class="title text-dark" v-bind:data-id="listings.id">{{ listings.product_name }}</p>
    <p class="font-weight-bold text-dark" v-bind:data-id="listings.id">£{{ listings.product_price }}</p>
      </div>
    </div>
            </a>
  </div>
</div>
</div>

    <div class="appion">

      <div class="col-12">
        <p class="text-dark">Recently viewed</p>
      </div>

      <div class="ul gs full">
        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="">
              <div class="">
                <img
                  class="card-img-top"
                  src="img/product/1.jpg"
                  alt="Card image cap"
                />

                <div class="card-body">
                  <p class="text-dark">Product name</p>

                  <p class="font-weight-bold text-dark">£149.99</p>
                </div>
              </div>
            </div>
          </router-link>
        </li>

        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="">
              <div class="">
                <img
                  class="card-img-top"
                  src="img/product/9.jpg"
                  alt="Card image cap"
                />

                <div class="card-body">
                  <p class="text-dark">Product name</p>

                  <p class="font-weight-bold h6 text-dark">£149.99</p>
                </div>
              </div>
            </div>
          </router-link>
        </li>

        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="">
              <div class="">
                <img
                  class="card-img-top"
                  src="img/product/7.jpg"
                  alt="Card image cap"
                />

                <div class="card-body">
                  <p class="text-dark">Product name</p>

                  <p class="font-weight-bold text-dark">£149.99</p>
                </div>
              </div>
            </div>
          </router-link>
        </li>

        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="">
              <div class="">
                <img
                  class="card-img-top"
                  src="img/product/10.jpg"
                  alt="Card image cap"
                />

                <div class="card-body">
                  <p class="text-dark">Product name</p>

                  <p class="font-weight-bold text-dark">£149.99</p>
                </div>
              </div>
            </div>
          </router-link>
        </li>

        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="">
              <div class="">
                <img
                  class="card-img-top"
                  src="img/product/8.jpg"
                  alt="Card image cap"
                />

                <div class="card-body">
                  <p class="text-dark">Product name</p>

                  <p class="font-weight-bold text-dark">£149.99</p>
                </div>
              </div>
            </div>
          </router-link>
        </li>

        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="">
              <div class="">
                <img
                  class="card-img-top"
                  src="img/product/13.jpg"
                  alt="Card image cap"
                />

                <div class="card-body">
                  <p class="text-dark">Product name</p>

                  <p class="font-weight-bold text-dark">£149.99</p>
                </div>
              </div>
            </div>
          </router-link>
        </li>

        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="">
              <div class="">
                <img
                  class="card-img-top"
                  src="img/product/11.jpg"
                  alt="Card image cap"
                />

                <div class="card-body">
                  <p class="text-dark">Product name</p>

                  <p class="font-weight-bold text-dark">£149.99</p>

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
      API_BASE_URL: Constants.API_BASE_URL,
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
    }).catch((errors) => {
        console.log(errors);
        console.log("new listing api call error");
      });
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