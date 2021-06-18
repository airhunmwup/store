<template>
  <!-- main content -->
    <div id="wrapper-site">
        <div class="row">
    <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
      <span class="text-left p-1"></span></div><div class="col-6 d-lg-none h6 d-md-none text-lg pr-3 text-right">
      <span class="text-left border border pr-0 p-1"><router-link
        to="/seller_dashboard"
        data-toggle="collapse"
        data-target=".navbar-collapse"
        title="close"
      >
        <i class="fa fa-close"></i></router-link
      ></span></div>
        </div>
      <div id="content-wrapper">
        <div id="main">
        </div>
      </div>

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                
                <div class="row">
                  <div
                    class="
                      bar-2 sidebar-collection
                      col-lg-12 col-md-12
                      col-sm-12
                    "
                  >
                    <!-- category menu -->
                      <div class="block-content">
                        <div class="cateTitle h6 border-b text-dark pl-4 pt-4 hasSubCategory open level1">
                          <router-link
                            to="/seller_dashboard"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Dashboard"
                            ><i class="fa fa-tachometer"></i> Dashboard</router-link
                          >
                        </div>
                        <div class="cateTitle  h6 border-b text-dark pl-4 pt-4 hasSubCategory open level1">
                          <router-link
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Product Listing"
                            ><i class="fa fa-shopping-basket"></i> Product
                            Listing</router-link
                          >
                        </div>
                        <div class="cateTitle  h6 border-b text-dark pl-4 pt-4 hasSubCategory open level1">
                          <router-link
                            to="/Order History"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Order History"
                            ><i class="fa fa-file-o"></i> Orders</router-link
                          >
                        </div>
                        <div class="cateTitle  h6 border-b text-dark pl-4 pt-4 hasSubCategory open level1">
                          <router-link
                            to="/Seller change password"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Seller changepassword"
                            ><i class="fa fa-lock"></i> Change
                            Password</router-link
                          >
                        </div>
                        <div class="cateTitle  h6 border-b text-dark pl-4 pt-4 hasSubCategory open level1">
                          <router-link
                            to="/Seller account settings"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Seller accountsettings"
                            ><i class="fa fa-university"></i> Account
                            settings</router-link
                          >
                        </div>
                        <div class="cateTitle  h6 text-dark pl-4 pt-4 hasSubCategory open level1">
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

                  <!-- end col-md-9-1 -->
                </div>
                            </div>
                        </nav>
    </div>
</template>
        