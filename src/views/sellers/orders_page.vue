<template>
  <!-- main content -->
  <div class="box">
    <div class="row">
      <div class="container pl-2">
        <div
          class="content text-dark p-2 border-b-2 font-weight-bold col-12"
        >
          <router-link
            to="/Overview"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-2"
            title="Overview"
            ><span>Overview</span></router-link
          >
          <router-link
            to="/Orders"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="border-primary border-b-4 p-2"
            title="Orders"
            ><span class="text-primary">Orders</span></router-link
          >
          <router-link
            to="/Listing"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-2"
            title="listing"
            ><span>Listing</span></router-link
          >
          <router-link
            to="/Account Page"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-2"
            title="Account"
            ><span>Account</span></router-link
          >
        </div>
      </div>
    <div class="dropdown pt-2 text-right d-lg-none h6 d-md-none justify-content-end pr-4 pl-5">
      <a
        href="#"
        class="text-primary underline justify-content-end dropdown-toggle"
        data-toggle="dropdown"
      >
        Menu
      </a>
      <!-- category menu -->
      <div class="sidebar-block text-dark dropdown-menu">
        <div class="block-content">
        <!-- order menu -->
        <div class="sidebar-block text-dark">
          <div class="block-content">
            <div
              class="block-content nav flex-column nav-pills"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical"
            >
              <div
                class="block-content nav text-primary underline flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/Orders"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  >
                All Orders
                </router-link>
              </div>

              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/awaitingpayment"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Awaiting Payment"
                  >
                      Awaiting Payment
                </router-link>
              </div>

              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/awaitingshipment"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Awaiting Shipment"
                  >
                Awaiting Shipment
                </router-link>
              </div>
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/paidshipped"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Paid and shipped"
                  >
                Paid and shipped
                </router-link>
              </div>
              <hr />
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/cancellationlist"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Cancellations"
                  >
                Cancellations
                </router-link>
              </div>
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/returnslist"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Returns"
                  >
                Returns
                </router-link>
              </div>
              
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    </div>

    <div class="row">
      <div class="pl-2 sidebar-3 col-lg-2 col-md-2 d-xs-none font-weight-bold">
        <div
          class="text-left h4 font-weight-bold p-2 active"
        >
          Orders
        </div>
        <!-- order menu -->
        <div class="sidebar-block text-dark">
          <div class="block-content">
            <div
              class="block-content nav flex-column nav-pills"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical"
            >
              <div
                class="block-content text-primary underline nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/Orders"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  >
                All Orders
                </router-link>
              </div>

              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/awaitingpayment"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Awaiting Payment"
                  >
                      Awaiting Payment
                </router-link>
              </div>

              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/awaitingshipment"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Awaiting Shipment"
                  >
                Awaiting Shipment
                </router-link>
              </div>
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/paidshipped"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Paid and shipped"
                  >
                Paid and shipped
                </router-link>
              </div>
              <hr />
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/cancellationlist"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Cancellations"
                  >
                Cancellations
                </router-link>
              </div>
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                >
                <router-link
                  to="/returnslist"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="p-2"
                  title="Returns"
                  >
                Returns
                </router-link>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-10 col-md-10 product-container">
        <div id="wrapper-site">
              <div class="tab-content" id="v-pills-tabContent">
                <!--All-Orders-->
                  <div class="row">
                    <span
                      class="pl-4
                        text text-dark
                        h5
                        font-weight-bold font-weight-normal
                      "
                    >
                      Manage all orders
                    </span>

                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12 text-right pr-4">
                            <a class="cateItem" 
                              data-toggle="collapse"
                              data-target="#active_search" href="#">
                                  <span class="pr-2 pt-2"><b><i class="fa fa-angle-down"></i> Search</b></span></a>
                              </div>
                            <div
                              class="subCategory collapse"
                              id="active_search"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                
                                <div class="row p-3 product-container">
                                    <div class="col-8">
                                    <input class="text-primary pb-2 pt-2 form-control" name="" value="" placeholder="Search"/>
                                    </div>
                                    <div class="col-4">
                                    <select class="text-primary pb-2 pt-2 form-control">
                            <option>Last 7days</option>
                            <option>Last 60days</option>
                            <option>2021</option>
                            <option>2020</option>
                                    </select>
                                    </div>
                                    <div class="pb-2 pt-2">

                    <button class="btn border border-primary text-primary">Search</button> 
                                    </div>
                                </div>
                                <hr>
                              </div>
                            </div>
                          </div>
                    <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                      Results: 1 - 5 of 5 ($total amount of orders sold)

                      
                <div class="content pt-2 justify-content-end">
              <div class="row p-3 col-xs-12">
                <div class="text-left col-lg-3 pb-2 pt-2 row col-md-3 col-sm-3 col-xs-3">
                <span class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pb-2  pt-2"><p class="text-xs">sort by</p> </span>

                <select class="text-right col-lg-7 col-md-7 col-sm-7 col-xs-7 form-control-xs text-primary text-xs drop-tab">
                              <option class="text-right">Date Sold</option>
                              <option class="text-right">Date Paid</option>
                              <option class="text-right">Heighest Quantity</option>
                              <option class="text-right">Lowest Quantity</option>
                              <option class="text-right">Awaiting Shipment</option>
                              <option class="text-right">Delivered</option>
                              <option class="text-right">Shipped</option>
                              <option class="text-right">Canceled</option>
                </select>
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6 col-xs-6">
                    <button class="form-control border text-primary">Relist</button>
                </div>
                </div>
              </div>

                      <div class="row text-md table-responsive pl-2">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-primary font-weight-bold text-xs">
                              <td class="text-left">
                                <input class="pr-3" type="checkbox" />
                              </td>
                              <td class="text-left font-w">Actions</td>
                              <td class="text-left">Order details</td>
                              <td class="text-left"></td>
                              <td class="text-left">Qty</td>
                              <td class="text-left">Sold for</td>
                              <td class="text-left">Total</td>
                              <td class="text-right">Date sold</td>
                              <td class="text-right">Date paid</td>
                            </tr>
                            <tr class="">
                              <td class="border text-left">
                                <input class="pr-3" type="checkbox" />
                              </td>
                              <td class="border text-left">
                                <p class="text-dark font-weight-bold">Shipped June 12 2020</p>
                              </td>
                              <td class="text-left">
                                  <img
                                    src="img/product/16.jpg"
                                    class=""
                                    width="250px"
                                    alt="Product"
                                  />
                              </td>
                              <td class="text-left">
                                  <p class="">Product nameProduct nameProduct nameProduct nameProduct nameProduct name</p>
                                
                                <router-link class="small"
                                  to="/seller_dashboard"
                                  data-toggle="collapse"
                                  data-target=".navbar-collapse"
                                  title="Dashboard"
                                >
                                </router-link>
                              </td>
                              <td class="border text-left">1</td>
                              <td class="border text-left">£150</td>
                              <td class="border text-primary underline text-left">£150</td>
                              <td class="border text-right">25 Jun</td>
                              <td class="border text-right">25 Jun</td>
                            </tr>
                            <tr class="">
                              <td class="border text-left">
                                <input class="pr-3" type="checkbox" />
                              </td>
                              <td class="border text-left">
                                <p class="text-dark font-weight-bold">Delivered June 12 2020</p>
                              </td>
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    width="250px"
                                    alt="Product"
                                  />
                              </td>
                              <td class="text-left">
                                  <p class="">Product nameProduct nameProduct nameProduct nameProduct nameProduct name</p>
                                
                                <router-link class="small"
                                  to="/seller_dashboard"
                                  data-toggle="collapse"
                                  data-target=".navbar-collapse"
                                  title="Dashboard"
                                >
                                </router-link>
                              </td>
                              <td class="border text-left">1</td>
                              <td class="border text-left">£150</td>
                              <td class="border text-primary underline text-left">£150</td>
                              <td class="border text-right">25 Jun</td>
                              <td class="border text-right">25 Jun</td>
                            </tr>
                            <tr class="">
                              <td class="border text-left">
                                <input class="pr-3" type="checkbox" />
                              </td>
                              <td class="border text-left">
                                <p class="text-dark font-weight-bold">Canceled June 12 2020</p>
                              </td>
                              <td class="text-left">
                                  <img
                                    src="img/product/11.jpg"
                                    width="250px"
                                    alt="Product"
                                  />
                              </td>
                              <td class="text-left">
                                  <p class="">Product nameProduct nameProduct nameProduct nameProduct nameProduct name</p>
                                
                                <router-link class="small"
                                  to="/seller_dashboard"
                                  data-toggle="collapse"
                                  data-target=".navbar-collapse"
                                  title="Dashboard"
                                >
                                </router-link>
                              </td>
                              <td class="border text-left">1</td>
                              <td class="border text-left">£150</td>
                              <td class="border text-primary underline text-left">£150</td>
                              <td class="border text-right">25 Jun</td>
                              <td class="border text-right">25 Jun</td>
                            </tr>
                            <tr class="">
                              <td class="border text-left">
                                <input class="pr-3" type="checkbox" />
                              </td>
                              <td class="border text-left">
                                <p class="text-dark font-weight-bold">Awaiting Shipping June 12 2020</p>
                              </td>
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    width="250px"
                                    alt="Product"
                                  />
                              </td>
                              <td class="text-left">
                                  <p class="">Product nameProduct nameProduct nameProduct nameProduct nameProduct name</p>
                                
                                <router-link class="small"
                                  to="/seller_dashboard"
                                  data-toggle="collapse"
                                  data-target=".navbar-collapse"
                                  title="Dashboard"
                                >
                                </router-link>
                              </td>
                              <td class="border text-left">6</td>
                              <td class="border text-left">£150</td>
                              <td class="border text-primary underline text-left">£150</td>
                              <td class="border text-right">25 Jun</td>
                              <td class="border text-right">25 Jun</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>

    <hr />
  </div>
</template>
        