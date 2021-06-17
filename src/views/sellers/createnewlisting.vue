<template>
  <!-- main content -->
    <div id="wrapper-site">
        <div class="row">
    <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
      <span class="text-left border p-1"><router-link
        to="/menu"
        data-toggle="collapse"
        data-target=".navbar-collapse"
        title="Menu"
      >
        <i class="fa fa-bars"></i></router-link
      ></span></div><div class="col-6 d-lg-none h6 d-md-none text-lg pr-3 text-right">
      <span class="text-left pr-0 p-1"><router-link
        to="/Product Listing"
        data-toggle="collapse"
        data-target=".navbar-collapse"
        title="close"
      >
        <i class="fa fa-close"></i></router-link
      ></span></div>
        </div>
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
                    class="col-sm-8 col-lg-9 col-md-9 product-container"
                  >
               
        <div id="wrapper-site">
            <div id="content-wrapper">
                    <div class="content">
                        <div class="row pt-5 justify-content-center">
                            <div class="col-lg-12 col-sm-12 col-md-12 pl-5 pt-2">
                                    <h1 class="title-page">Create New Listing</h1>
                            </div>
                            <div class="col-lg-6 col-sm-6 pl-5 pb-3 pt-2">
                            <div id="content" class="page-content">
                                <div class="register-form text-center ">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <select class="form-control js-child-focus js-visible-password" name="password" type="password">
                                                            <option>Category</option>
                                                            <option></option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" type="text" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control col-5" min="0" type="number" placeholder="Price">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control col-5" min="1" type="number" placeholder="Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control col-5" type="text" placeholder="SKU">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 pl-5 pb-3 pt-2">
                            <div id="content" class="page-content">
                                <div class="register-form text-center ">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <textarea class="form-control" rows="6" name="email" type="email" placeholder="Description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <br>
                      <router-link
                        to="/Upload Product Image"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Upload Product Image"
                      >
                                            <div>
                                                <button class="btn-success form-control" data-link-action="sign-in" type="submit">
                                                    NEXT
                                                </button>
                                            </div></router-link>
                                        </div>
                                </div>
                            </div>
                        <div class="text-left pt-3">
                            <p class="box border text-center">
                              <router-link
                                to="/Login"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Login"
                              ><i class="fa fa-question-circle"></i> Need Help?</router-link></p>
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

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
    </div>
</template>
        