<template>
  <header>
    <section class="row box">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-3">
        <a
          v-if="this.$store.state.isLoggedIn"
          href="#"
          class="text-dark dropdown-toggle h6"
          data-toggle="dropdown"
        >
          Hello {{ this.$store.state.currentUser.first_name }}
          
        <div class="dropdown-menu">
          <div
            class="text-sm block-content nav flex-column nav-pills"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <!-- primary info buttons -->

            <router-link
              class="text-left text-dark p-3 text-xs font-weight-bold"
              to="/Summary"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="summary"
            >
              <i class="zmdi zmdi-account h4 pr-2"></i>
              {{ this.$store.state.full_name }}<br />
              User(112837)
            </router-link>

            <!-- primary info buttons ends/-->
            <!-- Account preferences/-->
            
<hr>

        <a
              class="text-left text-dark pt-2 pl-2 text-xs pb-2 font-weight-bold"
              data-toggle="collapse"
              title="sign out"
              @click="signOut"
            ><i class="fa fa-sign-out fa-2x pr-2"></i>
              Sign out
         </a>
            <!-- Account preferences/-->
          </div>
        </div>
        </a>

        <a v-else href="#" class="h6 text-dark text-sm text-right">
          <router-link
            class="text-dark font-weight-bold"
            to="/login"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="login"
            ><i class="fa fa-user-o"></i> 
            <a > Hello Sign in or register</a>
          </router-link>
        </a>

      </div>

      <div class="col-lg-6 col-xs-6 col-md-6 col-sm-6 justify-content-end text-right pr-2">
        
        <a
          href="#"
          class="text-dark text-sm pr-3 dropdown-toggle"
          data-toggle="dropdown"
        >
          My REJEE
        </a>
        <div v-if="this.$store.state.isLoggedIn" class="row dropdown-menu justify-around pr-4">
          
          <div class="text-md nav flex-column">
            <!-- primary info buttons -->


            <!-- primary info buttons ends/-->

                <router-link
                  class="text-left underline pl-4 pb-2  font-weight-bold"
                            to="/account"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Personal Information"
                            >
                  Your Account
                </router-link>
            <!-- Account preferences/-->

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/watchingpage"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Watching
            </router-link>

            <!-- Account preferences/-->

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/recentlyviewed"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Recently viewed
            </router-link>

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/purchasehistory"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Your Orders
            </router-link>

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/My message"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Message (2)
            </router-link>

            <!-- Account preferences Ends/-->

            <!-- primary info buttons -->
                <button
                  class="text-left h6 font-weight-bold text-dark p-2 active"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="fa fa-md fa-user pr-2"></i>Account Info
                </button>
                <router-link
                  class="text-left underline pl-4 text-xs pb-2  font-weight-bold"
                            to="/buyeraddresssetting"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Addresses"
                            >
                  Your Addresses
                </router-link>
                <router-link
                  class="text-left underline pl-4 text-xs pb-2  font-weight-bold"
                            to="/buyersigninsecsetting"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Sign in and security"
                            >
                  Sign in and security
                </router-link>
            <!-- primary info buttons ends/-->

            <!-- Payment Information button/-->
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="zmdi zmdi-balance-wallet h5 pr-2"></i> Payment Info
                </button>
                <router-link
                  class="text-left underline pl-4 text-xs pb-2  font-weight-bold"
                            to="/paymentsetting"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Payments"
                            >
                  Payments
                </router-link>
              <!-- Payment   <button
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                  id="v-pills-Paypal-Account-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Paypal-Account"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Paypal-Account"
                  aria-selected="true"
                >
                  Paypal Account
                </button>
            Information button ends/-->
            <!-- Account preferences/-->
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="zmdi zmdi-settings h5 pr-2"></i> Preferences
                </button>
                <router-link
                  class="text-left underline pl-4 text-xs pb-2  font-weight-bold"
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Advertisement Preferences"
                            >
                  Advertisement Preferences
                </router-link>
                <router-link
                  class="text-left underline pl-4 text-xs pb-2  font-weight-bold"
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Communication Preferences"
                            >
                  Communication Preferences
                </router-link>
                <router-link
                  class="text-left underline pl-4 text-xs pb-2  font-weight-bold"
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Close account"
                            >
                  Close account
                </router-link>
            <!-- Account preferences Ends/-->
          </div>
            <!-- Resolution center/-->
                <router-link
                  class="text-left underline pl-4 text-xs pb-2  font-weight-bold"
                            to="/Resolution center"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Resolution center"
                            >
                  
                  <i class="fa fa-commenting-o fa-2x pr-2"></i> Resolution Center
                </router-link>
            <!-- Resolution center End/-->
        </div>

        <div v-else class="dropdown-menu pr-4">
          <div
            class="text-md block-content nav flex-column nav-pills"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <!-- primary info buttons ends/-->

            <!-- Account preferences/-->

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/My message"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Recently viewed
            </router-link>

            <!-- Account preferences Ends/-->

            <hr />

            <!-- Resolution center/-->

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/Resolution center"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              ><i class="fa fa-commenting-o fa-2x pr-2"></i> Support
            </router-link>

            <!-- Resolution center End/-->
          </div>
        </div>
        <a href="#" class="text-dark text-right text-sm pr-4">
          <router-link
            class="text-dark font-weight-bold text-sm text-right"
            to="/mechantregister"
            title="sell">
          SELL
          </router-link>
        </a>
