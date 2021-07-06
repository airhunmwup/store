<template>
  <header>
    <div class="row box">
       
      <div
        class="col-lg-6 col-md-6 col-sm-4 h6 pl-5 pr-5"
      >
        <a
          href="#"
          class="text-dark text-sm  dropdown-toggle"
          data-toggle="dropdown"
        >
          Hi <b>Username!</b>
        </a>
        <div class="dropdown-menu">
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
              <i class="zmdi zmdi-account h4 pr-2"></i> Peter more<br> User(112837)
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
            <router-link
              class="text-left pl-4 text-xs pb-2 font-weight-bold"
              to="/Signout"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="sign out"
              ><i class="fa fa-sign-out fa-2x pr-2"></i>
              Sign out
            </router-link>
            <!-- Resolution center/-->
          </div>
        </div>
      </div>
      <div
        class="col-lg-6 col-md-6 col-sm-4 h6 text-right pl-5 pr-5"
      >
        <router-link
          class="text-dark font-weight-bold text-sm text-right pr-4"
          to="/Summary"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="summary"
        >
          SELL</router-link
        >
        <a
          href="#"
          class="ptext-dark text-sm text-right dropdown-toggle"
          data-toggle="dropdown"
        >
          My REJEE
        </a>
        <div class="dropdown-menu">
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
            > Summary
            </router-link>
            <!-- primary info buttons ends/-->

            <!-- Account preferences/-->
            <router-link
              class="text-left text-dark pl-4 text-xs pb-2 font-weight-bold"
              to="/account"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Wishlist
            </router-link>
            <!-- Account preferences/-->
            <router-link
              class="text-left text-dark pl-4 text-xs pb-2 font-weight-bold"
              to="/My message"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Recently viewed
            </router-link>
            <router-link
              class="text-left text-dark pl-4 text-xs pb-2 font-weight-bold"
              to="/My message"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Purchase history
            </router-link>
            <router-link
              class="text-left text-dark pl-4 text-xs pb-2 font-weight-bold"
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
              class="text-left text-dark pl-4 text-xs pb-2 font-weight-bold"
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
          <div class="mobile-logo pt-2">
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
              <button type="submit" class="text-dark">
                <i class="fa fa-search text-dark border-l-2 pl-2 border-dark"></i>
              </button>
            </form>
          </div>
        </div>
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
                    placeholder="Search"
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
        </div>
      </div>
      <hr />
    </div>
  </header>
</template>
