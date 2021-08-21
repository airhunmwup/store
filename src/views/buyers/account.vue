<template>
  <!-- main content -->
  <div class="container"> 
    <div class="row p-4">
      <div id="wrapper-site">
        <div class="tab-content" id="v-pills-tabContent">
          <!--Sigin-and-security-->
          <div class="row">
            <span class="text text-dark h5 pl-4 font-weight-normal">
              <h1 class="title-page">Your Account</h1>
            </span>
            <div class="row center ">
              <div class="col-lg-4 col-md-4 col-sm-6 p-4">
                <router-link
                  to="/purchasehistory"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                  <div class="text-left p-2 card">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/orderimg.png" width="100%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Orders</p>
                      <p class="text-dark">Track,return, or buy things again</p>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-4">
                <router-link
                  to="/buyersigninsecsetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                  <div class="text-left p-2 card">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/shield.png" width="100%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Sign in & Security</p>
                      <p class="text-dark">
                        Edit Sign in, name, and mobile number
                      </p>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-4">
                <router-link
                  to="/buyeraddresssetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                  <div class="text-left p-2 card">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/address.png" width="100%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h5">Your Addresses</p>
                      <p class="text-dark">
                        Edit address and delivery preferences
                      </p>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-4">
                <router-link
                  to="/paymentsetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                  <div class="text-left p-2 card">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/payment.png" width="100%" />
                    </div>
                    <div class="col-12">
                      <p class="text-dark h5">Your Payment</p>
                      <p class="text-dark">
                        Manage payment methods and settings
                      </p>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-4">
                <router-link
                  to="/My message"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                  <div class="text-left p-2 card">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/message.png" width="100%" />
                    </div>
                    <div class="col-12">
                      <p class="text-dark h5">Message Center</p>
                      <p class="text-dark">
                        View your REJEE Stores and Marketplace Seller Message
                      </p>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-4">
                <router-link
                  to="/Resolution center"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                  <div class="text-left p-2 card">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/help.ico" width="100%" />
                    </div>
                    <div class="col-12">
                      <p class="text-dark h5">Help</p>
                      <p class="text-dark">Browes available help topics</p>
                    </div>
                  </div>
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
        