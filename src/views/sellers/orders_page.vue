<template>
  <!-- main content -->
  <div class="box">
    <div class="row">
      <div class="container justify-content-center content-bottom">
        <div class="content sidebar-block">
          <router-link
            to="/message"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="pl-2 text-right text-primary underline justify-content-end"
            title="Performance"
            ><span
              class="p-2 text-right text-primary underline justify-content-end"
              >Message (2)</span
            ></router-link
          >
          <div class="text-base">
            <div class="pt-3 pl-3">
              <span class="font-weight-bold text-dark h3"> Seller Hub</span>
              <span class="text-dark text-sm"> UserID (0)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row pl-4">
      <div class="container pl-3">
        <div
          class="content text-dark p-2 border-b-2 font-weight-bold col-12 pl-2"
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
    </div>
    <div class="dropdown pt-2 d-lg-none h6 d-md-none justify-content-end pl-5">
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
          <div
            class="block-content nav flex-column nav-pills"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <button
              class="text-left text-sm font-weight-bold text-dark p-2 active"
              id="v-pills-All-Orders-tab"
              data-bs-toggle="pill"
              data-bs-target="#v-pills-All-Orders"
              type="button"
              role="tab"
              aria-controls="v-pills-All-Orders"
              aria-selected="true"
            >
              All Orders
            </button>
            <button
              class="text-left text-sm font-weight-bold text-dark p-2"
              id="v-pills-Awaiting-Payment-tab"
              data-bs-toggle="pill"
              data-bs-target="#v-pills-Awaiting-Payment"
              type="button"
              role="tab"
              aria-controls="v-pills-Awaiting-Payment"
              aria-selected="false"
            >
              Awaiting Payment
            </button>

            <button
              class="text-left text-sm font-weight-bold text-dark p-2"
              id="v-pills-Awaiting-Shipment-tab"
              data-bs-toggle="pill"
              data-bs-target="#v-pills-Awaiting-Shipment"
              type="button"
              role="tab"
              aria-controls="v-pills-Awaiting-Shipment"
              aria-selected="true"
            >
              Awaiting Shipment
            </button>
            <button
              class="text-left text-sm font-weight-bold text-dark p-2"
              id="v-pills-Paid-and-shipped-tab"
              data-bs-toggle="pill"
              data-bs-target="#v-pills-Paid-and-shipped"
              type="button"
              role="tab"
              aria-controls="v-pills-Paid-and-shipped"
              aria-selected="true"
            >
              Paid and shipped
            </button>
            <hr />
            <button
              class="text-left text-sm font-weight-bold text-dark p-2"
              id="v-pills-Cancellations-tab"
              data-bs-toggle="pill"
              data-bs-target="#v-pills-Cancellations"
              type="button"
              role="tab"
              aria-controls="v-pills-Cancellations"
              aria-selected="true"
            >
              Cancellations
            </button>
            <button
              class="text-left text-sm font-weight-bold text-dark p-2"
              id="v-pills-Returns-tab"
              data-bs-toggle="pill"
              data-bs-target="#v-pills-Returns"
              type="button"
              role="tab"
              aria-controls="v-pills-Returns"
              aria-selected="true"
            >
              Returns
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="pl-2 sidebar-3 col-lg-2 col-md-2 d-xs-none font-weight-bold">
        <button
          class="text-left h4 font-weight-bold p-2 active"
          data-bs-toggle="pill"
          type="button"
          role="tab"
          aria-selected="true"
        >
          Orders
        </button>
        <!-- order menu -->
        <div class="sidebar-block text-dark">
          <div class="block-content">
            <div
              class="block-content nav flex-column nav-pills"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical"
            >
              <button
                class="text-left text-sm font-weight-bold text-dark p-2 active"
                id="v-pills-All-Orders-tab"
                data-bs-toggle="pill"
                data-bs-target="#v-pills-All-Orders"
                type="button"
                role="tab"
                aria-controls="v-pills-All-Orders"
                aria-selected="true"
              >
                All Orders
              </button>
              <button
                class="text-left text-sm font-weight-bold text-dark p-2"
                id="v-pills-Awaiting-Payment-tab"
                data-bs-toggle="pill"
                data-bs-target="#v-pills-Awaiting-Payment"
                type="button"
                role="tab"
                aria-controls="v-pills-Awaiting-Payment"
                aria-selected="false"
              >
                Awaiting Payment
              </button>

              <button
                class="text-left text-sm font-weight-bold text-dark p-2"
                id="v-pills-Awaiting-Shipment-tab"
                data-bs-toggle="pill"
                data-bs-target="#v-pills-Awaiting-Shipment"
                type="button"
                role="tab"
                aria-controls="v-pills-Awaiting-Shipment"
                aria-selected="true"
              >
                Awaiting Shipment
              </button>
              <button
                class="text-left text-sm font-weight-bold text-dark p-2"
                id="v-pills-Paid-and-shipped-tab"
                data-bs-toggle="pill"
                data-bs-target="#v-pills-Paid-and-shipped"
                type="button"
                role="tab"
                aria-controls="v-pills-Paid-and-shipped"
                aria-selected="true"
              >
                Paid and shipped
              </button>
              <hr />
              <button
                class="text-left text-sm font-weight-bold text-dark p-2"
                id="v-pills-Cancellations-tab"
                data-bs-toggle="pill"
                data-bs-target="#v-pills-Cancellations"
                type="button"
                role="tab"
                aria-controls="v-pills-Cancellations"
                aria-selected="true"
              >
                Cancellations
              </button>
              <button
                class="text-left text-sm font-weight-bold text-dark p-2"
                id="v-pills-Returns-tab"
                data-bs-toggle="pill"
                data-bs-target="#v-pills-Returns"
                type="button"
                role="tab"
                aria-controls="v-pills-Returns"
                aria-selected="true"
              >
                Returns
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-10 col-md-10 product-container">
        <div id="wrapper-site">
          <div class="col-sm-12 col-lg-12 p-3 col-md-12 product-container">
            <div id="wrapper-site">
              <div class="tab-content" id="v-pills-tabContent">
                <!--All-Orders-->
                <div
                  class="tab-pane fade show active"
                  id="v-pills-All-Orders"
                  role="tabpanel"
                  aria-labelledby="v-pills-All-Orders-tab"
                >
                  <div class="row">
                    <span
                      class="
                        text text-dark
                        h5
                        font-weight-bold font-weight-normal
                      "
                    >
                      Manage all orders
                      <hr />
                    </span>

                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
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
                    <div
                      class="content pb-3 justify-content-center text-center"
                    >
                    </div>
                    <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                      Results: 1 - 5 of 5 ($total amount of orders sold)

                      
                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 pb-2 pt-2 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                              <option>Date Sold</option>
                              <option>Date Paid</option>
                              <option>Heighest Quantity</option>
                              <option>Lowest Quantity</option>
                              <option>Awaiting Shipment</option>
                              <option>Delivered</option>
                              <option>Shipped</option>
                              <option>Canceled</option>
                </select>
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button>
                </div>
                </div>
              </div>

                      <div class="row text-md table-responsive">
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
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                                    class="thumbnail-img"
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
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                                    class="thumbnail-img"
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

                <!--Awaiting Payment-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Awaiting-Payment"
                  role="tabpanel"
                  aria-labelledby="v-pills-Awaiting-Payment-tab"
                >
                  <div class="row">
                    <span
                      class="
                        text text-dark
                        h5
                        font-weight-bold font-weight-normal
                      "
                    >
                      Manage Awaiting Payments
                      <hr />
                    </span>

                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
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
                    <div
                      class="content pb-3 justify-content-center text-center"
                    >
                    </div>
                    <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                      Results: 1 - 5 of 5 ($total amount of orders sold)

                      
                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 pb-2 pt-2 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                              <option>Date</option>
                              <option>A to Z</option>
                              <option>Heighest Quantity</option>
                              <option>Lowest Quantity</option>
                </select>
                </div>
                </div>
              </div>

                      <div class="row text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-primary font-weight-bold text-xs">
                              <td class="text-left">Order details</td>
                              <td class="text-left"></td>
                              <td class="text-left">Qty</td>
                              <td class="text-left">Sold for</td>
                              <td class="text-left">Total</td>
                              <td class="text-right">Date sold</td>
                            </tr>
                            <tr class="">
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                            </tr>
                            <tr class="">
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                            </tr>
                            <tr class="">
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!--Awaiting-Shipment-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Awaiting-Shipment"
                  role="tabpanel"
                  aria-labelledby="v-pills-Awaiting-Shipment-tab"
                >
                  <div class="row">
                    <span
                      class="
                        text text-dark
                        h5
                        font-weight-bold font-weight-normal
                      "
                    >
                      Manage Awaiting Shipments
                      <hr />
                    </span>

                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
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
                    <div
                      class="content pb-3 justify-content-center text-center"
                    >
                    </div>
                    <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                      Results: 1 - 5 of 5 ($total amount of orders sold)

                      
                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 pb-2 pt-2 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                              <option>Date</option>
                              <option>A - Z</option>
                              <option>Heighest Quantity</option>
                              <option>Lowest Quantity</option>
                </select>
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button>
                </div>
                </div>
              </div>

                      <div class="row text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-primary font-weight-bold text-xs">
                              <td class="text-left">Order details</td>
                              <td class="text-left"></td>
                              <td class="text-left">Qty</td>
                              <td class="text-left">Sold for</td>
                              <td class="text-left">Total</td>
                              <td class="text-right">Date sold</td>
                              <td class="text-right">Date paid</td>
                            </tr>
                            <tr class="">
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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

                <!--Paid-and-shipped-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Paid-and-shipped"
                  role="tabpanel"
                  aria-labelledby="v-pills-Paid-and-shipped-tab"
                >
                  <div class="row">
                    <span
                      class="
                        text text-dark
                        h5
                        font-weight-bold font-weight-normal
                      "
                    >
                      Manage all Paid and Shipped
                      <hr />
                    </span>

                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
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
                    <div
                      class="content pb-3 justify-content-center text-center"
                    >
                    </div>
                    <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                      Results: 1 - 5 of 5 ($total amount of orders sold)

                      
                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 pb-2 pt-2 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                              <option>Date</option>
                              <option>A - Z</option>
                              <option>Heighest Quantity</option>
                              <option>Lowest Quantity</option>
                </select>
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button>
                </div>
                </div>
              </div>

                      <div class="row text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-primary font-weight-bold text-xs">
                              <td class="text-left">
                                <input class="pr-3" type="checkbox" />
                              </td>
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                <!--Cancellations-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Cancellations"
                  role="tabpanel"
                  aria-labelledby="v-pills-Cancellations-tab"
                >
                  <div class="row">
                    <span
                      class="
                        text text-dark
                        h5
                        font-weight-bold font-weight-normal
                      "
                    >
                      Manage all Cancellations
                      <hr />
                    </span>

                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
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
                    <div
                      class="content pb-3 justify-content-center text-center"
                    >
                    </div>
                    <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                      Results: 1 - 5 of 5 ($total amount of orders sold)

                      
                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 pb-2 pt-2 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                              <option>Date Sold</option>
                              <option>Date Paid</option>
                              <option>Heighest Quantity</option>
                              <option>Lowest Quantity</option>
                              <option>Canceled</option>
                </select>
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button>
                </div>
                </div>
              </div>

                      <div class="row text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-primary font-weight-bold text-xs">
                              <td class="text-left">
                                <input class="pr-3" type="checkbox" />
                              </td>
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                <!--Returns-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Returns"
                  role="tabpanel"
                  aria-labelledby="v-pills-Returns-tab"
                >
                  <div class="row">
                    <span
                      class="
                        text text-dark
                        h5
                        font-weight-bold font-weight-normal
                      "
                    >
                      Manage all Returns
                      <hr />
                    </span>

                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
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
                    <div
                      class="content pb-3 justify-content-center text-center"
                    >
                    </div>
                    <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                      Results: 1 - 5 of 5 ($total amount of orders sold)

                      
                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 pb-2 pt-2 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                              <option>Date Sold</option>
                              <option>Date Paid</option>
                              <option>Heighest Quantity</option>
                              <option>Lowest Quantity</option>
                              <option>Awaiting Returns</option>
                              <option>Delivered Returns</option>
                </select>
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button>
                </div>
                </div>
              </div>

                      <div class="row text-md table-responsive">
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
                              <td class="text-right">Date Returned</td>
                              <td class="text-right">Date paid</td>
                            </tr>
                            <tr class="">
                              <td class="border text-left">
                                <input class="pr-3" type="checkbox" />
                              </td>
                              <td class="border text-left">
                                <p class="text-dark font-weight-bold">Pending</p>
                              </td>
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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
                                <p class="text-dark font-weight-bold">Received</p>
                              </td>
                              <td class="text-left">
                                  <img
                                    src="img/product/6.jpg"
                                    class="thumbnail-img"
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

      <!-- end col-md-9-1 -->
    </div>

    <hr />
  </div>
</template>
        