<a href="#" v-if="this.$store.state.isLoggedIn" class="text-dark text-sm">
          <router-link
            class="text-dark font-weight-bold text-sm text-right p-2"
            to="/My message"
            title="message">
          <i class="fa fa-envelope"></i> (0)
          </router-link>
        </a>
      </div>

      <!-- header left mobie -->
    </section>

    <section class="header-mobile d-md-none">
      <div
        class="
          mobile
          hidden-md-up
          text-xs-center
          d-flex
          align-items-center
        "
      >
        <!-- logo -->

        <div class="mobile-logo pb-3">
          <img
            class="logo-mobile img-fluid "
            src="img/home/logo.png"
            width="30%"
            alt="REJEE COMPANY"
          />
        </div>

        <!-- menu right -->

        <div class="desktop_cart">
          <div class="blockcart block-cart cart-preview tiva-toggle">
            <div class="header-cart tiva-toggle-btn">
              <span class="cart-products-count">{{basketState}}</span>

              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>

            <div class="dropdown-content">
              <div class="cart-content pt-2">
                <table>
                  <tbody v-if="basketState">
                    <tr v-for="cart in this.$store.state.basket" :key="cart.id">
                      <td class="product-image">
                        <a href="product-detail.html">
                          <img v-bind:src="'img/product/' + cart['product_image1']" alt="Product" />
                        </a>
                      </td>

                      <td>
                        <div class="product-name">
                          <a href="product-detail.html"
                            >{{ cart['product_name']}}</a
                          >
                        </div>

                        <div>
                          {{cart['qnty']}}  x

                          <span class="product-price">£{{cart['qnty_price']}} </span>
                        </div>
                      </td>

                      <td class="action">
                        <a class="remove" @click="removeBasket(cart.id)">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>

                    <tr class="total">
                      <td class="p-3" colspan="2">Total:</td>

                      <td class="p-3" colspan="2">£92.96</td>
                    </tr>

                    <tr>
                      <td colspan="3" class="d-flex justify-content-center">
                        <span class="btn text-sm justify-content-start">
                          <router-link
                            to="/ViewCart"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="view Cart"
                          >
                            <button class="form-control btn-lg border btn-warning">
                              View Shopping Basket
                            </button></router-link
                          >
                        </span>
                      </td>
                    </tr>
                  </tbody>
                  <tbody v-else>
                      <tr>
                        <p class="text-dark text-center font-weight-bold">Your Basket is Empty</p>
                      </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- search -->

      <form method="post" class="std pt-3" id="customer-form">
        <div class="input-group">
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Search for anything"
            class="form-control"
            value=""
          />

          <button
            class="btn text-dark btn-light border border-light shadow"
            type="submit"
            data-action="show-password"
            data-text-show="Show"
            data-text-hide="Hide"
          >
            Search
          </button>
        </div>
      </form>
    </section>

    <!-- header desktop -->

    <section class="d-xs-none card">
      <div class="container">
        <div class="row">
          <!-- logo -->

          <div class="col-sm-2 col-md-2 col-lg-2 pb-2 align-items-left">
            <div id="logo">
              <a href="index.html">
                <img class="img-fluid" src="img/home/logo.png" alt="logo" />
              </a>
            </div>
          </div>

          <!-- search-->

          <div class="col-sm-9 col-md-9 col-lg-9 pt-2">
            <form method="post" class="std" id="customer-form">
              <div class="input-group col-12">
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Search for anything"
                  class="form-control shadow-inner"
                  value=""
                />

                <button
                  class="btn text-dark btn-light shadow border"
                  type="submit"
                  data-action="show-password"
                  data-text-show="Show"
                  data-text-hide="Hide"
                >
                  Search
                </button>
              </div>
            </form>
          </div>

          <div class="desktop_cart col-lg-1 col-md-1 justify-content-end">
            <div class="blockcart block-cart cart-preview tiva-toggle">
                            <router-link
                              to="/ViewCart"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >
                            <button type="button" class=" pt-3 btn ">
  <i
                  class="fa fa-lg p-2 fa-shopping-cart"
                  aria-hidden="true"
                ></i><span class="badge badge-danger">{{basketState}}</span>
