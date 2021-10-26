<template>
  <!-- main content -->
  <div class="justify-content-center text-sm"> 
    <div class="justify-content-center">
          <!--Sigin-and-security-->
            <p class="text text-dark h4 p-3 font-weight-bold">
              Your Account
            </p>
            <div class="row pb-5">
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/purchasehistory"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Your Orders"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/orderimg.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Orders</p>
                      <span class=" text-xs">Track,return, or cancel orders.</span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/buyersigninsecsetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Sign in & Security"
                  class="card p-3"
                >
                  <div class="text-left row">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/siginsec4.png" width="100%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Sign in & Security</p>
                      <span class=" text-xs">
                        Edit Sign in, name, and mobile number.
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/buyeraddresssetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Your Addresses"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/address.png" width="60%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Addresses</p>
                      <span class=" text-xs">
                        Edit address and delivery preferences.
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <!--
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/paymentsetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Your Payment"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/payment.png" width="80%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Payment</p>
                      <p class="text-dark">
                        Manage payment methods and settings
                      </p>
                    </div>
                  </div>
                </router-link>
              </div>
              -->
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/My message"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Message Center"
                  class="card p-3"
                >
                  <div class="row text-left">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/message.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Message Center</p>
                      <span class=" text-xs">
                        View your REJEE Stores and Seller Messages.
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/overview"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Sellers Hub"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/sellershub.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Sellers Hub</p>
                      <span class=" text-xs">Sale on Rejee Stores, manage sellers account. </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/help"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="help"
                  class="card p-3"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/help.ico" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Help</p>
                      <span class=" text-xs">Browes available help topics</span>
                    </div>
                  </div>
                </router-link>
              </div>
            </div>
      <!-- end col-md-9-1 -->
    </div>
  </div>
</template>
        