<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>
      <div class="container justify-content-center content-bottom">

        <span class="p-3 text-right">Summary is your My REJEE 
          <router-link
            to="/Summary"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="text-primary"
            title="Home Page"
            >homepage</router-link></span>
      </div>

    </div>
        <div class="row pb-4">
          <div
            class="pl-4
              sidebar-3 
              col-lg-2 col-md-2
              d-xs-none
              pt-3
              font-weight-bold
            "
          >
            <!-- menu -->
            <div class="sidebar-block text-dark">
              <div class="block-content">
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/summary"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Summary"
                            >
                  Summary
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/recentlyviewed"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Recently viewed"
                            >
                  Recently
                    viewed
                </router-link>

                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/purchasehistory"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Purchase History"
                            >
                  Purchase History
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/watchingpage"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Watching"
                            >
                  Watching
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/savedsearch"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Saved Search"
                            >
                  Saved Search
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/savedseller"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Saved Seller"
                            >
                  Saved Seller
                </router-link>
              </div>
              </div>
            </div>
          </div>

          <div class="p-4 col-sm-12 col-lg-9 col-md-9 product-container">

<!--Purchase History-->
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold font-weight-normal">
                  Orders
                  <hr>
                  </span>
                  <div class="row col-xs-12 p-3">
<div class="col-xs-4 col-md-3 col-lg-3 col-sm-6 p-2">
    <div class="page-item text-xs">See Orders from:</div>
    <div class="page-item">
      <select class="form-control-sm text-xs btn-sm text-primary select btn border">
                          <option>Last 60 Days</option>
                          <option>2021</option>
                          <option>2020</option>
                        </select>
    </div>
</div>
<div class="col-xs-4 col-md-3 col-lg-3 col-sm-6 p-2">
    <div class="page-item text-xs">Filter by:</div>
    <div class="page-item">
        <select class="text-xs form-control-sm btn-sm text-primary select btn border">
                          <option>All</option>
                          <option>Shipped</option>
                          <option>Ready for feed back</option>
                        </select>
    </div>
</div>
                  </div>
                <hr>
                <div class="">
                  You do not have any orders to display in this view.
TIP: Change the view using the filters at the top of the section.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  p-3 font-weight-normal">
                  Canceled items
                  <hr>
                  </span>
                <div class="">
                <hr>
                You do not have any canceled unpaid items to display in this view.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold p-3 font-weight-normal">
                  Canceled invoices
                  <hr>
                  </span>
                <div class="">
                <hr>
                  You do not have any canceled invoices to display in this view.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold p-3 font-weight-normal">
                  Returns and canceled orders
                  <hr>
                  </span>
                <div class="">
                <hr>
                  You do not have any returned orders to display in this view.
TIP: Change the view using the filters at the top of the section.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold p-3 font-weight-normal">
                  Unpaid items
                  <hr>
                  </span>
                <div class="">
                <hr>
                  You do not have any ready for payment items to display in this view.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 p-3 font-weight-bold font-weight-normal">
                  Unpaid items
                  <hr>
                  </span>
                <div class="">
                <hr>
                  You do not have any invoices to display in this view.
                </div>
                </div>

          </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        