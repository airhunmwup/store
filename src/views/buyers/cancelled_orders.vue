<template>
  <!-- main content -->
  <div class="container">
<nav aria-label="breadcrumb" class="d-xs-none">
  <ol class="breadcrumb text-xs">
    <li class="breadcrumb-item text-primary"><a href="#">Your Account</a></li>
    <li class="breadcrumb-item text-primary" aria-current="page">Your Orders</li>
    <li class="breadcrumb-item active" aria-current="page">Cancelled Orders</li>
  </ol>
</nav>
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

          <div class="p-4 col-sm-12 col-lg-12 col-md-12 product-container">

<!--Cancelled Orders-->
                <div class="row">
                    <div class="pb-3 col-12">
                        <form method="post" class="std" id="customer-form">
                        <div class="input-group">
                <div class="page-item p-2 font-weight-bold text-dark">0 Orders cancelled: </div>
                                <select class="form-control-sm shadow-inner border text-xs text-primary btn select ">
                                    <option>Last 30 Days</option>
                                    <option>Past three months</option>
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    </select>

                        </div>
                        </form>
                    </div>
                <div class="m-2">
                  <div class="card">
  <div class="border card-header">
  <div class="text-dark row text-xs">
    <div class="m-1 col-2 col-xs-12">
      <p class="font-weight-bold">ORDER CANCELLED</p>
    <p class="text-dark">4 August 2021</p>
    </div>
    <div class="m-1 col-2 col-xs-12">
      <p class="font-weight-bold">TOTAL</p>
    <p class="text-dark">£0.00</p>
    </div>
    <div class="m-1 col-3 col-xs-12">

    </div>
    <div class="m-1 col-4 col-xs-12">
        <p class="font-weight-bold">ORDER # 202-0274579-1617107</p>
                                    <p><router-link
                                      to="/orderdetails"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      ><span class="text-primary text-sm" >View order details </span>|<span class="text-primary text-sm" > Invoice</span></router-link></p>
    </div>
  </div>
  </div>
  <div class="card-body">

  <div class="row">
  <div class="row ml-2 col-8 col-xs-12">
    <div class="col-12 m-1 p-2">

  <div class="row">
    <div class="col-5 col-lg-4 center">
       <img src="img/product/1.jpg" class="mt-3" alt="Product" />
    </div>
    <div class="p-3 text-dark col-7 col-md-7 col-lg-8">
       <p class="pt-3 mt-2 text-info text-sm h6 underline"> Product namenjnjbhvgcfcfcfgcfgcgfg</p>
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text text-dark" id="basic-addon1"><i class="fa fa-refresh"></i></span>
        <button type="button" class="btn border underline text-dark text-xs p-2 btn-sm">Buy it again</button>
  </div>
</div>
    </div>
  </div>
    </div>
  </div>
  <div class="row col-4 col-xs-12 justify-content-center">
    <div class="content ml-4 mt-3">
      <button class="text-xs btn-sm  btn-light border btn-block" type="button" data-toggle="collapse" data-target="#productfeedback-1" aria-expanded="false" aria-controls="productfeedback-1">
    Leave seller feedback
  </button>
<div class="collapse" id="productfeedback-1">
  <div class="form-group m-2">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">...</textarea>
<button class="btn btn-sm m-1 btn-success" type="submit">send</button>
  </div>
</div>
    </div>
  </div>
  </div>
  </div>
  <div class="card-body border-t-2">
  </div>
</div>
                 </div>

                <div class="m-2">
                  <div class="card">
  <div class="border card-header">
  <div class="text-dark row text-xs">
    <div class="m-1 col-2 col-xs-12">
      <p class="font-weight-bold">ORDER CANCELLED</p>
    <p class="text-dark">4 August 2021</p>
    </div>
    <div class="m-1 col-2 col-xs-12">
      <p class="font-weight-bold">TOTAL</p>
    <p class="text-dark">£0.00</p>
    </div>
    <div class="m-1 col-3 col-xs-12">

    </div>
    <div class="m-1 col-4 col-xs-12">
        <p class="font-weight-bold">ORDER # 202-0274579-1617107</p>
                                    <p><router-link
                                      to="/orderdetails"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      ><span class="text-primary text-sm" >View order details </span>|<span class="text-primary text-sm" > Invoice</span></router-link></p>
    </div>
  </div>
  </div>
  <div class="card-body">

  <div class="row">
  <div class="row ml-2 col-8 col-xs-12">
    <div class="col-12 m-1 p-2">

  <div class="row">
    <div class="col-5 col-lg-4 center">
       <img src="img/product/15.jpg" class="mt-3" alt="Product" />
    </div>
    <div class="p-3 text-dark col-7 col-md-7 col-lg-8">
       <p class="pt-3 mt-2 text-info text-sm h6 underline"> Product namenjnjbhvgcfcfcfgcfgcgfg</p>
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text text-dark" id="basic-addon1"><i class="fa fa-refresh"></i></span>
        <button type="button" class="btn border underline text-dark text-xs p-2 btn-sm">Buy it again</button>
  </div>
</div>
    </div>
  </div>
    </div>
  </div>
  <div class="row col-4 col-xs-12 justify-content-center">
    <div class="content ml-4 mt-3">
      <button class="text-xs btn-sm  btn-light border btn-block" type="button" data-toggle="collapse" data-target="#productfeedback-2" aria-expanded="false" aria-controls="productfeedback-2">
    Leave seller feedback
  </button>
<div class="collapse" id="productfeedback-2">
  <div class="form-group m-2">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">...</textarea>
<button class="btn btn-sm m-1 btn-success" type="submit">send</button>
  </div>
</div>
    </div>
  </div>
  </div>
  </div>
  <div class="card-body border-t-2">
  </div>
</div>
                  <p class="text-dark text-center">You do not have any orders to display in this view.</p>
                </div>
                </div>



          </div>

          <!-- end col-md-9-1 -->
        </div>

  </div>
</template>
        