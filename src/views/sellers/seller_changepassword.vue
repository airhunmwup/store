<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        <span class="text-left border p-1"
          ><router-link
            to="/menu"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Menu"
          >
            <i class="fa fa-bars"></i></router-link
        ></span>
      </div>
      <div class="col-6 d-lg-none h6 d-md-none text-lg pr-3 text-right">
        <span class="text-left pr-0 p-1"
          ><router-link
            to="/seller_dashboard"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="close"
          >
            <i class="fa fa-close"></i></router-link
        ></span>
      </div>
    </div>
    <div id="main">
      <div class="p-3">
        <div class="row">
          <div
            class="
              sidebar-3 sidebar-collection
              col-lg-3 col-md-3
              d-xs-none
              pl-3
              pt-3
              col-sm-4
            "
          >
            <!-- category menu -->
            <div class="sidebar-block">
              <div class="block-content">
                <div class="title-block">User Business name display here</div>
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
                    title="Change password"
                    ><i class="fa fa-lock"></i> Change Password</router-link
                  >
                </div>
                <div class="cateTitle hasSubCategory open level1">
                  <router-link
                    to="/Seller account settings"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    title="Account settings"
                    ><i class="fa fa-university"></i> Account
                    settings</router-link
                  >
                </div>
                <div class="cateTitle hasSubCategory open level1">
                  <router-link
                    to="/Seller support service"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    title="Support service"
                    ><i class="fa fa-headphones"></i> Support ?</router-link
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-9 col-md-9 product-container">
            <div id="wrapper-site">
              <div id="main">
                <div id="content" class="page-content col-12">
                  <div class="register-form">
                    <h1 class="pt-5 title-page">Change Password</h1>
                    <form
                      action="#"
                      id="customer-form"
                      class="js-customer-form col-lg-6"
                      method="post"
                    >
                      <div>
                        <div class="form-group">
                          <div>
                            <div class="input-group js-parent-focus">
                              <input
                                class="
                                  col-8
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="password"
                                type="password"
                                placeholder="New Password"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <div class="input-group js-parent-focus">
                              <input
                                class="
                                  col-8
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="password"
                                type="password"
                                placeholder="Confirm Password"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <span class="custom-checkbox d-inline-flex check-input">
                          <input
                            class="check"
                            name="newsletter"
                            type="checkbox"
                            value="1"
                            checked
                            disabled
                          />
                          <label class="label-absolute"
                            >Password must be not less than 10 words</label
                          >
                        </span>
                      </div>
                      <div class="clearfix">
                        <div>
                          <button
                            class="btn-success form-control-lg"
                            type="submit"
                          >
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

          <!-- end col-md-9-1 -->
        </div>
      </div>
    </div>

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
  </div>
</template>
        