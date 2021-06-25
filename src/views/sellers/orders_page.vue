<template>
  <!-- main content -->
  <div class="box">
    <div class="row">
      <div class="container justify-content-center content-bottom">

        <div class="content sidebar-block">
          <div class="text-base">
            <div class="pt-5 pl-3">
              <span class="font-weight-bold text-dark h3">
                Seller Hub</span
              >
              <span class="text-dark text-sm"> UserID (0)</span>
            </div>
          </div>
        </div>
      </div>

    </div>
              <div class="row pl-2">
                <div class="container pl-2">
                  <div class="content text-dark p-3 border-b-2 font-weight-bold col-12  pl-2">
                  <router-link
                    to="/Overview"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-3"
                    title="Overview"
                    ><span>Overview</span></router-link
                  >
                  <router-link
                    to="/Orders"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="border-primary border-b-4 p-3"
                    title="Orders"
                    ><span class="text-primary">Orders</span></router-link>
                  <router-link
                    to="/Listing"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="listing"
                    ><span>Listing</span></router-link>
                  <router-link
                    to="/Performance"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Performance"
                    ><span>Performance</span></router-link>
                  <router-link
                    to="/message"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="pl-4 text-right text-primary underline justify-content-end"
                    title="Performance"
                    ><span class="p-2 text-right text-primary underline justify-content-end">Message (2)</span></router-link>
                  </div>
                </div>
              </div>

        <div class="row pl-5">
          <div
            class="
              sidebar-3 
              col-lg-2 col-md-2
              d-xs-none
              font-weight-bold
            "
          >
                <button
                  class="text-left h4 font-weight-bold p-2 active"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  Orders 
                </button>
            <!-- category menu -->
            <div class="sidebar-block text-dark">
              <div class="block-content">
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="text-left  font-weight-bold text-dark p-2 active"
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
                  class="text-left  font-weight-bold text-dark p-2"
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
                  class="text-left  font-weight-bold text-dark p-2"
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
                  class="text-left  font-weight-bold text-dark p-2"
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
                <hr>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
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
                  class="text-left  font-weight-bold text-dark p-2"
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
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Manage all orders
                  <hr>
                  </span>
                  
                <div class="content pb-3 justify-content-center text-center">
              <div class="row box pl-2">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <p class="form-control border box">All Orders (0)</p>  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
            
                <select class="text-primary form-control">
                <option>Last 7days</option>
                <option>Last 60days</option>
                <option>2021</option>
                <option>2020</option>
                </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                            
                </div>
                </div>
              </div>
                <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                  Results: 1 - 5 of 5 (2 Orders selected)

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 col-md-3 col-sm-3">
                               
                <select class="text-primary drop-tab form-control">
                <option>Shipping</option>
                <option>Awaiting Payment (0)</option>
                <option>Awaiting Shipment (0)</option>
                <option>Paid and Shipped (0)</option>
                </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button> 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                           
<div class="dropdown justify-content-end">
  <a href="#" class="text-primary form-control justify-content-end dropdown-toggle" data-toggle="dropdown">
    More
  </a>
  <div class="p-3 dropdown-menu">
      <p>Sell Similar</p>
      <hr>
      <p>Mark as Payment</p>
      <hr>
      <p>Download</p>
  </div>
</div>
                </div>
                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border text-primary text-xs drop-tab">
                <option>Date Sold</option>
                <option>Date Shipped</option>
                <option>Awaiting Shipment (0)</option>
                <option>Paid and Shipped (0)</option>
                </select>
                </div>
                </div>
              </div>


                    <div class="row container p-3 text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-xs">
                            
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" />
                              Actions
                            </td>
                            <td class="text-left font-w">Record</td>
                            <td class="text-left">Purchase details</td>
                            <td class="text-right">Qty</td>
                            <td class="text-right">Sold for</td>
                            <td class="text-right">Total</td>
                            <td class="text-right">Date sold</td>
                            <td class="text-right">Date paid</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/Order details"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/Order details"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/Order details"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
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
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Awaiting Payment
                  <hr>
                  </span>
                  
                <div class="content pb-3 justify-content-center text-center">
              <div class="row box pl-2">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <p class="form-control border box">Awaiting Payment (0)</p>  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
            
                <select class="text-primary form-control">
                <option>Last 7days</option>
                <option>Last 60days</option>
                <option>2021</option>
                <option>2020</option>
                </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                            
                </div>
                </div>
              </div>
                <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                  Results: 1 - 5 of 5 (2 Orders selected)

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button> 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                           
<div class="dropdown justify-content-end">
  <a href="#" class="text-primary form-control justify-content-end dropdown-toggle" data-toggle="dropdown">
    More
  </a>
  <div class="dropdown-menu">
  </div>
