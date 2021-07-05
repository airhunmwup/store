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
                    ><span class="text-right text-primary underline justify-content-end">Message (2)</span></router-link>
          <div class="text-base">
            <div class="pt-3 pl-3">
              <span class="font-weight-bold text-dark h3">
                Seller Hub</span
              >
              <span class="text-dark text-sm"> UserID (0)</span>
            </div>
          </div>
        </div>
      </div>

    </div>
              <div class="row pl-4">
                <div class="container pl-3">
                  <div class="content text-dark p-2 border-b-2 font-weight-bold col-12  pl-2">
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
                    class="p-2"
                    title="Orders"
                    ><span>Orders</span></router-link>
                  <router-link
                    to="/Listing"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="border-primary border-b-4 p-2"
                    title="listing"
                    ><span class="text-primary">Listing</span></router-link>
                  <router-link
                    to="/Account Page"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Account"
                    ><span>Account</span></router-link>
                  </div>
                </div>
              </div>

<div class="dropdown pt-2 d-lg-none h6 d-md-none justify-content-between pl-5">
  <a href="#" class="text-primary underline  dropdown-toggle" data-toggle="dropdown">
    Menu
  </a>
  <div class="dropdown-menu">
          
          <div
            class="pl-4 
              sidebar-3 
              col-lg-2 col-md-2
              d-xs-none
              text-sm
              font-weight-bold
            "
          >
                <button
                  class="text-left h6 font-weight-bold p-2 active"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  Inventory
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
                  class="text-left h6 font-weight-bold p-2 active"
                  id="v-pills-All-Listing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-All-Listing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-All-Listing"
                  aria-selected="true"
                >
                  Listings
                </button>
                <button
                  class="text-left font-weight-bold p-2"
                  id="v-pills-Active-Listing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Active-Listing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Active-Listing"
                  aria-selected="false"
                >
                  Active
                </button>
                <button
                  class="text-left  font-weight-bold p-2"
                  id="v-pills-Unsold-listing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Unsold-listing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Unsold-listing"
                  aria-selected="false"
                >
                  Unsold
                </button>

                <button
                  class="text-left  font-weight-bold p-2"
                  id="v-pills-Draft-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Draft"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Draft"
                  aria-selected="true"
                >
                  Drafts
                </button>
                <button
                  class="text-left  font-weight-bold p-2"
                  id="v-pills-Scheduled-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Scheduled"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Scheduled"
                  aria-selected="true"
                >
                  Scheduled
                </button>
                <button
                  class="text-left  font-weight-bold p-2"
                  id="v-pills-Ended-listing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Ended-listing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Ended-listing"
                  aria-selected="true"
                >
                  Ended
                </button>
                <hr>
              </div>
              </div>
            </div>
          </div>
  </div>
</div>
        <div class="row">
          <div
            class="pl-4 
              sidebar-3 
              col-lg-2 col-md-2
              d-xs-none
              text-sm
              font-weight-bold
            "
          >
                <button
                  class="text-left h6 font-weight-bold p-2 active"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  Inventory
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
                  class="text-left h6 font-weight-bold p-2 active"
                  id="v-pills-All-Listing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-All-Listing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-All-Listing"
                  aria-selected="true"
                >
                  Listings
                </button>
                <button
                  class="text-left font-weight-bold p-2"
                  id="v-pills-Active-Listing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Active-Listing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Active-Listing"
                  aria-selected="false"
                >
                  Active
                </button>
                <button
                  class="text-left  font-weight-bold p-2"
                  id="v-pills-Unsold-listing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Unsold-listing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Unsold-listing"
                  aria-selected="false"
                >
                  Unsold
                </button>

                <button
                  class="text-left  font-weight-bold p-2"
                  id="v-pills-Draft-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Draft"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Draft"
                  aria-selected="true"
                >
                  Drafts
                </button>
                <button
                  class="text-left  font-weight-bold p-2"
                  id="v-pills-Scheduled-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Scheduled"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Scheduled"
                  aria-selected="true"
                >
                  Scheduled
                </button>
                <button
                  class="text-left  font-weight-bold p-2"
                  id="v-pills-Ended-listing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Ended-listing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Ended-listing"
                  aria-selected="true"
                >
                  Ended
                </button>
                <hr>
              </div>
              </div>
            </div>
          </div>
          <div class="pl-3 col-sm-12 col-lg-10 col-md-10 product-container">
            <div id="wrapper-site">

              <div class="col-sm-12 col-lg-12 p-3 col-md-12 product-container">
                <div id="wrapper-site">
              <div class="tab-content" id="v-pills-tabContent">

                              
