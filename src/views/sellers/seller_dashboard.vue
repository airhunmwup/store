<template>
  <!-- main content -->
  <div class="container justify-content-center"> 
    <div class="row justify-content-center">
          <!--Sigin-and-security-->
          <div class="row pb-5">
            <span class="text text-dark h5 pl-4 font-weight-normal">
              <h1 class="title-page">Seller Hub
              <span class="text-dark text-sm"> UserID (0)</span></h1>
            </span>
            <div class="row">
              <div class="alert alert-info border text-dark" role="alert">
  <div class="row">
    <div class="col-sm">
    <div class="row">
    <div class="col">
      <p class="text-sm font-weight-bold">Total Sales:</p>
    </div>
    <div class="col text-right">
      £0.00
    </div>
    </div>
    <div class="row">
    <div class="col">
      <p class="text-sm font-weight-bold">Today:</p>
    </div>
    <div class="col text-right">
      £0.00
    </div>
    </div>
    <div class="row">
    <div class="col">
      <p class="text-sm font-weight-bold">Last 7 days:</p>
    </div>
    <div class="col text-right">
      £0.00
    </div>
    </div>
    <div class="row">
    <div class="col">
      <p class="text-sm font-weight-bold">Last 31 days:</p>
    </div>
    <div class="col text-right">
      £0.00
    </div>
    </div>
  </div>
    <div class="col-sm">
    <div class="row">
    <div class="col-10">
      <p class="text-sm font-weight-bold">Awaiting shipment:</p>
    </div>
    <div class="col text-right">
      0
    </div>
    </div>
    <div class="row">
    <div class="col-10">
      <p class="text-sm font-weight-bold">All Open returns/replace:</p>
    </div>
    <div class="col text-right">
      0
    </div>
    </div>
    <div class="row">
    <div class="col">
      <p class="text-sm font-weight-bold">Cancelled:</p>
    </div>
    <div class="col text-right">
      0
    </div>
    </div>
  </div>
</div>
</div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                <router-link
                  to="/Orders"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Orders"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/orderimg.png" width="100%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Manage Orders</p>
                      <p class="text-dark">Manage your sold, cancelled and returns. </p>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                <router-link
                  to="/listings"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Listings"
                  class="card p-3"
                >
                  <div class="text-left row">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/shield.png" width="100%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Listings</p>
                      <p class="text-dark">
                        List items and manage existing listings.
                      </p>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                <router-link
                  to="/buyeraddresssetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Your Addresses"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/address.png" width="100%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Payout</p>
                      <p class="text-dark">
                        Manage payout preferences
                      </p>
                    </div>
                  </div>
                </router-link>
              </div>
            </div>
          </div>
      <!-- end col-md-9-1 -->
    </div>
  </div>
</template>
        