<template>
  <!-- main content -->

  <!-- main content -->
  <!-- main -->
  <section>
    <!-- breadcrumb -->

    <div class="appion">
      <!-- breadcrumb -->
      <ul class="hs full">
        <router-link
          v-for="category of categoryList"
          :key="category.id"
          to="/categorie page"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="Home"
        >
          <li class=" item text-dark  text-sm text-center font-weight-regular">{{category.cat_name}}</li></router-link
        >
      </ul>
    </div>

    <ul class="hax shadow">
      <li class="">
        <a href="#">
          <img
            class="hax"
            src="img/home/effect4.jpg"
            alt="banner-1"
            title="banner-1"
          />
        </a>
      </li>
      <li class="">
        <a href="#">
          <img
            class="hax"
            src="img/home/effect2.jpg"
            alt="banner-1"
            title="banner-1"
          />
        </a>
      </li>
    </ul>
    <!-- main content -->
    <div class="main-content">
      <!-- main -->

      <div class="appion shadow">
        <div class="col-12">
          <p class="h3 text-dark">Newly listed</p>
          <p class="text-dark text-right">
            <b class="">
              <router-link
                class=""
                to="/Product Page"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="Home"
                >see all
              </router-link></b
            >
            <b class="fa fa-caret-square-o-right"></b>
          </p>
        </div>
      <!-- breadcrumb -->
        <div class="ul gs full">
          <li 
            class="li itemi"
            v-for="listings of newListings"
            :key="listings.id"
            v-bind:data-id="listings.id"
          >
            <a
              v-bind:data-id="listings.id"
              class=""
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
              @click="product_detail_link"
            >
              <div class=" p-2">
                <img v-bind:src="'img/product/' + listings.product_image1" class="" alt="Product" v-bind:data-id="listings.id"/>
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline" v-bind:data-id="listings.id">{{ listings.product_name }}</p>
                    <p class="font-weight-bold text-lg text-dark" v-bind:data-id="listings.id">£{{ listings.product_price }}</p>
                    <p class="text-dark" v-bind:data-id="listings.id">RRP: <del> £350</del></p>
                  </div>
                </div>
              </div>
            </a>
          </li>
        </div>
      </div>
      <!--each sections from down below will be resend update from different categories eg like the vehicle way they under, just display only for-->

      <div class="appion">
        <div class="col-12">
          <p class="h3 text-dark">Vehicles</p>
          <p class="text-dark text-right">
            <b class=""> see all </b>
            <b class="fa fa-caret-square-o-right"></b>
          </p>
        </div>
      <!-- breadcrumb -->
        <div class="ul gs full">
          <li class="li itemi">
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
                <img src="img/product/1.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/2.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/3.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/4.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/5.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/6.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
                  </div>
                </div>
              </div>
            </router-link>
          </li>
        </div>
      </div>
      <!--Product adverts this will be set inrespect to the advertising actions-->

      <div class="appion shadow">
        <!-- breadcrumb -->
        <div class="ul gs full">
          <li class="li itemi">
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
                <img src="img/product/10.jpg" class="" alt="Product" />
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
              <div class=" p-2">
                <img src="img/product/22.jpg" class="" alt="Product" />
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
              <div class=" p-2">
                <img src="img/product/13.jpg" class="" alt="Product" />
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
              <div class=" p-2">
                <img src="img/product/17.jpg" class="" alt="Product" />
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
              <div class=" p-2">
                <img src="img/product/16.jpg" class="" alt="Product" />
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
              <div class=" p-2">
                <img src="img/product/14.jpg" class="" alt="Product" />
              </div>
            </router-link>
          </li>
        </div>
      </div>

      <div class="appion">
        <div class="col-12">
          <p class="h3 text-dark">Property to Rent</p>
          <p class="text-dark text-right">
            <b class=""> see all </b>
            <b class="fa fa-caret-square-o-right"></b>
          </p>
        </div>
      <!-- breadcrumb -->
        <div class="ul gs full">
          <li class="li itemi">
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
                <img src="img/product/1.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/2.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/3.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/4.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/5.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
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
              <div class=" p-2">
                <img src="img/product/6.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
                  </div>
                </div>
              </div>
            </router-link>
          </li>
        </div>
      </div>
      <!--adverts banners of store, product or anything related to banner adverts this will be set inrespect to the advertising actions-->
      <div class="appion shadow">
        <!-- breadcrumb -->
        <div class="ul gs full">
          <li class="lix  p-2">
                <img src="img/home/effect2.jpg" class="malami" alt="banner" />
          </li>
          <li class="lix  p-2">
                <img src="img/home/effect3.jpg" class="malami" alt="banner" />
          </li>
          <li class="lix  p-2">
                <img src="img/home/effect4.jpg" class="malami" height="120px" alt="banner" />
          </li>
          <li class="lix  p-2">
                <img src="img/home/effect4.jpg" class="malami" height="120px" alt="banner" />
          </li>
        </div>
      </div>
    </div>

    <div id="home3" class="pt-3">
      <footer class="footer-one">
    <hr />
        <div class="inner-footer">
          <div class="container col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="footer-top">
              <div class="row pl-5">
                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block">Buy</div>
                      <ul>
                        <li class="underline">
                          <router-link
                            to="/register"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Registration</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/money back guarantee"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >REJEE Stores Money back Guarantee</router-link
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="block-content pt-3">
                      <div class="title-block">Sell</div>
                      <ul>
                        <li class="underline">
                          <router-link
                            to="/Start selling"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Start Selling</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/Start selling guide"
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
                      <div class="title-block">About REJEE Stores</div>
                      <ul>
                        <li class="underline">
                          <a
                            href="https://find-and-update.company-information.service.gov.uk/company/13151308"
                            >Company info</a
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/User Privacy"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Policies</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/User Agreement"
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
                      <div class="title-block">Help & Contact</div>
                      <ul>
                        <li class="underline">
                          <router-link
                            to="/Resolut Center"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Resolution Center</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/selling"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Seller Center</router-link
                          >
                        </li>
                        <li class="underline">
                          <router-link
                            to="/managing returns missing items and refunds for sellers"
                            data-toggle="collapse"
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
                      <div class="title-block">Stay Connected</div>
                      <ul>
                        <li>
                          <a href="https://www.facebook.com/REJEELtd"
                            ><i class="fa fa-facebook"></i> Facebook</a
                          >
                        </li>
                        <li>
                          <a href="https://instagram.com/REJEEcompany"
                            ><i class="fa fa-instagram"></i> Instagram</a
                          >
                        </li>
                        <li>
                          <a href="https://twitter.com/REJEEcompany"
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
