<template>
  <!-- main content -->
  <div class="m-4">

<nav aria-label="breadcrumb" class="d-xs-none">
  <ol class="breadcrumb text-xs">
    <li class="breadcrumb-item text-primary"><a href="#">Your Account</a></li>
    <li class="breadcrumb-item text-primary" aria-current="page">Sellers hub</li>
    <li class="breadcrumb-item active" aria-current="page">Orders</li>
  </ol>
</nav>

        <div class="justify-content-center row  pb-4">
            
                <div class="container pl-2">
                    <div class="row">
                    <div class="col-lg-6 col-xs-12">
                  <p class="text pl-3 text-dark h4 font-weight-bold font-weight-normal">
                  Orders
                  </p>
                    </div>
                    </div>
                </div>

              <div class="col-lg-12 col-xs-12">

            <form method="post" class="std" id="customer-form">
              <div class="justify-content-center text-center input-group pt-2 pb-2 col-lg-6 col-xs-12">
    <div class="input-group-prepend ">
      <div class="input-group-text bg-light" id="btnGroupAddon"><i class="fa fa-search"></i></div>

    </div>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Search all Orders"
                  class="form-control border"
                  value=""
                />
                <button
                  class="btn-light btn text-primary text-sm  border"
                  type="submit"
                  data-action="show-password"
                  data-text-show="Show"
                  data-text-hide="Hide"
                >
                  Search
                </button>
              </div>
            </form>
                    </div>
          <div class="pb-2 col-12">

<!--Purchase History-->
                <div class="row">
                    <div class="pb-2 pt-2 col-lg-6 col-xs-12">
                        <!-- Example single danger button -->
<div class="btn-group">
  <!-- Example split danger button -->
  <button type="button" class="btn btn-xs text-sm">0 Orders placed:</button>
  <button type="button" class="font-weight-bold text-dark btn-xs text-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    All Orders <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu text-xs">
    <a class="dropdown-item font-weight-bold" href="#">Awaiting delivery (2)</a>
    <a class="dropdown-item font-weight-bold" href="#">Delivered (0)</a>
    <a class="dropdown-item font-weight-bold" href="#">Cancelled (0)</a>
    <a class="dropdown-item font-weight-bold" href="#">Returns (0)</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn m-2 text-sm border dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort
  </button>
  <div class="dropdown-menu text-xs">
    <a class="dropdown-item">Last 30 Days</a>
    <a class="dropdown-item">Past three months</a>
    <a class="dropdown-item">2021</a>
    <a class="dropdown-item">2020</a>
    <a class="dropdown-item">2019</a>
  </div>
</div>
                    </div>
                    
                <div class="">

<!--start Web view-->
                  <div class="card m-2 border d-xs-none ">
                    <div class="card-header font-weight-bold">

    <div class="row text-xs">
    <div class="col">
  <div class="input-group">
      <span class="ml-2"> #ORDER ID</span>
</div>
    </div>
    <div class="col">
      <p class="">CREATED</p>
    </div>
    <div class="col">
      <p class="">CUSTOMER</p>
    </div>
    <div class="col">
      <p class="">PRODUCT</p>
    </div>
    <div class="col">
      <p class="">STATUS</p>
    </div>
    <div class="col">
      <p class="">DELIVERY STATUS</p>
    </div>
    <div class="col">
      <p class="text-right">PRICE</p>
    </div>
    </div>
                    </div>
                <router-link
                  to="/processorder"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                    <div class="card-body border-b-2 text-dark">

    <div class="row text-xs">
    <div class="col">
  <div class="input-group">
      <span class="ml-2 font-weight-bold"> #76343</span>
</div>
    </div>
    <div class="col">
      <p class="">15 August 2020, 16:00</p>
    </div>
    <div class="col">
      <p class="">John Phillips</p>
    </div>
    <div class="col">
      <p class="">The first product name...</p>
    </div>
    <div class="col">
      <span class="alert-xs p-1 mt-4 rounded alert-danger" style="height: 2rem;" role="alert">
       Pending
    </span>
    </div>
    <div class="col">
      <p class="">awaiting delivery</p>
    </div>
    <div class="col">
      <p class="text-right">£150.00</p>
    </div>
    </div>
                    </div>
                </router-link>


                <router-link
                  to="/processorder"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                    <div class="card-body border-b-2 text-dark">

    <div class="row text-xs">
    <div class="col">
  <div class="input-group">
      <span class="ml-2 font-weight-bold"> #76343</span>
