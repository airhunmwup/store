<template>  
<div id="product-detail">
    <header>
        <div>

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <span><b>SELLERS ACCOUNT &trade;</b></span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>

        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="index-2.html">
                                <img class="img-fluid" src="img/home/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-4 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                        </div>
                    </div>

                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-6 align-items-center justify-content-end d-flex">
                        

                        <!-- acount  -->
                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <i class="fa fa-user" aria-hidden="true"> </i>
                                    <span> Sellers Account </span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <div>
                                        <a class="login" href="user-acount.html" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-address-book"></i>
                                            <span>My Store</span>
                                        </a>
                                    </div>
                                    <div>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      ><i class="fa fa-shopping-basket"></i>
                                            <span>Product Listing</span>
                      </router-link>
                                    </div>
                                    <div>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      > <i class="fa fa-file-text-o"></i>
                                            <span>Order History</span>
                      </router-link>
                                    </div>
                                    <div>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      ><i class="fa fa-lock" aria-hidden="true"></i>
                                            <span>Change Password</span>
                      </router-link>
                                    </div>
                                    <div>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      ><i class="fa fa-credit-card"></i>
                                            <span>Payment Methods</span>
                      </router-link>
                                    </div>
                                    <div>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      ><i class="fa fa-bell"></i>
                                            <span>Notificatons</span>
                      </router-link>
                                    </div>
                                    <div>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      ><i class="fa fa-question-circle"></i>
                                            <span>Need Help</span>
                      </router-link>
                                    </div>
                                    <div>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      > <i class="fa fa-sign-out"></i>
                                            <span>Sign Out</span>
                      </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop_cart pl-5">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count">1</span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th> 
                                                        <div class="" href="#">
                                                            You have a new Order  
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="remove justify-content-end" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th> 
                                                        <div class="" href="#">
                                                            You have a new Order  
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="remove justify-content-end" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="cart-button">
                                                            <a href="product-checkout.html" title="Checkout">Go to Message</a>
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
        

        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up d-flex align-items-center justify-content-around">


                <!-- logo -->
                <div class="mobile-logo align-items-left">
                        <img class="logo-mobile img-fluid" src="img/home/logo.png" width="20%" alt="REJEE">
                </div> 

                 
            <!-- search -->
            <div id="mobile_search" class="d-flex">

                <!-- menu right -->
                <div class="mobile-menutop justify-end" data-target="#mobile-pagemenu">
                    <i class="fa fa-user"> </i>
                </div>
                <div class="desktop_cart ">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-envelope-open" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="product-image small">
                                                <a href="product-detail.html">
                                                    <img src="img/product/6.jpg" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="product-detail.html">Organic Strawberry Fruits</a>
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
                                                    <a href="product-cart.html" title="View Cart">View Cart</a>
                                                    <a href="product-checkout.html" title="Checkout">Checkout</a>
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

    <!-- menu mobie right -->
    <div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up active d-md-none">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="title-box">My Account
                    <br><small> RejeeStores@rejee.co.uk</small>
                </div>
                <div class="close-box">Close</div>
            </div>
            <div class="box-content">
                <nav>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div id="megamenu" class="clearfix">
                        <ul class="menu level1">
                            <li class="item has-sub">
                                
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                    <i class="fa fa-address-book" aria-hidden="true"></i>My Store</router-link>
                            </li>
                            <li class="item has-sub">
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>Product Listing</router-link>
                            </li>
                            <li class="item has-sub">
                      <router-link
                        to="/Order History"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Order History"
                      >
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</router-link>
                            </li>
                            <li class="item has-sub">
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                    <i class="fa fa-lock" aria-hidden="true"></i>Change Password</router-link>
                            </li>
                            <li class="item has-sub">
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>Address book</router-link>
                            </li>
                            <li class="item has-sub">
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>Payment methods</router-link>
                            </li>
                            <li class="item has-sub">
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                    <i class="fa fa-bell" aria-hidden="true"></i>Notifications</router-link>
                            </li>
                            <li class="item has-sub">
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>Need Help?</router-link>
                            </li>
                            <li class="item has-sub">
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>Sign out</router-link>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </header>

</div> 
</template>

<script>
export default {
  data() {
      return{
    headerText: 'Copyright REJEE.co.uk 2021'

      }
  }
}
</script>