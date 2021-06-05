<template>
  <header>
    <div>
      <!-- breadcrumb -->
      <!-- breadcrumb -->
      <nav class="breadcrumb-bg">
        <div class="container no-index">
          <div class="breadcrumb">
            <ol>
              <li></li>
            </ol>
          </div>
        </div>
      </nav>
      <!-- header left mobie -->
      <div class="header-mobile d-md-none">
        <div
          class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around"
        >
          <!-- logo -->
          <div class="mobile-logo ">
                
            <img
              class="logo-mobile img-fluid"
              src="img/home/logo.png"
              width="30%"
              alt="REJEE COMPANY"
            />
          </div>

          <!-- menu right -->

          <div class="pr-4 desktop_cart">
            <div class="blockcart block-cart cart-preview tiva-toggle">
              <div class="header-cart tiva-toggle-btn">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Login
              </div>
              <div class="dropdown-content">
                <div class="cart-content">
                  <div class="">
                    <ul>
                      <li class="col">
                        
                        <div class="menu-content">
                          <ul class="col">
                            <li class="item-left">
                              <router-link
                                to="/Login"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Login"
                              >
                                <b class="fa fa-sign-in"></b>
                                <span> Login</span></router-link
                              >
                            </li>
                            <br />
                            <li class="item-left">
                              <router-link
                                to="/Register Personal Account"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Register Personal Account"
                              >
                                <b class="fa fa-"> </b>
                                <span> Register</span>
                              </router-link>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <hr>
                      <li class="item col-md-4">
                        <div class="box form-group">
                          <a href="user-wishlist.html" title="My Wishlists">
                            <b class="fa fa-question-circle"></b>
                            <span> Need Help</span>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="desktop_cart">
            <div class="blockcart block-cart cart-preview tiva-toggle">
              <div class="header-cart tiva-toggle-btn">
                <span class="cart-products-count">1</span>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              </div>
              <div class="dropdown-content">
                <div class="cart-content">
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
                          <div class="cart-button">
                            <a href="product-cart.html" title="View Cart"
                              >View Cart</a
                            >
                            <a href="product-checkout.html" title="Checkout"
                              >Checkout</a
                            >
                          </div>
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

        <div id="mobile_search" class="d-flex">
          <div id="mobile_search_content">
            <form method="get" action="#">
              <input type="text" name="s" value="" placeholder="Search" />
              <button type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- header desktop -->
      <div class="header-top d-xs-none">
        <div class="container">
          <div class="row">
            <!-- logo -->
            <div class="col-sm-2 col-md-2 d-flex align-items-center">
              <div id="logo">
                <a href="index.html">
                  <img class="img-fluid" src="img/home/logo.png" alt="logo" />
                </a>
              </div>
            </div>

            <!-- search-->
            <div
              id="search_widget"
              class="col-sm-6 col-md-10 align-items-center justify-content-end d-flex"
            >
              <form method="get" action="#">
                <input
                  type="text"
                  name="s"
                  value=""
                  placeholder="Search ..."
                  class="ui-autocomplete-input large"
                  autocomplete="off"
                />
                <button type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </form>

              <!-- acount  -->
              <div id="block_myaccount_infos" class="pr-4 hidden-sm-down dropdown">
                <div class="myaccount-title">
                  <a href="#acount" data-toggle="collapse" class="acount">
                    <i class="fa fa-sign-in" aria-hidden="true"> </i>
                    <span> Login </span>
                  </a>
                </div>
                <div id="acount" class="collapse">
                  <div class="account-list-content">
                    <div>
                      <router-link
                        to="/Login"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Login"
                      >
                        <i class="fa fa-sign-in"></i>
                        <span>Login</span></router-link
                      >
                    </div>
               <div class="">
                              <router-link
                                to="/Register Personal Account"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Register Personal Account"
                              >
                                <b class="fa fa-"> </b>
                                <span> Register</span>
                              </router-link>
                            </div>
                    <div>
                      <a href="user-wishlist.html" title="My Wishlists">
                        <i class="fa fa-question-circle"></i>
                        <span>Need Help</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="desktop_cart pl-3">
                <div class="blockcart block-cart cart-preview tiva-toggle">
                  <div class="header-cart tiva-toggle-btn">
                    <span class="cart-products-count">1</span>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  </div>
                  <div class="dropdown-content">
                    <div class="cart-content">
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
                            <td
                              colspan="3"
                              class="d-flex justify-content-center"
                            >
                              <div class="cart-button">
                                  <router-link
                                    to="/Product Cart"
                                    data-toggle="collapse"
                                    data-target=".navbar-collapse"
                                    title="Home"
                                  >
                                View Cart</router-link>
                                  <router-link
                                    to="/Checkout"
                                    data-toggle="collapse"
                                    data-target=".navbar-collapse"
                                    title="Home"
                                  >
                                Checkout
                                </router-link>
                              </div>
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
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      headerText: "Copyright REJEE.co.uk 2021",
    };
  },
};
</script>