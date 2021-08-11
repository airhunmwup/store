<template>
  <header>
    <div class="row box">
      <div class="col-lg-6 col-md-6 col-sm-4 h6 pl-4 pr-5">
        <a
          v-if="this.$store.state.isLoggedIn"
          href="#"
          class="text-dark text-sm dropdown-toggle"
          data-toggle="dropdown"
        >
          Hi {{ this.$store.state.currentUser.first_name }}
          
        <div class="dropdown-menu">
          <div
            class="text-sm block-content nav flex-column nav-pills"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <!-- primary info buttons -->

            <router-link
              class="text-left text-dark p-4 text-xs font-weight-bold"
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

            <router-link
              class="text-left text-primary pl-4 text-xs pb-2 font-weight-bold"
              to="/account"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="account"
            >
              Account settings
            </router-link>
            
<hr>

        <a
              class="text-left text-dark pt-3 pl-4 text-xs pb-2 font-weight-bold"
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

        <a v-else href="#" class="text-dark text-sm text-right">
          <router-link
            class="text-dark font-weight-bold"
            to="/login"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="login"
            ><i class="fa fa-user-o"></i> 
            <a > Hi Sign in or register</a>
          </router-link>
        </a>

      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 h6 justify-content-end text-right pl-5 pr-5">
        <a href="#" class="text-dark text-sm">
          <router-link
            class="text-dark font-weight-bold text-sm text-right pr-4"
            to="/mechantregister"
            title="sell">
          SELL
          </router-link>
        </a>

        <a
          href="#"
          class="text-dark text-sm text-right dropdown-toggle"
          data-toggle="dropdown"
        >
          My REJEE
        <div v-if="this.$store.state.isLoggedIn" class="dropdown-menu">
          <div
            class="text-md block-content nav flex-column nav-pills"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <!-- primary info buttons -->

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/Summary"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              
            >
              Summary
            </router-link>

            <!-- primary info buttons ends/-->

            <!-- Account preferences/-->

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/account"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Wishlist
            </router-link>

            <!-- Account preferences/-->

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/My message"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Recently viewed
            </router-link>

            <router-link
              class="text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/My message"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Purchase history
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

        <div v-else class="dropdown-menu">
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
        </a>
<a href="#" class="text-dark text-sm">
          <router-link
            class="text-dark font-weight-bold text-sm text-right p-2"
            to="/My message"
            title="message">
          <i class="fa fa-envelope"></i> (0)
          </router-link>
        </a>
      </div>

      <!-- header left mobie -->
    </div>

    <div class="header-mobile d-md-none">
      <div
        class="
          mobile
          hidden-md-up
          text-xs-center
          d-flex
          align-items-center
          justify-content-around
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
              <span class="cart-products-count">1</span>

              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>

            <div class="dropdown-content">
              <div class="cart-content pt-2">
                <table>
                  <tbody>
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

                          <span class="product-price">£{{cart['product_price']}} </span>
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
                        <span class="btn p-3 text-sm justify-content-start">
                          <router-link
                            to="/View Cart"
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
            class="btn text-light btn-primary border"
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

    <!-- header desktop -->

    <div class="d-xs-none card">
      <div class="container">
        <div class="row">
          <!-- logo -->

          <div class="col-sm-2 col-md-2 col-lg-2 pb-2 align-items-center">
            <div id="logo">
              <a href="index.html">
                <img class="img-fluid" src="img/home/logo.png" alt="logo" />
              </a>
            </div>
          </div>

          <!-- search-->

          <div class="col-sm-8 col-md-8 col-lg-8 pt-2">
            <form method="post" class="std" id="customer-form">
              <div class="input-group col-12">
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Search for anything"
                  class="form-control"
                  value=""
                />

                <button
                  class="btn text-light btn-primary border"
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

          <div class="desktop_cart col-lg-2 col-md-2 justify-content-end">
            <div class="blockcart block-cart cart-preview tiva-toggle">
              <span class="text-right pl-3"
                ><i
                  class="fa fa-2x pt-3 fa-shopping-cart"
                  aria-hidden="true"
                ></i>

                <b class="text-danger">(1)</b></span
              >

              <div class="dropdown-content">
                <div class="cart-content pt-2">
                  <table>
                    <tbody>
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

                            <span class="product-price">£{{ cart['product_price']}}</span>
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

                        <td>£92.96</td>
                      </tr>

                      <tr>
                        <td colspan="3" class="d-flex justify-content-center">
                          <span class="btn p-3 text-sm justify-content-start">
                            <router-link
                              to="/View Cart"
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
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-if="loading" id="page-preloader" class="redit">
      <div class="page-loading">
        <div class="dot text-center text-danger font-italic font-extrabold">
          R
        </div>
        <div class="dot text-center text-danger font-italic font-extrabold">
          E
        </div>
        <div class="dot text-center text-danger font-italic font-extrabold">
          J
        </div>
        <div class="dot text-center text-danger font-italic font-extrabold">
          E
        </div>
        <div class="dot text-center text-danger font-italic font-extrabold">
          E
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
  mounted() {
    console.log("ran...");
    this.$http.defaults.headers.common['Authorization'] = `Bearer ${this.$store.state.token}`;
    this.login();
  },
};
</script>

