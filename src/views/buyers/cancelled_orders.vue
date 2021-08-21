<template>
  <!-- main content -->
  <div class="container">
    <p class="h6 text-sm p-3"><span class="text-primary">Your Account</span> > <span class="text-primary">Your Orders</span> > <span class=" ">Cancelled Orders</span></p>

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
                    ><span>Orders</span></router-link
                  >
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

                  <div class="card">
  <div class="border card-header">
  <div class="text-dark row">
    <div class="col">
      <p>CANCELLED</p>
    <p class="text-dark">4 August 2021</p>
    </div>
    <div class="col">
      <p>TOTAL</p>
    <p class="text-dark">£0.00</p>
    </div>
    <div class="col-4">
      <p>DISPATCH TO</p>
    <p class="text-dark"> </p>
    </div>
    <div class="col-lg-4 p-2 col-md-4 col-xs-12">
        <p>ORDER # 202-0274579-1617107</p>
    <p class=""> <span class="text-primary text-sm" >View order details </span>|<span class="text-primary text-sm" > Invoice</span></p>
    </div>
  </div>
  </div>
  <div class="card-body">

  <div class="row">
    <div class="col-8">

  <div class="row">
    <div class="col-lg-5 col-md-5 col-xs-12 center">
       <img src="img/product/1.jpg" class="" alt="Product" />
    </div>
    <div class="p-3 text-dark col-7">
       <p class="pt-3 text-primary h6 underline"> Product name</p>
    </div>
  </div>
    </div>
    <div class="col">
<button type="button" class="btn border btn-warning btn-block">Track package</button>
<button type="button" class="btn btn-light border btn-block">Problem with order</button>
<button type="button" class="btn btn-light border btn-block">Return</button>
<button type="button" class="btn btn-light border btn-block">Leave seller feedback</button>
    </div>
  </div>
  </div>
  <div class="card-body border-t-2">
<button type="button" class="text-primary underline"> Archive order</button>
  </div>
</div>
          
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
        