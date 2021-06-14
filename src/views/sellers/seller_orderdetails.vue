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
                    class="col-sm-8 col-lg-9 col-md-8 product-container"
                  >
                  
    <div id="wrapper-site">
      <div class="container">
        <div class="row">
          <div
            id="content-wrapper"
            class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol"
          >
              <div id="main">
                <h1 class="title-page">Order Details</h1>
                <p class="box col"><b>Items (3)</b></p>
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
                      <th class="first_item box">DELIVERY METHOD</th>
                    </tr>
                    <tr>
                      <th class="first_item">
                        <p class="col text">Standard Delivery</p>
                        <p class="col text-dark">£5.99</p>
                      </th>
                      <td class="btn item">
                        <b class="fa fa-angle-right"></b>
                      </td>
                    </tr>

                  </tbody>
                </table>

                <table class="std table" id="block-history">
                  <tbody>
                    <tr>
                      <td class="first_item">
                        <p class="col text-right">Total:</p>
                      </td>
                      <td class="font-weight-bold text-dark">
                        <p class="col text-left">£1,300.00</p>
                      </td>
                    </tr>
                  </tbody>
                </table>

            <div class="row">
            <span class="col-6"><div><button class="form-control btn-warning"> CANCEL</button></div></span>
            
            <span class="col-6"><div><button class="form-control text-success">PROCESS ORDER</button></div></span>
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
        