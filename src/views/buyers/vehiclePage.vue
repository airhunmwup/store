<template>
  <!-- main content -->

  <section class="justify-content-center">
      <!-- main content -->

      <div class="row justify-content-center pt-3">
        <div class="col-xs-12 col-lg-5 col-md-5 col-sm-12">
          <div class="page-content" id="content">
            <div class="images-container">
              <div class="js-qv-mask tab-content">
                <div
                  v-for="img in productDetails.vehicle_images.slice(0,1)"
                  v-bind:id="'item' + img.id"
                  class="tab-pane fade show active"
                  v-bind:key="img.id"
                >
                  <img v-bind:src="API_BASE_URL + img.product_image_path" alt="Product" style="max-height:300px; width:100%; margin: 5px;" v-bind:data-id="img.id" />
                </div>
                <div
                  v-for="img in productDetails.vehicle_images"
                  v-bind:id="'item' + img.id"
                  class="tab-pane fade show"
                  v-bind:key="img.id"
                >
                  <img v-bind:src="API_BASE_URL + img.product_image_path" alt="Product" style="max-height:300px; width:100%; margin: 5px;" v-bind:data-id="img.id" />
                </div>
                 </div>
              <ul class="product-tab nav nav-tabs d-flex">
                <li class="col" v-for="img in productDetails.vehicle_images" v-bind:key="img.id">
                  <a v-bind:href="'#item' + img.id" data-toggle="tab">
                    <img v-bind:src="API_BASE_URL + img.product_image_path" alt="Product" style="height:100px;" v-bind:data-id="img.id" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row col-xs-12 pt-3 col-lg-4 col-md-4 col-sm-12">
          <p class="lead text-dark mt-4 font-weight-bold">
            {{ productDetails.vehicle_make }} {{ productDetails.vehicle_model}} 
          </p>

          <div class="dropdown-divider"></div>

          <p class="font-weight-bold mt-2 text-dark">
            Price:<span class=""> £{{ productDetails.vehicle_price }}</span>
          </p>


          <p class="font-weight-bold text-dark mt-2">About this vehicle</p>
  <div class="row pt-2">
    <div class="col">
          <p class="text-sm"><i class="fa fa-tachometer"></i> <span class="text-xs"> Driven {{ productDetails.vehicle_millage }} kilometers</span></p>
          <p class="text-sm"><i class="fa fa-steam"></i><span class="text-xs"> {{ productDetails.vehicle_enginetype }} </span> </p>
          <p class="text-sm"><i class="zmdi zmdi-gas-station"></i> <span class="text-xs"> {{ productDetails.vehicle_fueltype }} </span></p>
    </div>
  </div>


          <div class="form-group mt-2 p-2">
              <div class="pb-2">
            <button class="btn btn-warning  btn-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fa fa-commenting"></i> Message Seller</button>

              </div>
<div class="offcanvas offcanvas-bottom" tabindex="5" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
<div class="offcanvas-body justify-center small">
  <div class="row">
    <div class="col-12 col-md-10">
<div class="mb-3">
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
    </div>
    <div class="col">
<button type="button" class="btn btn-success btn-block"><i class="fa fa-send-o"></i> Send</button>
    </div>
  </div>
</div>
</div>
            <button
              @click="addToWatchlist(productDetails['id'])"
              class="btn btn-secondary  btn-block"
              type="submit"
            >
              <i class="fa fa-bookmark"></i> Add to watchlist
            </button>
          </div>

          <div class="">
            <!--the option below is suppose to show if the category has size, e.g shoes and cloths only sizes available displays-->

            <div class="option has-border d-lg-flex size-color">
              <div class="size"></div>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-lg-3 col-md-3">
          <div class="mt-2">
            <div class="text-sm">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#home"
                    type="button"
                    role="tab"
                    aria-controls="home"
                    aria-selected="true"
                  >
                    Description
                  </button>
                </li>

                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link text-dark"
                    id="profile-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#profile"
                    type="button"
                    role="tab"
                    aria-controls="profile"
                    aria-selected="false"
                  >
                    Sellers Location
                  </button>
                </li>
              </ul>

              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="home"
                  role="tabpanel"
                  aria-labelledby="home-tab"
                >
                  <div class="container text-dark">

                    <p class="text-md m-2">
                      {{ productDetails.vehicle_desc }}
                    </p>
                    <div class="dropdown-divider"></div>

                    <p class="text-md m-2 font-weight-bold">
                      Sellers Information
                    </p>

                    <div class="row">
                      <div class="col">
                        <p class="">{{productDetails.user.first_name}} {{productDetails.user.last_name}}</p>


                        <p class="text-xs pt-4 underline text-primary">
                          <router-link 
                              :to="{ name: 'seller', params: { uid: productDetails.user.id, username: productDetails.user.first_name + ' ' + productDetails.user.last_name}}"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                            >
                          Other items by {{productDetails.user.first_name}}
                           </router-link>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="tab-pane fade"
                  id="profile"
                  role="tabpanel"
                  aria-labelledby="profile-tab"
                >
                  <div class="container text-dark">
                    <div class="row mt-2 text-sm">
                      <div class="col-3">
                        <p class="text-sm font-weight-bold">Postage: not available</p>
                      </div>

                    </div>

                    <div class="dropdown-divider"></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="dropdown-divider"></div>

    <section class="appion">
      <div class="col-12">
        <p class="h3 text-dark">Similar Items</p>
      </div>

      <!-- breadcrumb -->

      <div  class="ul gs full">
        <li class="li itemi" v-for="listing in similarItems" :key="listing.id">
          <router-link
            class=""
            :to="{ name: 'vehiclepage', params: { pid: listing.id, pname: listing.vehicle_make + ' ' + listing.vehicle_model}}"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <div v-for="img in listing.vehicle_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path" class="card-img-top" style="height:180px; width: 100%;" alt="Product" v-bind:data-id="img.id" /></div>

                <div class="card-body">
                  <p class="h6 text-dark">{{ listing.vehicle_make }}</p>

                  <p class="font-weight-bold h6 text-dark">£{{ listing.vehicle_price }}</p>

                </div>
              </div>
            </div>
          </router-link>
        </li>

      </div>
    </section>
  </section>