</button></router-link>
<!--
              <div class="dropdown-content">
                <div class="cart-content pt-2">
                  <table>
                    <tbody v-if="basketState">
                      <tr v-for="cart in this.$store.state.basket" :key="cart.id">
                        <td class="product-image">
                          <a href="product-detail.html">
                            <img v-bind:src="'img/product/' + cart['product_image1']" alt="Product" />
                          </a>
                        </td>

                        <td>
                          <div class="product-name">
                            <a href="product-detail.html"
                              >{{ cart['product_name']}}</a
                            >
                          </div>

                          <div>
                            {{cart['qnty']}} x

                            <span class="product-price">£{{ cart['qnty_price']}}</span>
                          </div>
                        </td>

                        <td class="action">
                          <a class="remove" @click="removeBasket(cart['id'])">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                          </a>
                        </td>
                      </tr>

                      <tr class="total">
                        <td colspan="2">Total:</td>

                        <td>£{{this.$store.state.basketTotal}}</td>
                      </tr>

                      <tr>
                        <td colspan="3" class="d-flex justify-content-center">
                          <span class="btn p-3 text-sm justify-content-start">
                            <router-link
                              to="/ViewCart"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Cart"
                            >
                              <button class="form-control btn-dark text-white">
                                View Cart
                              </button></router-link
                            >
                          </span>

                          <span class="btn p-3 text-sm justify-content-end">
                            <router-link
                              to="/Checkout"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="Checkout"
                            >
                              <button class="form-control btn-dark text-white">
                                Checkout
                              </button></router-link
                            >
                          </span>
                        </td>
                      </tr>
                    </tbody>
                    <tbody v-else>
                      <tr>Empty Cart</tr>
                    </tbody>
                  </table>
                </div>
              </div>
              -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <div v-if="loading" id="page-preloader" class="redit">
      <div class="page-loading">
        <div class="dot text-center text-danger font-italic font-extrabold">
          
        </div>
        <div class="dot text-center text-danger font-italic font-extrabold">
          
        </div>
        <div class="dot text-center text-danger font-italic font-extrabold">
          
        </div>
        <div class="dot text-center text-danger font-italic font-extrabold">
          
        </div>
        <div class="dot text-center text-danger font-italic font-extrabold">
        
        </div>
      </div>
    </div>
  </header>
</template>
<script>

export default {
  data() {
    return {
      loading: false,  
    };
  },
  computed:{
    basketState: function(){
      return this.$store.state.basket.length;
    },
  },
  methods: {
    login() {
      this.$store.dispatch("userloginInfo");
    },
    signOut() {
      this.$store.dispatch("logout");
      this.$router.push("/signout");
    },
    removeBasket: function (id){
      var itemToRemove = id;
      this.$store.dispatch('removeFromBasket', itemToRemove);
    }
  },
  created() {
    this.$http.defaults.headers.common['Authorization'] = `Bearer ${this.$store.state.token}`;
    this.login();
    
  },
};
</script>

