<template>
  <!-- main content -->
    <div id="wrapper-site">
      <div id="content-wrapper">
        <div id="main">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div
                    class="
                      sidebar-3 sidebar-collection
                      col-lg-3 col-md-3
                      d-xs-none
                      col-sm-4
                    "
                  >
                    <!-- category menu -->
                    <div class="sidebar-block">
                      <div class="block-content">
                        <div class="title-block">
                          User Business name display here
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/seller_dashboard"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Dashboard"
                            ><i class="fa fa-tachometer"></i> Dashboard</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Product Listing"
                            ><i class="fa fa-shopping-basket"></i> Product
                            Listing</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Order History"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Order History"
                            ><i class="fa fa-file-o"></i> Orders</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Seller change password"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Seller changepassword"
                            ><i class="fa fa-lock"></i> Change
                            Password</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Seller account settings"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Seller accountsettings"
                            ><i class="fa fa-university"></i> Account
                            settings</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Seller support service"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Seller support service"
                            ><i class="fa fa-headphones"></i> Support
                            ?</router-link
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-sm-8 col-lg-9 col-md-8 product-container"
                  >
                  
    <div class="main-content">
           <div class="wrap-banner pt-5 ">

            <!-- breadcrumb -->

            <div class="acount head-acount">
                <div class="containe">
                    <div id="main">
                            <div id="content" class="page-content col-lg-9">
                                <div class="register-form">
                                    <h1 class="title-page">Change Password</h1>
                                    <form action="#" id="customer-form" class="js-customer-form col-lg-6" method="post">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                            <div class="form-group row">
                                                                <span class="custom-checkbox d-inline-flex check-input">
                                                                    <input class="check" name="newsletter" type="checkbox" value="1" checked disabled>
                                                                    <label class="label-absolute">Password must be not less than 10 words</label>
                                                                </span>
                                                            </div>
                                        <div class="clearfix">
                                            <div>
                                                <button class="btn-success form-control-sm" data-link-action="sign-in" type="submit">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            </div>
        </div>
                  </div>

                  <!-- end col-md-9-1 -->
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</template>
        