</div>
                </div>
                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border text-primary text-xs drop-tab">
                <option>Date Sold</option>
                <option>Date Shipped</option>
                <option>Awaiting Shipment (0)</option>
                <option>Paid and Shipped (0)</option>
                </select>
                </div>
                </div>
              </div>


                    <div class="row container p-3 text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-xs">
                            
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" />
                              Actions
                            </td>
                            <td class="text-left font-w">Record</td>
                            <td class="text-left">Purchase details</td>
                            <td class="text-right">Qty</td>
                            <td class="text-right">Sold for</td>
                            <td class="text-right">Total</td>
                            <td class="text-right">Date sold</td>
                            <td class="text-right">Date paid</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                </div>
                  -------
                </div>

<!--Awaiting-Shipment-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Awaiting-Shipment"
                  role="tabpanel"
                  aria-labelledby="v-pills-Awaiting-Shipment-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Manage orders awaiting Shipment
                  <hr>
                  </span>
                  
                <div class="content pb-3 justify-content-center text-center">
              <div class="row box pl-2">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <p class="form-control border box">Awaiting Shipment (0)</p>  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
            
                <select class="text-primary form-control">
                <option>Last 7days</option>
                <option>Last 60days</option>
                <option>2021</option>
                <option>2020</option>
                </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                            
                </div>
                </div>
              </div>
                <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                  Results: 1 - 5 of 5 (2 Orders selected)

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button> 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                           
<div class="dropdown justify-content-end">
  <a href="#" class="text-primary form-control justify-content-end dropdown-toggle" data-toggle="dropdown">
    More
  </a>
  <div class="dropdown-menu">
  </div>
</div>
                </div>
                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border text-primary text-xs drop-tab">
                <option>Date Sold</option>
                <option>Date Shipped</option>
                <option>Awaiting Shipment (0)</option>
                <option>Paid and Shipped (0)</option>
                </select>
                </div>
                </div>
              </div>


                    <div class="row container p-3 text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-xs">
                            
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" />
                              Actions
                            </td>
                            <td class="text-left font-w">Record</td>
                            <td class="text-left">Purchase details</td>
                            <td class="text-right">Qty</td>
                            <td class="text-right">Sold for</td>
                            <td class="text-right">Total</td>
                            <td class="text-right">Date sold</td>
                            <td class="text-right">Date paid</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
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
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Manage Paid and shipped
                  <hr>
                  </span>
                  
                <div class="content pb-3 justify-content-center text-center">
              <div class="row box pl-2">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <p class="form-control border box">Paid and shipped (2)</p>  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
            
                <select class="text-primary form-control">
                <option>Last 7days</option>
                <option>Last 60days</option>
                <option>2021</option>
                <option>2020</option>
                </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                            
                </div>
                </div>
              </div>
                <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                  Results: 1 - 5 of 5 (2 Paid and shipped selected)

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                           
<div class="dropdown justify-content-end">
  <a href="#" class="text-primary form-control justify-content-end dropdown-toggle" data-toggle="dropdown">
    More
  </a>
  <div class="p-3 dropdown-menu">
      <p>Sell Similar</p>
      <hr>
      <p>Mark as Payment</p>
      <hr>
      <p>Download</p>
  </div>
