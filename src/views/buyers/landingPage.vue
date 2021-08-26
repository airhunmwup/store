<template>
  <section class="">
    <!-- breadcrumb -->
<div class="container pt-2">
  <!-- Content here -->

  <div class="row justify-content-center">
    <div class="col-lg-3 col-md-3 col-sm-lg d-xs-none card">
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

  </div>

<div class="container">
  <div class="card">
<nav class="navbar card-header navbar-expand-lg navbar-light bg-info">
    <div class="col">
  <a class="navbar-brand text-light" href="#">Home & Properties</a>
    </div>
    <div class="col text-right">
    <p class="navbar-text">
          <span class="text-light">
              <router-link
                class="text-light"
                to="/Product Page"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                >see all
              </router-link>
            <b class="fa fa-caret-square-o-right"></b>
          </span>
    </p>
    </div>
</nav>
<div class="card-body">
      <div class="row justify-content-center">
<span v-for="listings of newListings"
            :key="listings.id"
            v-bind:data-id="listings.id" class="list-item list-group-item-action col-lg-3 col-sm-3 col-xs-6 list-group" style="width: 10rem;">
            <div
              v-bind:data-id="listings.id"
              style="width: 11rem;"
              href="#"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              @click="product_detail_link"
            >
                <img v-bind:src="'img/product/' + listings.product_image1" class="rounded img-fluid " style="width: 100%" alt="Product" v-bind:data-id="listings.id" />
  <div class="card-body">
    <p class="title text-dark" v-bind:data-id="listings.id">{{ listings.product_name }}</p>
    <p class="font-weight-bold text-dark" v-bind:data-id="listings.id">£{{ listings.product_price }}</p>
  </div>
            </div>
</span>
      </div>
</div>
</div>
</div>

<div class="container pt-2">

      <div class="row" >
      <div class="col-lg-6 col-sm-12 card p-2">
                <img src="img/banner/bannerrejee1.jpg" class="card-img-top" style="height: 12rem" alt="Product"/>
      </div>
      <div class="col-lg-6 col-sm-12 card p-2">
                <img src="img/banner/bannerrejee2.webp" class="card-img-top" style="height: 12rem" alt="Product"/>
      </div>
</div>
</div>

<div class="container">
  <div class="card">
<nav class="navbar card-header navbar-expand-lg navbar-light bg-danger">
    <div class="col">
  <a class="navbar-brand text-light" href="#">Home & Properties</a>
    </div>
    <div class="col text-right">
    <p class="navbar-text">
          <span class="text-light">
              <router-link
                class="text-light"
                to="/Product Page"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                >see all
              </router-link>
            <b class="fa fa-caret-square-o-right"></b>
          </span>
    </p>
    </div>
</nav>
<div class="card-body">
      <div class="row justify-content-center">
<span v-for="listings of newListings"
            :key="listings.id"
            v-bind:data-id="listings.id" class="list-item list-group-item-action col-lg-3 col-sm-3 col-xs-6 list-group" style="width: 10rem;">
            <div
              v-bind:data-id="listings.id"
              style="width: 11rem;"
              href="#"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              @click="product_detail_link"
            >
                <img v-bind:src="'img/product/' + listings.product_image1" class="rounded img-fluid " style="width: 100%" alt="Product" v-bind:data-id="listings.id" />
  <div class="card-body">
    <p class="title text-dark" v-bind:data-id="listings.id">{{ listings.product_name }}</p>
    <p class="font-weight-bold text-dark" v-bind:data-id="listings.id">£{{ listings.product_price }}</p>
  </div>
            </div>
</span>
      </div>
</div>
</div>
</div>


<div class="container pt-2">

      <div class="row" >
      <div class="col-lg-12 col-sm-12 card p-2">
                <img src="img/banner/bannerrejee1.jpg" class="card-img-top" style="height: 12rem" alt="Product"/>
      </div>
</div>
</div>
    <div id="home3" class="pt-3">
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
                    <div class="block-content pt-3">
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
                          <a
                            href="https://find-and-update.company-information.service.gov.uk/company/13151308"
                            class="text-light"
                            >Company info</a
                          >
                        </li>
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
  </section>
</template>


<script>

import User from "../../apis/User";

export default {
  name: "landingPage",
  data() {
    return {
      categoryList: [],
      newListings:[]
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
