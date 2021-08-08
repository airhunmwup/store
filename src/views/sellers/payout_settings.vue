<template>
  <!-- main content -->
  <div>
              <div class="row box pl-4">
                <div class="container pl-3">
                  <div class="content text-dark p-2 border-b-2 font-weight-bold col-12  pl-2">
                  <router-link
                    to="/Overview"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Overview"
                    ><span>Overview</span></router-link
                  >
                  <router-link
                    to="/Orders"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="p-2"
                    title="Orders"
                    ><span>Orders</span></router-link>
                  <router-link
                    to="/Listing"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="listing"
                    ><span>Listing</span></router-link>
                  <router-link
                    to="/Account Page"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="border-primary border-b-4 p-2"
                    title="Account"
                    ><span class="text-primary">Account</span></router-link>
                  </div>
                </div>

              </div>

<div class="dropdown pt-2 d-lg-none h6 d-md-none justify-content-between pl-5">
  <a href="#" class="text-primary underline  dropdown-toggle" data-toggle="dropdown">
    Menu
  </a>
  <div class="dropdown-menu">
              <div
                class="text-sm block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
            <!-- primary info buttons -->
                <button
                  class="text-left h6 font-weight-bold text-dark p-2 active"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="fa fa-xl fa-user pr-2"></i>Personal Info
                </button>
                <button
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                  id="v-pills-Personal-Information-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Personal-Information"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Personal-Information"
                  aria-selected="false"
                >
                  Personal Information
                </button>
                <button
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                  id="v-pills-Sigin-and-security-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Sigin-and-security"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Sigin-and-security"
                  aria-selected="false"
                >
                  Sign in and security
                </button>
                <button
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                  id="v-pills-Addresses-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Addresses"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Addresses"
                  aria-selected="false"
                >
                  Addresses
                </button>
            <!-- primary info buttons ends/-->

            <!-- Payment Information button/-->
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="zmdi zmdi-balance-wallet h4 pr-2"></i> Payment Info
                </button>
                <button
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                  id="v-pills-Payments-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Payments"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Payments"
                  aria-selected="false"
                >
                  Payments
                </button>
                <button
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                  id="v-pills-Paypal-Account-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Paypal-Account"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Paypal-Account"
                  aria-selected="true"
                >
                  Paypal Account
                </button>
            <!-- Payment Information button ends/-->
            <!-- Account preferences/-->
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="zmdi zmdi-settings h4 pr-2"></i> Account preferences
                </button>
                <button
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                  id="v-pills-Communication-Preferences-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Communication-Preferences"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Communication-Preferences"
                  aria-selected="true"
                >
                  Communication Preferences
                </button>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Product Listing"
                            >
                  Close account
                </router-link>
            <!-- Account preferences Ends/-->
            <!-- Selling/-->
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="fa fa-tag fa-2x h4 pr-2"></i> Selling
                </button>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Overview"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Seller dashboard"
                            >
                Seller Dashboard
                </router-link>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Subscription"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Subscription"
                            >
                  Subscriptions
                </router-link>
            <!-- Selling Ends/-->
            <!-- Resolution center/-->
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="fa fa-commenting-o fa-2x pr-2"></i> Resolution center
                </button>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Resolution center"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Resolution center"
                            >
                  Resolution Center
                </router-link>
            <!-- Resolution center End/-->
              </div>
  </div>
</div>
        <div class="row">
          <div
            class="pl-4
              sidebar-3 
              col-lg-3 col-md-3
              d-xs-none
              pt-3
              font-weight-bold
            "
          >
            <div class="sidebar-block text-dark">
              <div class="block-content">
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
            <!-- primary info buttons -->
                <div
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="fa fa-xl fa-user pr-2"></i>Account Info
                </div>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Account Page"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Store information"
                            >
                  Store Information
                </router-link>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/siginsec"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Sign in and security"
                            >
                  Sign in and security
                </router-link>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/addresssetting"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Addresses"
                            >
                  Addresses
                </router-link>
            <!-- primary info buttons ends/-->

            <!-- Payment Information button/-->
                <div
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="zmdi zmdi-balance-wallet h4 pr-2"></i> Payments
                </div>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/payoutsettings"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Payment Information"
                            >
                  Payment Info
                </router-link>
                <div
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="zmdi zmdi-settings h4 pr-2"></i> Account preferences
                </div>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/communicationsettings"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Communication Preferences"
                            >
                  Communication Preferences
                </router-link>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Close account"
                            >
                  Close account
                </router-link>
            <!-- Account preferences Ends/-->
            <!-- Selling/-->
                <div
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="fa fa-tag fa-2x h4 pr-2"></i> Selling
                </div>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Overview"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="seller dashboard"
                            >
                Seller Dashboard
                </router-link>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Subscription"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Subscription"
                            >
                  Subscriptions
                </router-link>
            <!-- Selling Ends/-->
            <!-- Resolution center/-->
                <div
                  class="text-left  font-weight-bold text-dark p-2"
                  data-bs-toggle="pill"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  <i class="fa fa-commenting-o fa-2x pr-2"></i> Resolution center
                </div>
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Resolution center"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Resolution center"
                            >
                  Resolution Center
                </router-link>
            <!-- Resolution center End/-->
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-9 col-md-9 product-container">
            <div id="wrapper-site">

              <div class="col-sm-12 col-lg-12 col-md-12 product-container">
                <div id="wrapper-site">
              <div class="tab-content" id="v-pills-tabContent">

<!--Payments-->
                  
                <div class="row">
                    <p class="h4 p-3 text-dark">Payment settings</p>
                  
                    <ul class="nav nav-tabs">
                      <li class="active text-dark h6 p-2 "><a data-toggle="tab" href="#home">Payout Account</a></li>
                      <li class="text-dark h6 p-2 "><a data-toggle="tab" href="#menu1">Preference</a></li>
                    </ul>

                    <div id="overlay">
                    </div>
                    <hr>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active show">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
  
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>

              <div class="d-flex align-items-start p-5"></div>
          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        