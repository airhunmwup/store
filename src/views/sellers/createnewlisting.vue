<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        <span class="text-left shadow p-1"
          ><router-link
            to="/menu"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Menu"
          >
            <i class="fa fa-bars"></i></router-link
        ></span>
      </div>
    </div>
    <div id="main">
      <div class="p-3">
        <div class="row">
                  <div
                    class="shadow-lg
                      sidebar-3 sidebar-collection
                      col-lg-3 col-md-3
                      d-xs-none pl-3 pt-3
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
                            title="Change password"
                            ><i class="fa fa-lock"></i> Change
                            Password</router-link
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
                            ><i class="fa fa-headphones"></i> Support
                            ?</router-link
                          >
                        </div>
                      </div>
                    </div>
                  </div>
          <div class="col-sm-12 col-lg-9 col-md-9 product-container">
            <div id="wrapper-site">
              <section class="page-home">
                <div class="content">
                  <div class="row pt-2">
                    <div class="col-lg-12 col-md-12 col-sm-12 pl-5 pt-2">
                      <h1 class="title-page">Create New Listing</h1>
                    </div>
                              <div class="pb-2 col-lg-6 col-md-6 col-sm-9 col-xs-9">
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="List Title"
                                />
                              </div>
                    <div class="pl-5 pb-3 pt-2">
                      <div id="content" class="page-content">
                        <div class="register-form text-center">
                          <div class="row">
                            <div class="form-group col-12">
                              <div class="pb-2 col-6 row">
                                <div class="input-group js-parent-focus col-6">
                                  <select
                                    class="
                                      form-control
                                      js-child-focus js-visible-password
                                    "
                                    name=""
                                    type="text"
                                  >
                                    <option>Category</option>
                                    <option>Fashion</option>
                                    <option>Electronics</option>
                                  </select>
                                </div>
                                <div class="input-group js-parent-focus col-6">
                                  <select
                                    class="
                                      form-control
                                      js-child-focus js-visible-password
                                    "
                                    name=""
                                    type="text"
                                  >
                                    <option>Condition</option>
                                    <option>New</option>
                                    <option>Used</option>
                                  </select>
                                </div>
                              </div>
                              <div class="pb-2 col-6">
                              </div>
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group col-6 row pb-3">
                              <span class="col-3"
                                ><input
                                  class="form-control text-dark p-1"
                                  min="0"
                                  type="number"
                                  placeholder="Price"
                              /></span>
                              <span class="col-3"
                                ><input
                                  class="form-control text-dark p-1"
                                  min="1"
                                  type="number"
                                  placeholder="Qty"
                              /></span>
                              <span class="col-6"
                                ><input
                                  class="form-control text-dark p-1"
                                  min="1"
                                  type="text"
                                  placeholder="SKU"
                              /></span>
                            </div>
                            <div class="form-group"></div>

                            <div class="form-group col-10">
                              <textarea
                                class="form-control"
                                rows="6"
                                name="email"
                                type="email"
                                placeholder="Description"
                              ></textarea>

                              <div class="clearfix">
                                <br />
                                <div class="row">
                                  <span class="col-4">
                                    <router-link
                                      to="/Product Listing"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      title="cancel"
                                      ><div>
                                        <button class="form-control">
                                          CANCEL
                                        </button>
                                      </div>
                                    </router-link></span
                                  >
                                  <span class="col-4">
                                  </span>
                                  <span class="col-4">
                                    <router-link
                                      to="/Upload Product Image"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      title="next"
                                    >
                                      <div>
                                        <button
                                          class="btn-success form-control"
                                          data-link-action="sign-in"
                                          type="submit"
                                        >
                                          NEXT
                                        </button>
                                      </div></router-link
                                    ></span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
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
        