</div>
                </div>
                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border text-primary text-xs drop-tab">
                <option>Date Sold</option>
                <option>Date Shipped</option>
                <option>Awaiting Shipment (0)</option>
                <option>Paid and Shipped (0)</option>
                </select>
                </div>
                </div>
              </div>


                    <div class="row container p-3 text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-xs">
                            
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" />
                              Actions
                            </td>
                            <td class="text-left font-w">Record</td>
                            <td class="text-left">Purchase details</td>
                            <td class="text-right">Qty</td>
                            <td class="text-right">Sold for</td>
                            <td class="text-right">Total</td>
                            <td class="text-right">Date sold</td>
                            <td class="text-right">Date paid</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
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
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Cancellations
                  <hr>
                  </span>
                  
                <div class="content pb-3 justify-content-center text-center">
              <div class="row box pl-2">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <p class="form-control border box">Cancellations (0)</p>  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
            
                <select class="text-primary form-control">
                <option>Last 7days</option>
                <option>Last 60days</option>
                <option>2021</option>
                <option>2020</option>
                </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                            
                </div>
                </div>
              </div>
                <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                  Results: 1 - 5 of 5 (2 Orders selected)

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button> 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                           
<div class="dropdown justify-content-end">
  <a href="#" class="text-primary form-control justify-content-end dropdown-toggle" data-toggle="dropdown">
    More
  </a>
  <div class="dropdown-menu">
  </div>
</div>
                </div>
                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border text-primary text-xs drop-tab">
                <option>Date Sold</option>
                <option>Date Shipped</option>
                <option>Awaiting Shipment (0)</option>
                <option>Paid and Shipped (0)</option>
                </select>
                </div>
                </div>
              </div>


                    <div class="row container p-3 text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-xs">
                            
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" />
                              Actions
                            </td>
                            <td class="text-left font-w">Record</td>
                            <td class="text-left">Purchase details</td>
                            <td class="text-right">Qty</td>
                            <td class="text-right">Sold for</td>
                            <td class="text-right">Total</td>
                            <td class="text-right">Date sold</td>
                            <td class="text-right">Date paid</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
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
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Returns
                  <hr>
                  </span>
                  
                <div class="content pb-3 justify-content-center text-center">
              <div class="row box pl-2">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <p class="form-control border box">Returns (0)</p>  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
            
                <select class="text-primary form-control">
                <option>Last 7days</option>
                <option>Last 60days</option>
                <option>2021</option>
                <option>2020</option>
                </select>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                            
                </div>
                </div>
              </div>
                <div class="card col-lg-12 col-md-12 col-sm-12 p-3">
                  Results: 1 - 5 of 5 (2 Orders selected)

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Relist</button> 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                           
<div class="dropdown justify-content-end">
  <a href="#" class="text-primary form-control justify-content-end dropdown-toggle" data-toggle="dropdown">
    More
  </a>
  <div class="dropdown-menu">
  </div>
</div>
                </div>
                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border text-primary text-xs drop-tab">
                <option>Date Sold</option>
                <option>Date Shipped</option>
                <option>Awaiting Shipment (0)</option>
                <option>Paid and Shipped (0)</option>
                </select>
                </div>
                </div>
              </div>


                    <div class="row container p-3 text-md">
                      <table class="std table table-fixed">
                        <tbody>
                          <tr class="box font-weight-bold text-xs">
                            
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" />
                              Actions
                            </td>
                            <td class="text-left font-w">Record</td>
                            <td class="text-left">Purchase details</td>
                            <td class="text-right">Qty</td>
                            <td class="text-right">Sold for</td>
                            <td class="text-right">Total</td>
                            <td class="text-right">Date sold</td>
                            <td class="text-right">Date paid</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="std table table-fixed text-xs">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <input class="pr-3" type="checkbox" /><i
                                class="pl-2 text-gray-400 fa fa-flag"
                              ></i>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" class=" border" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-right">1</td>
                            <td class="text-right">£150</td>
                            <td class="text-right">--</td>
                            <td class="text-right">--</td>
                            <td class="text-right">25 Jun</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                </div>
                </div>
<!--Saved Seller-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Saved-Seller"
                  role="tabpanel"
                  aria-labelledby="v-pills-Saved-Seller-tab"
                >
                  -------Saved-Seller
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        