<!--All Listing-->
                <div
                  class="tab-pane fade show active"
                  id="v-pills-All-Listing"
                  role="tabpanel"
                  aria-labelledby="v-pills-All-Listing-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Manage All Listings
                  </span>
                  <hr>
                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
                            <a class="cateItem" 
                              data-toggle="collapse"
                              data-target="#search" href="#">
                                  <span class="pr-2 pt-2"><b><i class="fa fa-angle-down"></i> Search</b></span></a>
                              </div>
                            <div
                              class="subCategory collapse"
                              id="search"
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
                                    <option>All categories</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
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
                  
                <div class="card col-lg-12 col-md-12 col-sm-12 pt-3">
                  Results: 1 - 5 of 5 

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 pb-2 pt-2 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                <option>Date</option>
                <option>A to Z</option>
                <option>Heighest Quantity</option>
                <option>Lowestest Quantity</option>
                <option>Heighest Views</option>
                <option>Lowestest Views</option>
                <option>Heighest Watches</option>
                <option>Lowestest Watches</option>
                <option>Heighest Offers</option>
                <option>Lowestest Offers</option>
                <option>Heighest Bids</option>
                <option>Lowestest Bids</option>
                </select>
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6">
                  <router-link
                    to="/Create Listing"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    title="listing"
                    >
                    <button class="form-control border text-primary">Create listing</button></router-link> 
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Delete</button>
                </div>
                <div class="col-lg-3 pb-2 pt-2 col-md-3 col-sm-6">
                    <button class="form-control border text-primary">Upload</button>
                </div>
                </div>
              </div>


                      <div class="row container text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-dark font-weight-bold text-xs">
                              <td class="text-left">
                              </td>
                            <td class="text-left font-w"></td>
                            <td class="text-left font-w">Photo</td>
                            <td class="text-left">Title</td>
                            <td class="text-left">Qty</td>
                            <td class="text-left">Current price</td>
                            <td class="text-left">shipping cost</td>
                            <td class="text-left">Views</td>
                            <td class="text-left">Watches</td>
                            <td class="text-left">Offers</td>
                            <td class="text-left">Bids</td>
                            </tr>
                          <tr>
                            <td class="">
                              <span><input class="" type="checkbox" /></span>
                            </td>
                            <td class="text-left">
                    <button class="underline text-primary">Edit</button>
                    <p class="pt-3"><i class="fa fa-cloud-upload text-success"></i></p>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">--</td>
                          </tr>
                          <tr>
                            <td class="">
                              <span><input class="" type="checkbox" /></span>
                            </td>
                            <td class="text-left">
                    <button class="underline text-primary">Edit</button>
                    <p class="pt-3"><i class="fa fa-cloud-upload text-danger"></i></p>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">--</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
                </div>
                </div>
<!--Active Listing-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Active-Listing"
                  role="tabpanel"
                  aria-labelledby="v-pills-Active-Listing-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Manage active Listings
                  </span>
                  <hr>
                  
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
                                    <option>All categories</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
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
                <div class="card col-lg-12 col-md-12 col-sm-12 pt-3">
                  Results: 1 - 5 of 5

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 p-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                <option>Date</option>
                <option>A to Z</option>
                <option>Heighest Quantity</option>
                <option>Lowestest Quantity</option>
                <option>Heighest Views</option>
                <option>Lowestest Views</option>
                <option>Heighest Watches</option>
                <option>Lowestest Watches</option>
                <option>Heighest Offers</option>
                <option>Lowestest Offers</option>
                <option>Heighest Bids</option>
                <option>Lowestest Bids</option>
                </select>
                </div>
                <div class="col-lg-3 col-md-3 p-3 col-sm-6">
                    <button class="form-control border text-primary">Delete</button>
                </div>
                </div>
              </div>


                      <div class="row container text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-dark font-weight-bold text-xs">
                              <td class="text-left">
                              </td>
                            <td class="text-left font-w"></td>
                            <td class="text-left font-w">Photo</td>
                            <td class="text-left">Title</td>
                            <td class="text-left">Qty</td>
                            <td class="text-left">Current price</td>
                            <td class="text-left">shipping cost</td>
                            <td class="text-left">Views</td>
                            <td class="text-left">Watches</td>
                            <td class="text-left">Offers</td>
                            <td class="text-left">Bids</td>
                            </tr>
                          <tr>
                            <td class="">
                              <span><input class="" type="checkbox" /></span>
                            </td>
                            <td class="text-left">
                    <p class="pt-3"><i class="fa fa-cloud-upload text-success"></i></p>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">--</td>
                          </tr>
                          <tr>
                            <td class="">
                              <span><input class="" type="checkbox" /></span>
                            </td>
                            <td class="text-left">
                    <p class="pt-3"><i class="fa fa-cloud-upload text-success"></i></p>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">--</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
                </div>
                </div>

