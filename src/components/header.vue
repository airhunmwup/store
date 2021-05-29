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
          <div class="mobile-logo align-items-center">
            <img
              class="logo-mobile img-fluid"
              src="img/home/logo.png"
              width="30%"
              alt="Prestashop_Furnitica"
            />
          </div>

          <!-- menu right -->

          <div class="desktop_cart">
            <div class="blockcart block-cart cart-preview tiva-toggle">
              <div class="header-cart tiva-toggle-btn">
                <i class="fa fa-user" aria-hidden="true"></i>
              </div>
              <div class="dropdown-content">
                <div class="cart-content">
                  <div class="">
                    <ul>
                      <li class="col-md-4">
                        <span class="menu-title h3"
                          ><b class="fa fa-user-o text-dark"></b></span
                        ><small> User@email.com</small> <br /><small>
                          12093874</small
                        >
                        <hr />
                        <br />
                        <div class="menu-content">
                          <ul class="col">
                            <li class="item-left">
                              <router-link
                                to="/orderpage"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Home"
                              >
                                <b class="fa fa-file-text-o"></b>
                                <span> My Orders</span></router-link
                              >
                            </li>
                            <hr />
                            <br />
                            <li class="item-left">
                              <router-link
                                to="/Wish list"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Wish list"
                              >
                                <b class="fa fa-envelope"> 
                <span class="btn-danger cart-products-count"> 1</span></b>
                                <span> Message</span>
                              </router-link>
                            </li>
                            <hr />
                            <br />
                            <li class="item-left">
                              <router-link
                                to="/Wish list"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Wish list"
                              >
                                <b class="fa fa-shopping-bag"></b>
                                <span> Wishlist</span>
                              </router-link>
                            </li>
                            <hr />
                            <br />
                            <li class="item-left">
                              <router-link
                                to="/User Detail"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="User detail"
                              >
                                <b class="fa fa-user"></b>
                                <span> My Details</span>
                              </router-link>
                            </li>
                            <hr />
                            <br />
                            <li class="item-left">
                              <router-link
                                to="/Change Password"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Change Password"
                              >
                                <b class="fa fa-lock" aria-hidden="true"></b>
                                <span> Change Password</span>
                              </router-link>
                            </li>
                            <hr />
                            <br />
                            <li class="item-left">
                              <router-link
                                to="/Address Book"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Address Book"
                              >
                                <b class="fa fa-address-book"></b>
                                <span> Address Book</span>
                              </router-link>
                            </li>
                            <hr />
                            <br />
                            <li class="item-left">
                              <router-link
                                to="/Payment Method"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Payment Method"
                              >
                                <b class="fa fa-credit-card"></b>
                                <span> Payment Methods</span>
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
                        <div class="form-control">
                          <a href="user-wishlist.html" title="My Wishlists">
                            <b class="fa fa-sign-out"></b>
                            <span> Sign Out</span>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
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
      </div>

      <!-- header desktop -->
      <div class="header-top d-xs-none">
        <div class="container">
          <div class="row">
            <!-- logo -->
            <div class="col-sm-2 col-md-2 d-flex align-items-center">
              <div id="logo">
                <a href="index-2.html">
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
              <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                <div class="myaccount-title">
                  <a href="#acount" data-toggle="collapse" class="acount">
                    <i class="fa fa-user" aria-hidden="true"> </i>
                    <span> My Account </span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                </div>
                <div id="acount" class="collapse">
                  <div class="account-list-content">
                    <div>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                        <i class="fa fa-file-text-o"></i>
                        <span>My Orders</span></router-link
                      >
                    </div>
               <div class="">
                              <router-link
                                to="/Wish list"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Wish list"
                              >
                                <b class="fa fa-envelope">  
                <span class="btn-danger cart-products-count">1</span></b>
                                <span> Message</span>
                              </router-link>
                            </div>
                    <div>
                      <router-link
                        to="/Wish list"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Wish list"
                      >
                        <i class="fa fa-shopping-bag"></i>
                        <span>Wishlist</span>
                      </router-link>
                    </div>
                    <div>
                      <router-link
                        to="/User Detail"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="User detail"
                      >
                        <i class="fa fa-user"></i>
                        <span>My Details</span>
                      </router-link>
                    </div>
                    <div>
                      <router-link
                        to="/Change Password"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Change Password"
                      >
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <span>Change Password</span>
                      </router-link>
                    </div>
                    <div>
                      <router-link
                        to="/Address Book"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Address Book"
                      >
                        <i class="fa fa-address-book"></i>
                        <span>Address Book</span>
                      </router-link>
                    </div>
                    <div>
                      <router-link
                        to="/Payment Method"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Payment Method"
                      >
                        <i class="fa fa-credit-card"></i>
                        <span>Payment Methods</span>
                      </router-link>
                    </div>
                    <div>
                      <a href="user-wishlist.html" title="My Wishlists">
                        <i class="fa fa-question-circle"></i>
                        <span>Need Help</span>
                      </a>
                    </div>
                    <div>
                      <a href="user-wishlist.html" title="My Wishlists">
                        <i class="fa fa-sign-out"></i>
                        <span>Sign Out</span>
                      </a>
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
                            <td
                              colspan="3"
                              class="d-flex justify-content-center"
                            >
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