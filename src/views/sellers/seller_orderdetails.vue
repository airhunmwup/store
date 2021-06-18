<template>
  <!-- main content -->
    <div >
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
        to="/seller_dashboard"
        data-toggle="collapse"
        data-target=".navbar-collapse"
        title="close"
      >
        <i class="fa fa-close"></i></router-link
      ></span></div>
        </div>
        <div id="main">
              <div class="p-3">
                <div class="row">
                  <div
                    class="
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
                  <div
                    class="col-sm-12 col-lg-9 col-md-9 product-container"
                  >
               
        <div id="wrapper-site">

              <div id="main">
                <h1 class="title-page">Order Details</h1>
                <table class="std table">
                  <tbody>
                    <tr>
                      <th class="first_item h6 font-weight-light ">
                        <p class="font-weight-bold text-dark">
                          <b class="fa fa-truck"></b> Order No:
                            <span class="text-small"> 567328996</span>
                        </p>
                <p class="col text-dark">Status:<b class="col text-danger">Pending..</b></p>
                        <p class="text-dark">
                          <small
                            ><b class="fa fa-calendar-o"></b> Order date:
                            <span class="text-small"> 9 MAR 2021</span></small
                          >
                        </p>
                      </th>
                    </tr>
                    <tr>
                      <th class="first_item">
                        <div class="row content col-12">
                          <span class=" border p-2 col-6 col-sm-6 col-md-4 col-lg-3">
                            <img
                              src="img/product/11.jpg"
                              class=""
                              alt="Product"
                            />
                            <hr>
                            <p><span class="text-small"> Basket brown big</span></p>
                            <p><span class="text-small"> £12</span></p>
                          </span>
                          <span class=" border p-2 col-6 col-sm-6 col-md-4 col-lg-3">
                            <img
                              src="img/product/3.jpg"
                              class=""
                              alt="Product"
                            />
                            <hr>
                            <p><span class="text-small"> Basket brown big</span></p>
                            <p><span class="text-small"> £12</span></p>
                          </span>
                          <span class=" border p-2 col-6 col-sm-6 col-md-4 col-lg-3">
                            <img
                              src="img/product/5.jpg"
                              class=""
                              alt="Product"
                            />
                            <hr>
                            <p><span class="text-small"> Basket brown big</span></p>
                            <p><span class="text-small"> £12</span></p>
                          </span>
                          <span class=" border p-2 col-6 col-sm-6 col-md-4 col-lg-3">
                            <img
                              src="img/product/7.jpg"
                              class=""
                              alt="Product"
                            />
                            <hr>
                            <p><span class="text-small"> Basket brown big</span></p>
                            <p><span class="text-small"> £12</span></p>
                          </span>
                          <span class=" border p-2 col-6 col-sm-6 col-md-4 col-lg-3">
                            <img
                              src="img/product/1.jpg"
                              class=""
                              alt="Product"
                            />
                            <hr>
                            <p><span class="text-small"> Basket brown big</span></p>
                            <p><span class="text-small"> £12</span></p>
                          </span>
                        </div>
                      </th>
                    </tr>

                    <tr>
                      <th class="first_item font-weight-light text-dark">
                        <p class="font-weight-bold">DELIVERY ADDRESS</p>
                        <p>Name: David Johnson.</p>
                        <p>Address: 139 Jervoise Road,</p>
                        <p>West Midlands,</p>
                        <p>Birmingham,</p>
                        <p>UK.</p>
                        <p>Phone: 07746358183</p>
                      </th>
                    </tr>
                    <tr>
                      <th class="first_item">
                        <p class="col text-dark">Standard Delivery</p>
                        <p class="col text">£5.99</p>
                      </th>
                    </tr>
                    <tr class="box">
                      <th class="font-weight-bold text-dark">
                        <p class="col text-right"><b>Total:</b> £1,300.00</p>
                      </th>
                    </tr>

                  </tbody>
                </table>


            
            <div class="row pt-3">
              <span class="col-4">
                <router-link
                  to="/Product Listing"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="cancel"
                  ><div>
                    <button class="form-control"> CANCEL</button>
                  </div>
                </router-link></span
              >
              <span class="col-4">
              </span>
              <span class="col-4">
                <router-link
                  to="/Process Order"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Process Order"
                >
                  <div>
                    <button
                      class="btn-success form-control"
                      data-link-action="sign-in"
                      type="submit"
                    >
                      PROCESS ORDER <i class="fa fa-arrow-circle-right"></i>
                    </button>
                  </div></router-link
                ></span
              >
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
                                        <li>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
    </div>
</template>
        