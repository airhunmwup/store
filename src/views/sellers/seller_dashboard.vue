<template>
  <!-- main content -->
  <div class="justify-content-center text-sm"> 
    <div class="justify-content-center">
          <!--Sigin-and-security-->
            <span class="text text-dark pl-4 font-weight-normal">
              <p class="font-weight-bold h4">Seller Hub
              <span class="text-dark text-sm"></span></p>
            <p class=""><span class="text-dark font-weight-bold text-sm">Markus.</span> Welcome to your REJEE Sellers Dashboard. <span class="text-sm text-info">(start selling on with your sellers hub).</span> </p>
            </span>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                <router-link
                  to="/Orders"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Manage Orders"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/orderimg.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Manage Orders</p>
                      <span class=" text-xs">(Manage your sold, cancelled and returns).</span>

                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                <router-link
                  to="/listings"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Manage Listings"
                  class="card p-3"
                >
                  <div class="text-left row">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/list.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Listings</p>
                      <span class=" text-xs">
                        (List items and manage existing listings).
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                <router-link
                  to="/managepayout"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Your Payout"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/payout.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Payout</p>
                      <span class=" text-xs">
                        (Manage payout preferences).
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                <router-link
                  to="/Subscription"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Subscriptions"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/subscription.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Subscriptions</p>
                      <span class=" text-xs">
                        (Manage Subscription plans).
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
            </div>
      <!-- end col-md-9-1 -->
    </div>
        <div class="d-md-none pb-5"></div>
  </div>
</template>
        