</template>

<script>
import User from "../../apis/User";
import Constants from "../../common/constants";

export default {
  name: "productDetails",
  data() {
    return {
      productDetails: [],
      p_id: this.$route.params.pid,
      img: [],
      nums: 4,
      order_qnty: 1,
      watchCount: 0,
      API_BASE_URL: Constants.API_BASE_URL,
      similarItems: [],
    };
  },
  computed: {
    basket: function () {
      return this.$store.state.basket;
    },
  },
  methods: {
    getProductDetails(pid) {
      User.vehicle_detail_page(pid)
        .then((response) => {
          this.productDetails = response.data[0];
          this.getSimilarItems(this.productDetails.product_cat_id,this.productDetails.product_subcat_id,pid);
          console.log(this.productDetails);
          //this.saveRecentView(this.$store.state.product_detail_id);
        })
        .catch((error) => {
          console.log(error);
        });
      console.log(pid);
    },
    saveRecentView(pid) {
      const data = {
        product_id: pid,
        user_id: this.$store.state.currentUser.id,
      };
      console.log(pid);
      User.saveRecentView(data)
        .then((response) => {         
          console.log(response);
        })
        .catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
            console.log(error.response.data.message);
        }
      })
      
    },
    getSimilarItems(a,b,c){
    const data = {
        cat_id: a,
        subcat_id: b,
        pid: c,
      };
      User.getSimilarItems2(data)
        .then((response) => {   
          this.similarItems = response.data;      
          console.log(this.similarItems);
        })
        .catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
            console.log(error.response.data.message);
        }
      })
    },

    findBasket(index) {
      return index.id == this.productDetails.id;
    },
    addToBasket() {
      if (this.$store.state.basket.length == 0) {
        console.log(this.order_qnty);
        this.productDetails["qnty"] = this.order_qnty;
        this.productDetails["qnty_price"] =
          this.productDetails.product_price * this.order_qnty;
        this.$store.dispatch("addToBasket", this.productDetails);
      } else if (this.$store.state.basket.length > 0) {
        console.log(this.order_qnty);
        var basketStore = this.$store.state.basket;
        var updateBasket = basketStore.find(this.findBasket);
        //if product exists in basket and qnty is not equals to the qnty in the basket
        if (
          basketStore.findIndex(this.findBasket) >= 0 &&
          updateBasket.qnty != this.order_qnty
        ) {
          this.productDetails["qnty"] = this.order_qnty;
          this.productDetails["qnty_price"] =
            this.productDetails.product_price * this.order_qnty;
          this.$store.dispatch("updateBasket", this.productDetails);
          //if product does not exist in basket
        } else if (basketStore.findIndex(this.findBasket) == -1) {
          this.productDetails["qnty"] = this.order_qnty;
          this.productDetails["qnty_price"] =
            this.productDetails.product_price * this.order_qnty;
          this.$store.dispatch("addToBasket", this.productDetails);
        } else if (basketStore.findIndex(this.findBasket) >= 0) {
          console.log("Already Added");
        }
      }
    },
    addToWatchlist(product_id) {
      var data = {
        product_name: this.productDetails.product_name,
        product_image: this.productDetails.product_image1,
        product_price: this.productDetails.product_price,
        product_condition: this.productDetails.product_condition,
        user_id: this.$store.state.currentUser.id,
      };

      const checkWishlist = {
        product_name: this.productDetails.product_name,
        user_id: this.$store.state.currentUser.id,
      };

      if (this.$store.state.token) {
        User.checkwishlist(checkWishlist)
          .then((response) => {
            if (response.data.status == 1) {
              console.log("Already in wishlist");
            } else if (response.data.status == 0) {
              User.addToWishlist(data)
                .then(() => {
                  console.log("Added to wish list");
                  this.$store.dispatch("getuser", data.user_id);
                })
                .catch((error) => {
                  console.log(error);
                });
            }
          })
          .catch((error) => {
            console.log(error);
          });
      } else if (!this.$store.state.token) {
        this.$router.push("/login");
        console.log(product_id);
      }
    },
    watchCounter() {
      const data = { product_name: this.productDetails.vehicle_make };
      console.log(this.productDetails.vehicle_make);
      return User.watchersCounter(data)
        .then((response) => {
          this.watchCount = response.data.status;
          console.log(this.watchCount);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {
    this.getProductDetails(this.p_id);
    this.watchCounter();
  },
};
</script>
