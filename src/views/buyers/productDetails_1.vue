<template>
  <!-- main content -->

  <section class="justify-content-center">
    <div class="">
      <!-- main content -->

      <div class="row justify-content-center pt-3">
        <div class="product-detail col-xs-12 col-lg-4 col-md-4 col-sm-12">
          <div class="page-content" id="content">
            <div class="images-container">
              <div class="js-qv-mask tab-content">
                <div
                  v-for="img in productDetails.product_images.slice(0,1)"
                  v-bind:id="'item' + img.id"
                  class="tab-pane fade show active"
                  v-bind:key="img.id"
                >
                  <img v-bind:src="API_BASE_URL + img.product_image_path" alt="Product" style="max-height:300px; width:100%; margin: 5px;" v-bind:data-id="img.id" />
                </div>
                <div
                  v-for="img in productDetails.product_images"
                  v-bind:id="'item' + img.id"
                  class="tab-pane fade show"
                  v-bind:key="img.id"
                >
                  <img v-bind:src="API_BASE_URL + img.product_image_path" alt="Product" style="max-height:300px; width:100%; margin: 5px;" v-bind:data-id="img.id" />
                </div>
              </div>

              <ul class="product-tab nav nav-tabs d-flex">
                <li class="col" v-for="img in productDetails.product_images" v-bind:key="img.id">
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
            {{ productDetails.product_name }}
          </p>

          <div class="dropdown-divider"></div>

          <p class="font-weight-bold mt-2 text-sm text-dark">
            Price:<span class=""> £{{ productDetails.product_price }}</span>
          </p>

          <p class="text-sm text-success mt-2">In stock</p>

          <p class="font-weight-bold text-dark mt-2"></p>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">Quantity</span>
                        <input
                          type="number"
                          max="10"
                          min="1"
                          value="1"
                          class="form-control form-control-sm col-2 mx-sm-3"
                          v-model.number="order_qnty"
                        />
          </div>

          <div class="form-group mt-2">
            <button
              @click="addToBasket"
              class="btn btn-warning btn-sm btn-block"
              type="submit"
            >
              <i class="fa fa-shopping-cart"></i> Move to basket
            </button>

            <button
              @click="addToWatchlist(productDetails['id'])"
              class="btn btn-secondary btn-sm btn-block"
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

            <div class="card">
              <div class="container">
                <div class="row text-center text-sm text-dark">
                  <div class="col">
                    <p class="">{{ watchCount }} watchers</p>
                  </div>

                  <div class="col">
                    <p class="">30-day return</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-4 col-md-4">
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
                    Postage
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
                    <p class="text-md m-2 font-weight-bold">
                      Item Specifications
                    </p>

                    <div class="row">
                      <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <th scope="row">Condition:</th>
                        <td>{{ productDetails.product_condition }}</td>
                      </tr>
                      <tr class="bg-white">
                        <th scope="row">Type:</th>
                        <td>{{productDetails.product_subcat}}</td>
                      </tr>
                    </tbody>
                  </table>
                    </div>

                    <div class="dropdown-divider"></div>

                    <p class="text-md m-2 font-weight-bold">
                      Sellers Information
                    </p>

                    <div class="row">
                      <div class="col">
                        <p class="">Sellers name here</p>

                        <p class="mt-2">Sellers description here:</p>

                        <p class="text-xs underline text-primary">
                          See other items from this seller
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
                        <p class="text-sm font-weight-bold">Postage:</p>
                      </div>

                      <div class="col-9 text-xs">
                        <p class="text-success underline">{{productDetails.product_shipping_rate}}</p>

                        <p>{{productDetails.product_shipping_type}}.</p>
                        <p><span class="font-weight-bold">Shipping cost:</span> <span class="font-weight-bold"> £{{productDetails.product_shipping_cost}}.</span></p>

                      </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <div class="row text-sm">
                      <div class="col-3">
                        <p class="text-sm font-weight-bold">Payment:</p>
                      </div>

                      <div class="col-9">
                        <p>Credit/debit card <span class="fa fa-credit-card"></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="dropdown-divider"></div>
    </div>

    <section class="appion">
  <div class="row">
    <div class="col">
        <p class="h3 text-dark">Similar Items</p>
    </div>
    <div class="col text-right">
        <span class="text-dark text-right text-xs">
          <b class=""> see all </b>

          <b class="fa fa-caret-square-o-right"></b>
        </span>
    </div>
  </div>

      <!-- breadcrumb -->

      <div v-if="similarItems" class="ul gs full">
        <li class="li itemi" v-for="listings of similarItems" :key="listings.id">
          <router-link
            class=""
            :to="{ name: 'productDetails_1', params: { pid: listings.id, pname: listings.product_name}}"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
           <a @click="getData(listings.id)">
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <div v-for="img in listings.product_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path" class="card-img-top" style="height:180px; width: 100%;" alt="Product" v-bind:data-id="img.id" /></div>

                <div class="card-body">
                  <p class="h6 text-dark">{{ listings.product_name }}</p>

                  <p class="font-weight-bold h6 text-dark">£{{ listings.product_price }}</p>

                </div>
              </div>
            </div>
            </a>
          </router-link>
        </li>

      </div>
    </section>
      <div class="p-2"></div>
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
      User.product_detail_page(pid)
        .then((response) => {
          this.productDetails = response.data[0];
          console.log(this.productDetails);
          this.saveRecentView(pid);
          this.getSimilarItems(this.productDetails.product_cat_id,this.productDetails.product_subcat_id,pid);
        })
        .catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
            console.log(error.response.data.message);
        }
      });
      console.log(this.productDetails);
    },
    saveRecentView(pid) {
      const data = {
        product_id: pid,
        user_id: this.$store.state.currentUser.id,
      };
      console.log(pid);
      User.saveRecentView(data)
        .then((response) => {         
          console.log(response.data);
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
      User.getSimilarItems(data)
        .then((response) => {   
          this.similarItems = response.data;      
          console.log(response.data);
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
    getData(pid){
    User.product_detail_page(pid)
        .then((response) => {
          this.productDetails = response.data[0];
          console.log(this.productDetails);
          this.saveRecentView(pid);
          this.getSimilarItems(this.productDetails.product_cat_id,this.productDetails.product_subcat_id,pid);
        })
        .catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
            console.log(error.response.data.message);
        }
      });
    },
    getImages() {
      const img = Object.keys(this.productDetails);
      img.map((key) => {
        this.img[key] = this.getProductDetails;
      });
      console.log(this.img);
    },
    activeImage(id) {
      if (id == 1) {
        return "active in show";
      } else {
        return "";
      }
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
        product_image: this.productDetails.product_images[0].product_image_path,
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
                .then((response) => {
                  console.log("Added to wish list");
                  this.$store.dispatch("getuser", data.user_id);
                })
                .catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
            console.log(error.response.data.message);
        }
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
      const data = { product_name: this.productDetails.product_name };
      console.log(this.productDetails.product_name);
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