<!--Unsold listing-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Unsold-listing"
                  role="tabpanel"
                  aria-labelledby="v-pills-Unsold-listing-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Unsold listing
                  </span>
                  <hr>
                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
                            <a class="cateItem" 
                              data-toggle="collapse"
                              data-target="#unsold_search" href="#">
                                  <span class="pr-2 pt-2"><b><i class="fa fa-angle-down"></i> Search</b></span></a>
                              </div>
                            <div
                              class="subCategory collapse"
                              id="unsold_search"
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
                                    <option>All categories</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
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
                  Results: 1 - 5 of 5

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">

                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                <option>Date</option>
                <option>A to Z</option>
                <option>Heighest Quantity</option>
                <option>Lowestest Quantity</option>
                <option>Heighest Views</option>
                <option>Lowestest Views</option>
                <option>Heighest Watches</option>
                <option>Lowestest Watches</option>
                <option>Heighest Offers</option>
                <option>Lowestest Offers</option>
                <option>Heighest Bids</option>
                <option>Lowestest Bids</option>
                </select>
                </div>
                </div>
              </div>
                <div class="content pt-2 justify-content-center text-center">
             

                      <div class="row container text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-dark font-weight-bold text-xs">
                              <td class="text-left">
                              </td>
                            <td class="text-left font-w"></td>
                            <td class="text-left font-w">Photo</td>
                            <td class="text-left">Title</td>
                            <td class="text-left">Qty</td>
                            <td class="text-left">Current price</td>
                            <td class="text-left">shipping cost</td>
                            <td class="text-left">Views</td>
                            <td class="text-left">Watches</td>
                            <td class="text-left">Offers</td>
                            <td class="text-left">Bids</td>
                            </tr>
                          <tr>
                            <td class="">
                              <span><input class="" type="checkbox" /></span>
                            </td>
                            <td class="text-left">
                    <button class="underline text-primary">Edit</button>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">--</td>
                          </tr>
                          <tr>
                            <td class="">
                              <span><input class="" type="checkbox" /></span>
                            </td>
                            <td class="text-left">
                    <button class="underline text-primary">Edit</button>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">--</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
              </div>

                </div>
                </div>

<!--Draft-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Draft"
                  role="tabpanel"
                  aria-labelledby="v-pills-Draft-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Draft Listings
                  </span>
                  <hr>
                  
                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
                            <a class="cateItem" 
                              data-toggle="collapse"
                              data-target="#draft_search" href="#">
                                  <span class="pr-2 pt-2"><b><i class="fa fa-angle-down"></i> Search</b></span></a>
                              </div>
                            <div
                              class="subCategory collapse"
                              id="draft_search"
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
                                    <option>All categories</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
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
                  Results: 1 - 5 of 5 

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                
                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                <option>Date</option>
                <option>A to Z</option>
                <option>Heighest Quantity</option>
                <option>Lowestest Quantity</option>
                </select>
                </div>
                </div>
              </div>
                <div class="content pt-2 justify-content-center text-center">
             

                      <div class="row container text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-dark font-weight-bold text-xs">
                              <td class="text-left">
                              </td>
                            <td class="text-left font-w"></td>
                            <td class="text-left font-w">Photo</td>
                            <td class="text-left">Title</td>
                            <td class="text-left">Qty</td>
                            <td class="text-left">Current price</td>
                            <td class="text-left">shipping cost</td>
                            </tr>
                          <tr>
                            <td class="">
                              <span><input class="" type="checkbox" /></span>
                            </td>
                            <td class="text-left">
                    <button class="underline text-primary">Edit</button>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                          </tr>
                          <tr>
                            <td class="">
                              <span><input class="" type="checkbox" /></span>
                            </td>
                            <td class="text-left">
                    <button class="underline text-primary">Edit</button>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
              </div>

                </div>
                </div>

<!--Scheduled-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Scheduled"
                  role="tabpanel"
                  aria-labelledby="v-pills-Scheduled-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Scheduled Listings
                  </span>
                  <hr>
                  
                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
                            <a class="cateItem" 
                              data-toggle="collapse"
                              data-target="#draft_search" href="#">
                                  <span class="pr-2 pt-2"><b><i class="fa fa-angle-down"></i> Search</b></span></a>
                              </div>
                            <div
                              class="subCategory collapse"
                              id="draft_search"
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
                                    <option>All categories</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
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
                  Results: 1 - 5 of 5 

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">
                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                
                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                <option>Date</option>
                <option>A to Z</option>
                <option>Heighest Quantity</option>
                <option>Lowestest Quantity</option>
                </select>
                </div>
                </div>
              </div>
                <div class="content pt-2 justify-content-center text-center">
             

                      <div class="row container text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-dark font-weight-bold text-xs">
                              <td class="text-left">
                                Scheduled Date
                              </td>
                            <td class="text-left font-w">Photo</td>
                            <td class="text-left">Title</td>
                            <td class="text-left">Qty</td>
                            <td class="text-left">Current price</td>
                            <td class="text-left">shipping cost</td>
                            </tr>
                          <tr>
                            <td class="">
                              <span>12-06-2020</span>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                          </tr>
                          <tr>
                            <td class="">
                              <span>12-06-2020</span>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/8.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
              </div>

                </div>
                </div>
