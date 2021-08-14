<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="justify-content-center row  pb-4">
            
                <div class="container pl-2">
                  <p class="text p-3 text-dark h4 font-weight-bold font-weight-normal">
                  Your Orders
                  </p>
                  <div class="content text-dark p-2 border-b-2 font-weight-bold col-12  pl-2">
                  <router-link
                    to="/purchasehistory"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Orders"
                    ><span class="text-primary">Orders</span></router-link
                  >
                  <router-link
                    to="/buyagain"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="p-2"
                    title="Buy Again"
                    ><span>Buy Again</span></router-link>
                  <router-link
                    to="/cancelledorder"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="border-warning border-b-4 p-2"
                    title="Cancelled Orders"
                    ><span>Cancelled Orders</span></router-link>
                  <router-link
                    to="/buyerreturns"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Returns"
                    ><span>Returns</span></router-link>
                  </div>
                </div>

          <div class="p-4 col-sm-10 col-lg-10 col-md-10 product-container">

<!--Purchase History-->
                <div class="row">
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
        