</div>
    </div>
    <div class="col">
      <p class="">15 August 2020, 16:00</p>
    </div>
    <div class="col">
      <p class="">John Phillips</p>
    </div>
    <div class="col">
      <p class="">The first product name...</p>
    </div>
    <div class="col">
      <span class="alert-xs p-1 mt-4 rounded alert-success" style="height: 2rem;" role="alert">
       Delivered
    </span>
    </div>
    <div class="col">
      <p class="">Delivered</p>
    </div>
    <div class="col">
      <p class="text-right">£150.00</p>
    </div>
    </div>
                    </div>
                </router-link>
</div>

<!--end Web view-->

<!--start mobile view-->
                  <div class="card m-2 d-md-none border">
                    <div class="card-header">

    <div class="row text-xs">
    <div class="col">
      <p class="text-left"> 15 August 2020, 16:00</p>
    </div>
    <div class="col">
      <p class="text-right">Order ID: <b>425251</b></p>
    </div>
    </div>
                    </div>
    <div class="card-header">

    <div class="row text-xs">
    <div class="col pt-2">
      <span class="alert-xs p-1 mt-4 rounded alert-danger" style="height: 2rem;" role="alert">
       Pending
    </span>
    </div>
    <div class="col">
      <p class="text-right h5">
                <router-link
                  to="/processorder"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                ><b class="fa fa-angle-right fa-lg text-dark font-weight-bold"></b>
                </router-link></p>
    </div>
    </div>
                    </div>
  <div class="card-body text-xs">
  <div class="row">
    <div class="col-4">
      <p class="m-1"> Customer:</p>
    </div>
    <div class="col-8 text-right">
      <p class="m-1 text-dark font-weight-bold"> John Phillips</p>
    </div>
    <div class="col-4">
      <p class="m-1"> Product:</p>
    </div>
    <div class="col-8 text-right">
      <p class="m-1 text-dark font-weight-bold"> Door opening stuff na him be the product names</p>
    </div>
    <div class="col-4">
      <p class="m-1"> Price:</p>
    </div>
    <div class="col-8 text-right">
      <p class="m-1 text-dark font-weight-bold"> £150.00</p>
    </div>
    <div class="col-6">
      <p class="m-1">Delivery status:</p>
    </div>
    <div class="col-6 text-right">
      <p class="m-1 text-dark font-weight-bold">awaiting delivery</p>
    </div>
  </div>
  </div>
</div>

                  <div class="card m-2 d-md-none border">
                    <div class="card-header">

    <div class="row text-xs">
    <div class="col">
      <p class="text-left"> 15 August 2020, 16:00</p>
    </div>
    <div class="col">
      <p class="text-right">Order ID: <b>425251</b></p>
    </div>
    </div>
                    </div>
    <div class="card-header">

    <div class="row text-xs">
    <div class="col pt-2">
      <span class="alert-xs p-1 mt-4 rounded alert-danger" style="height: 2rem;" role="alert">
       Pending
    </span>
    </div>
    <div class="col">
      <p class="text-right h5">
                <router-link
                  to="/processorder"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                ><b class="fa fa-angle-right fa-lg text-dark font-weight-bold"></b>
                </router-link></p>
    </div>
    </div>
                    </div>
  <div class="card-body text-xs">
  <div class="row">
    <div class="col-4">
      <p class="m-1"> Customer:</p>
    </div>
    <div class="col-8 text-right">
      <p class="m-1 text-dark font-weight-bold"> John Phillips</p>
    </div>
    <div class="col-4">
      <p class="m-1"> Product:</p>
    </div>
    <div class="col-8 text-right">
      <p class="m-1 text-dark font-weight-bold"> Door opening stuff na him be the product names</p>
    </div>
    <div class="col-4">
      <p class="m-1"> Price:</p>
    </div>
    <div class="col-8 text-right">
      <p class="m-1 text-dark font-weight-bold"> £150.00</p>
    </div>
    <div class="col-6">
      <p class="m-1">Delivery status:</p>
    </div>
    <div class="col-6 text-right">
      <p class="m-1 text-dark font-weight-bold">awaiting delivery</p>
    </div>
  </div>
  </div>
</div>
<!--end mobile view-->

                  <p class="text-dark text-center">You do not have any orders to display in this view.</p>

                        <div class="justify-content-center p-2 text-sm">
                <nav aria-label="Page navigation example" class="col-12">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link underline" href="#">1</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
  </ul>
</nav>
                      </div>
                </div>
                </div>

          </div>

          <!-- end col-md-9-1 -->
        </div>

  </div>
</template>
        