<!--Ended1-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Ended-1listing"
                  role="tabpanel"
                  aria-labelledby="v-pills-Ended-1listing-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Unsold listing
                  </span>
                  <hr>
                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
                            <a class="cateItem" 
                              data-toggle="collapse"
                              data-target="#unsold_search" href="#">
                                  <span class="pr-2 pt-2"><b><i class="fa fa-angle-down"></i> Search</b></span></a>
                              </div>
                            <div
                              class="subCategory collapse"
                              id="unsold_search"
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
                                    <option>All categories</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
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
                  Results: 1 - 5 of 5

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">

                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                <option>Date</option>
                <option>A to Z</option>
                <option>Heighest Quantity</option>
                <option>Lowestest Quantity</option>
                <option>Heighest Views</option>
                <option>Lowestest Views</option>
                <option>Heighest Watches</option>
                <option>Lowestest Watches</option>
                <option>Heighest Offers</option>
                <option>Lowestest Offers</option>
                <option>Heighest Bids</option>
                <option>Lowestest Bids</option>
                </select>
                </div>
                </div>
              </div>
                <div class="content pt-2 justify-content-center text-center">
             

                      <div class="row container text-md table-responsive">
                        <table class="std table">
                          <tbody>
                            <tr class="box border-dark font-weight-bold text-xs">
                            <td class="text-left font-w">Photo</td>
                            <td class="text-left">Title</td>
                            <td class="text-left">Qty</td>
                            <td class="text-left">Current price</td>
                            <td class="text-left">shipping cost</td>
                            <td class="text-left">Views</td>
                            <td class="text-left">Watches</td>
                            <td class="text-left">Offers</td>
                            <td class="text-left">Bids</td>
                            </tr>
                          <tr>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/6.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">--</td>
                          </tr>
                          <tr>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >
                    <img src="img/product/4.jpg" width="90px" class="" alt="Product" />
                              </router-link>
                            </td>
                            <td class="text-left border">
                              <router-link
                                to="/seller_dashboard"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Dashboard"
                                >Product name
                              </router-link>
                            </td>
                            <td class="text-left border">1</td>
                            <td class="text-left border">£150</td>
                            <td class="text-left border">Free</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">0</td>
                            <td class="text-left border">--</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
              </div>

                </div>
                </div>
<!--when empty-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Ended-listing"
                  role="tabpanel"
                  aria-labelledby="v-pills-Ended-listing-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  font-weight-normal">
                  Unsold listing
                  </span>
                  <hr>
                        <!--search section-->

                          <div class="pb-2 pt-2 text-left text-dark">

                              <div class="col-12">
                            <a class="cateItem" 
                              data-toggle="collapse"
                              data-target="#unsold_search" href="#">
                                  <span class="pr-2 pt-2"><b><i class="fa fa-angle-down"></i> Search</b></span></a>
                              </div>
                            <div
                              class="subCategory collapse"
                              id="unsold_search"
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
                                    <option>All categories</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
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
                  Results: 1 - 5 of 5

                <div class="content pt-2 justify-content-center text-center">
              <div class="row pl-2">

                <div class="col-lg-3 row col-md-3 col-sm-3">
                <span class="col-5 pt-2"><p class="text-xs">sort by</p> </span>

                <select class="col-7 border form-control-sm text-primary text-xs drop-tab">
                <option>Date</option>
                <option>A to Z</option>
                <option>Heighest Quantity</option>
                <option>Lowestest Quantity</option>
                <option>Heighest Views</option>
                <option>Lowestest Views</option>
                <option>Heighest Watches</option>
                <option>Lowestest Watches</option>
                <option>Heighest Offers</option>
                <option>Lowestest Offers</option>
                <option>Heighest Bids</option>
                <option>Lowestest Bids</option>
                </select>
                </div>
                </div>
              </div>
                <div class="content pt-2 justify-content-center text-center">
             <hr>
<p class="p-3 text-dark">No activity here!</p>
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

    <hr>
  </div>
</template>
        