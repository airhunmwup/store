<template>
  <!-- main content -->
  <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb text-xs">
    <li class="breadcrumb-item text-primary"><a href="#">Your Account</a></li>
    <li class="breadcrumb-item active" aria-current="page">Your payments</li>
  </ol>
</nav>

        <div class="justify-content-center text-sm row pt-4 pb-4">
            

          <div class="col-sm-12 col-lg-12 col-md-12 product-container mb-4">

  <div class="row">
    <div class="col-8">
                  <p class="h4 text-dark text-left">Your payment preferences</p>
                  <p class="text-dark text-left">Your default preferences are used for on store purchases.</p>
    </div>
    <div class="col-sm">
<div class="card border" style="width: 18rem;">
  <div class="card-body">
  <div class="row">
    <div class="col-8">
    <h5 class="card-title">1-Click disabled for this browser</h5>
    </div>
    <div class="col-sm">
    </div>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label text-info" for="defaultCheck1">
    Disabled 1-Click everywhere
  </label>
</div>
  </div>
</div>
    </div>
  </div>


    <p class="p-3"></p>

<!--if a payment prefence has been set -->
<div class="card border">
  <div class="card-header">
  <div class="row">
    <div class="col-sm">
      <p class="text-left text-dark text-lg">Name on Card, Address line 1, City, Postcode</p>
    </div>
    <div class="col-sm">
      <p class="text-right text-success text-lg "><span class="fa fa-check"></span> default</p>
    </div>
  </div>
  </div>
  <div class="card-body">
  <div class="row">
    <div class="col-sm">
      <p class="text-left text-dark"><span class="font-weight-bold">Payment Method </span> 
                <router-link
                  to="/addcard"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                ><span class="font-weight-regular text-info underline">Change</span>
                </router-link></p>
    </div>
    <div class="col-sm">
      <p class="text-info underline">Delete</p>
    </div>
  </div>
  </div>
</div>


    <p class="p-3"></p>

<div class="card border p-2">
  <div class="card-body">
  <div class="row ">
    <div class="col-1 h5 text-right text-default">
      <span class="fa fa-lg fa-plus"></span>
    </div>
    <div class="col-11"> 
                <router-link
                  to="/addcard"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
      <p class="text-left text-info underline">Add a purchase preference</p>
                </router-link>
    </div>
  </div>
  </div>
</div>

          </div>

          <!-- end col-md-9-1 -->
        </div>

  </div>
</template>
        