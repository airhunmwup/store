<template>
  <header>
    <div class="row box">
      <div class="col-lg-6 col-md-6 col-sm-4 h6 pl-4 pr-5">

        <a
          v-if="currentUser"
          href="#"
          class="text-dark text-sm dropdown-toggle"
          data-toggle="dropdown"
<<<<<<< HEAD
        > Hi {{currentUser.first_name}}
        </a>
        <a
          v-else
          href="#"
          class="text-dark text-sm text-right"
        >
            <router-link
              class="text-dark font-weight-bold"
              to="/login"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="login"
            ><i class="fa fa-user-o"></i> 
          Hi Sign in or register
            </router-link>
            </a>
            <div class="dropdown-menu">
=======
        > Hi {{currentUser.name}}
        <div class="dropdown-menu">
>>>>>>> 256df24fef98492fa76af09baf8ed940ba220596
          <div
            class="text-sm block-content nav flex-column nav-pills"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <!-- primary info buttons -->
            <router-link
              class="text-left text-dark pl-4 text-xs pb-2 font-weight-bold"
              to="/Summary"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="summary"
            >
              <i class="zmdi zmdi-account h4 pr-2"></i> {{currentUser.name}}<br />
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
            <!-- Account preferences/-->
            <hr />
            <!-- Resolution center/-->
            <a
              @click="logout"
              class="text-left pl-4 text-xs pb-2 font-weight-bold"
              to="/Signout"
              title="sign out"
              ><i class="fa fa-sign-out fa-2x pr-2"></i>
              Sign out
            </a>
            <!-- Resolution center/-->
          </div>
        </div>
<<<<<<< HEAD
=======
        </a>
        <a
          v-else
          href="#"
          class="text-dark text-sm text-right"
        >
            <router-link
              class="text-dark font-weight-bold"
              to="/login"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="login"
            ><i class="fa fa-user-o"></i> 
          Hi Sign in or register
            </router-link>
            </a>
>>>>>>> 256df24fef98492fa76af09baf8ed940ba220596
      </div>
        
        
      <div class="col-lg-6 col-md-6 col-sm-4 h6 text-right pl-5 pr-5">
        
        <a
          v-if="token"
          href="#"
<<<<<<< HEAD
          class="text-dark text-sm "
=======
          class="text-dark text-sm"
>>>>>>> 256df24fef98492fa76af09baf8ed940ba220596
        > 
        <router-link
          class="text-dark font-weight-bold text-sm text-right pr-4"
          to="/mechantregister"
          title="sell"
        >
          SELL</router-link
        >
        </a>
        <a
          v-else
          href="#"
        >
        <router-link
          class="text-dark font-weight-bold text-sm text-right pr-4"
<<<<<<< HEAD
          to="/Creating listing"
=======
          to="/mechantregister"
          data-toggle="collapse"
          data-target=".navbar-collapse"
>>>>>>> 256df24fef98492fa76af09baf8ed940ba220596
          title="sell"
        >
          SELL</router-link
        >
        </a>
        <a
          v-if="token"
          href="#"
          class="ptext-dark text-sm text-right dropdown-toggle"
          data-toggle="dropdown"
        >
          My REJEE
        </a>
        <div
          v-if="token"
           class="dropdown-menu">
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
              ><i class="fa fa-commenting-o fa-2x pr-2"></i>
              Support
            </router-link>
            <!-- Resolution center End/-->
          </div>
        </div>
        <div
          v-else
           class="dropdown-menu">
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
              ><i class="fa fa-commenting-o fa-2x pr-2"></i>
              Support
            </router-link>
            <!-- Resolution center End/-->
          </div>
        </div>
      </div>
      <!-- header left mobie -->
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
          <div class="mobile-logo">
            <img
              class="logo-mobile img-fluid"
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
                      <tr>
                        <td class="product-image">
                          <a href="product-detail.html">
                            <img src="img/product/5.jpg" alt="Product" />
                          </a>
                        </td>
                        <td>
                          <div class="product-name">
                            <a href="product-detail.html"
                              >Organic Strawberry Fruits</a
                            >
                          </div>
                          <div>
                            2 x
                            <span class="product-price">£28.98</span>
                          </div>
                        </td>
                        <td class="action">
                          <a class="remove" href="#">
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
                              View Cart</button></router-link
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
                              Checkout</button></router-link
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

        <form method="post" class="std pt-2" id="customer-form">
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
            <div class="col-sm-2 col-md-2 col-lg-2 align-items-center">
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
                        <tr>
                          <td class="product-image">
                            <a href="product-detail.html">
                              <img src="img/product/5.jpg" alt="Product" />
                            </a>
                          </td>
                          <td>
                            <div class="product-name">
                              <a href="product-detail.html"
                                >Organic Strawberry Fruits</a
                              >
                            </div>
                            <div>
                              2 x
                              <span class="product-price">£28.98</span>
                            </div>
                          </td>
                          <td class="action">
                            <a class="remove" href="#">
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
                              View Cart</button></router-link
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
                              Checkout</button></router-link
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
    </div>
  </header>
</template>
<script>

import {store} from '../main.js';
export default {
  data(){
    return {
      token: localStorage.getItem('token'),
      user: JSON.parse(localStorage.getItem('user')),
      currentUser: false
    }
  },
  methods: {
    logout() {
        this.$http.post("http://localhost:8000/api/logout").then((response) => {
            console.log(response);
            localStorage.removeItem('token');
            localStorage.removeItem('user');
            this.$router.push('/Signout');
        }).catch((errors) => {
            console.log(errors)
        })
    }
  },
  mounted(){
    console.log(this.currentUser);
    this.$http.defaults.headers.common[`Authorization`] = `Bearer ${this.token}`;
    
    this.$http.get("http://localhost:8000/api/user").then((response)=>{
      this.currentUser = response.data;
    }).catch((errors)=>{
      console.log(errors);
    })
  }
};
</script>

