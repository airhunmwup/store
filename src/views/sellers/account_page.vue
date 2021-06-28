<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>
      <div class="container justify-content-center content-bottom">

        <span class="p-5 text-right">Summary is your My REJEE 
          <router-link
            to="/Summary"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="text-primary"
            title="Home Page"
            >homepage</router-link></span>
        <div class="content sidebar-block">
          <div class="text-base">
            <div class="pt-5 pl-5">
              <span class="font-weight-bold text-dark h3">
                My REJEE</span
              >
              <span class="text-dark text-sm"> UserID (0)</span>
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
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Product Listing"
                            >
                  Advertisement Preferences
                </router-link>
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
        </div>
      </div>

    </div>
              <div class="row pl-4">
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
                  <router-link
                    to="/message"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="pl-3 text-right text-primary underline justify-content-end"
                    title="Performance"
                    ><span class="p-2 text-right text-primary underline justify-content-end">Message (2)</span></router-link>
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
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Product Listing"
                            >
                  Advertisement Preferences
                </router-link>
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
          </div>
          <div class="col-sm-12 col-lg-9 col-md-9 product-container">
            <div id="wrapper-site">

              <div class="col-sm-12 col-lg-12 col-md-12 product-container">
                <div id="wrapper-site">
              <div class="tab-content" id="v-pills-tabContent">

<!--Personal-Information-->
                <div
                  class="tab-pane fade show active"
                  id="v-pills-Personal-Information"
                  role="tabpanel"
                  aria-labelledby="v-pills-Personal-Information-tab"
                >
                  <div id="content" class="page-content border p-3 box">
                    
                        <h1 class="title-page">Personal Information</h1>

        <p class="p-3 justify-content-end text-right">
          <router-link
            to="/seller_dashboard"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-3 justify-content-end"
            title="Account"
            ><span class="p-3 text-primary underline justify-content-end"
              >Edit</span
            ></router-link
          >
        </p>
                <div class="container">
                    <div id="main">
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">Name :</th>
                                        <td>David James</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Address :</th>
                                        <td>123 canberra Street, New York, USA</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">City :</th>
                                        <td>New York</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Postal/Zip Code :</th>
                                        <td>10001</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Phone :</th>
                                        <td>0123456789</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Country:</th>
                                        <td>United Kingdom</td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>

                </div>
                  </div>
                </div>

<!--Sigin-and-security-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Sigin-and-security"
                  role="tabpanel"
                  aria-labelledby="v-pills-Sigin-and-security-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 p-3 font-weight-normal">
                    <h1 class="title-page">Sign in and security</h1>
                  </span>

                    <div id="main">
                            <table class="std table p-3" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">
                                        <p class="p-3 font-weight-bold text-dark">
                                            Password
                                        </p></th>
                                        <td>
                                        <p class="p-3">
                                            Modify your password.
                                        </p></td>
                                        <td>
                                        <p class="p-3 justify-content-end text-right">
                                        <router-link
                                            to="/seller_dashboard"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="justify-content-end"
                                            title="Account"
                                            ><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></router-link
                                        >
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">
                                        <p class="p-3 font-weight-bold text-dark">
                                            Secret questions
                                        </p></th>
                                        <td>
                                        <p class="p-3">
                                            Give yourself another secure way to recover your account.
                                        </p></td>
                                        <td>
                                        <p class="p-3 justify-content-end text-right">
                                        <router-link
                                            to="/seller_dashboard"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="justify-content-end"
                                            title="Account"
                                            ><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></router-link
                                        >
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">
                                        <p class="p-3 font-weight-bold text-dark">
                                            Social accounts
                                        </p></th>
                                        <td>
                                        <p class="p-3">
                                            Link your social account for faster sign in and checkout.
                                        </p>

                            <table class="std table p-3" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="">
                                        <p class="p-3 font-weight-bold text-dark">
                                            Google
                                        </p></th>
                                        <td>
                                        <p class="p-3">
                                            Unlinked
                                        </p>
                                        <p class="justify-content-end text-right">
                                        <router-link
                                            to="/seller_dashboard"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="justify-content-end"
                                            title="Account"
                                            ><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></router-link
                                        >
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">
                                        <p class="p-3 font-weight-bold text-dark">
                                            Facebook
                                        </p></th>
                                        <td>
                                        <p class="p-3">
                                            Unlinked
                                        </p>
                                        <p class="justify-content-end text-right">
                                        <router-link
                                            to="/seller_dashboard"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="justify-content-end"
                                            title="Account"
                                            ><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></router-link
                                        >
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">
                                        <p class="p-3 font-weight-bold text-dark">
                                            Apple
                                        </p></th>
                                        <td>
                                        <p class="p-3">
                                            Unlinked
                                        </p>
                                        <p class="justify-content-end text-right">
                                        <router-link
                                            to="/seller_dashboard"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="justify-content-end"
                                            title="Account"
                                            ><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></router-link
                                        >
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                </div>

<!--Addresses-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Addresses"
                  role="tabpanel"
                  aria-labelledby="v-pills-Addresses-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 p-3 font-weight-normal">
                    <h1 class="title-page">Addresses</h1>
                  </span>
                <div class="col-12 row col-sm-12 col-md-12 col-lg-12 ">

                    <div id="main">
                            <table class="std table p-3" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="">
                                        <p class="font-weight-bold text-dark">
                                            Registration address, email and phone number
                                        </p>
                                        <p class="text-gray-400">
                                            Your main contact address. It's important to keep it up to date and accurate.
                                        </p>
                                        </th>
                                        <td>
                                        <p class="justify-content-end p-3 text-right">
                                        <router-link
                                            to="/seller_dashboard"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="justify-content-end"
                                            title="Account"
                                            ><span class="text-primary btn border border-primary justify-content-end"
                                            >Edit</span
                                            ></router-link
                                        >
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">
                                        <p class="font-weight-bold text-dark">
                                            Shipping address
                                        </p>
                                        <p class="text-gray-400">
                                            Your main shipping address for purchases. This is where you'd like to receive items you purchase.
                                        </p>
                                        </th>
                                        <td>
                                        <p class="justify-content-end p-3 text-right">
                                        <router-link
                                            to="/seller_dashboard"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="justify-content-end"
                                            title="Account"
                                            ><span class="text-primary btn border border-primary justify-content-end"
                                            >Edit</span
                                            ></router-link
                                        >
                                        </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">
                                        <p class="font-weight-bold text-dark">
                                            Ship from address
                                        </p>
                                        <p class="text-gray-400">
                                            Your main address where you ship packages from.
                                        </p>
                                        </th>
                                        <td>
                                        <p class="justify-content-end p-3 text-right">
                                        <router-link
                                            to="/seller_dashboard"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="justify-content-end"
                                            title="Account"
                                            ><span class="text-primary btn border border-primary justify-content-end"
                                            >Add</span
                                            ></router-link
                                        >
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                </div>
                </div>

<!--Payments-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Payments"
                  role="tabpanel"
                  aria-labelledby="v-pills-Payments-tab"
                >
                  
                <div class="row">
                  <span class="text text-dark h5 p-2 font-weight-normal">
                    <h1 class="title-page">Payments</h1>
                  </span>
                  
                <div class="row col-sm-12 col-md-12 col-lg-12 ">
                  <span class="text font-weight-bold text-dark h5 font-weight-normal">
                        Add Payment Option
                  </span>
                    <div class="container pl-3 col-sm-6 col-md-6 col-lg-3 justify-content-center text-center text-primary">

                    <div class="card col-6 p-5" style="padding:20px">
                    <button onclick="on()"><i class="fa fa-lg fa-plus"></i></button>
                       <p class="">
                            Add Card Payment Option
                      </p>
                    </div>
                    </div>
                    <div id="overlay">
                    <div id="text" class="">
                <div class="container row">
                <div class="content card">
                    <p class="text-primary text-right" onclick="off()"><i class="fa fa-close fa-lg"></i></p>
                <div class="d-flex" id="wrapper">
                    <!-- payment Sidebar -->
                    <div class="bg-light border-right" id="sidebar-wrapper">
                        <div class="list-group list-group-flush"> 
                            <a data-toggle="tab" href="#menu1" id="tab1" class="tabs list-group-item active1">
                                <div class="list-div text-primary my-2">
                                    <div class="fa fa-credit-card"></div> &nbsp;&nbsp; Card
                                </div>
                            </a> <a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-paypal"></div> &nbsp;&nbsp;&nbsp; Paypal <span id="new-label">NEW</span>
                                </div>
                            </a> </div>
                    </div> <!-- payment Page Content -->
                    <div id="page-content-wrapper">
                        <div class="row justify-content-center">
                            <div class="text-center">
                            <span class="text font-weight-bold text-dark h6 font-weight-normal">
                                    Add Payment Option
                            </span>
                            </div>
                        </div>
                        <div class="tab-content col-12">
                            <div id="menu1" class="tab-pane in active">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card col-12">
                                            <h3 class="mt-0 mb-4 text-center">Enter your card details</h3>
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="cr_no" placeholder="Names as shown on Card" minlength="19" maxlength="19"> <label>NAME</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="cr_no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19"> <label>CARD NUMBER</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5"> <label>CARD EXPIRY</label> </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="password" name="cvcpwd" placeholder="" class="placeicon" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12"> <input type="submit" value="SAVE" class="btn btn-success text-light placeicon"> </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane">
                                <div class="row">
                                    <div class="col-11">
                                        <div class="form-card col-12 justify-content-center">
                                            <h3 class="mt-0 mb-4 p-3 font-weight-bold text-center">Enter your Paypal details</h3>
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="bk_nm" placeholder="Email address"> <label>Paypal Account</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12"> <input type="submit" value="SAVE" class="btn btn-success text-light placeicon"> </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


                </div>

                    </div>
                    </div>
                    <hr>

  
                </div>
                </div>
                </div>
<!--Paypal-Account-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Paypal-Account"
                  role="tabpanel"
                  aria-labelledby="v-pills-Paypal-Account-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 p-2 font-weight-normal">
                    <h1 class="title-page">Paypal Account</h1>
                  <hr>
                  </span>
                </div>
                </div>

<!--Communication-Preferences-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Communication-Preferences"
                  role="tabpanel"
                  aria-labelledby="v-pills-Communication-Preferences"
                >
                <div class="row">
                  <span class="text text-dark h5 p-3 font-weight-normal">
                    <h1 class="title-page">Communication Preferences</h1>
                  </span>

                    <div id="main">
                            <table class="p-3 std table" id="block-history">
                                <tbody class="border-0">
                                    <tr>
                                        <th class="first_item">
                                        <p class="font-weight-bold text-dark">
                                           Delivery <br>Options
                                        </p></th>
                                        <td>    
                                        <p class="font-weight-bold text-dark">     
                                        Notification Delivery Format
                                        </p>
                                        <p class="">                 
                                        Choose how you want notifications delivered to you.
                                        </p></td>
                                        <td>
                                        <p class="p-3 justify-content-end text-right">

                            <a class="cateItem justify-content-end" 
                              data-toggle="collapse"
                              data-target="#Delivery" href="#"><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></a>
                                        
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                              class="subCategory collapse"
                              id="Delivery"
                              aria-expanded="true"
                              role="status"
                            >
                                    <div class="content pl-4">
                                        <p class="p-2">
                                            Email Format
                                        </p>
                                            <form>     
                                        <p class="p-2 text-dark">
                                        <span class="pr-3"><input type="radio" id="html" name="fav_language" value="HTML"> Include graphics</span> 
                                        <span><input type="radio" id="css" name="fav_language" value="CSS"> Text-only</span>
                                        </p>
                                            </form>
                                    </div>

                                <hr>
                            </div>


                            <table class="p-3 std table" id="block-history">
                                <tbody class="border-0">
                                    <tr>
                                        <th class="first_item">
                                        <p class="pr-3 font-weight-bold text-dark">
                                           Marketing<br> Communications
                                        </p></th>
                                        <td>  
                                        <p class="font-weight-bold text-dark">    
                                        Subscriptions
                                        </p> 
                                        <p class="">    
                                        Edit your marketing communication preferences
                                        </p></td>
                                        <td>
                                        <p class="p-3 justify-content-end text-right">

                            <a class="cateItem justify-content-end" 
                              data-toggle="collapse"
                              data-target="#sort" href="#"><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></a>
                                        
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                              class="subCategory collapse"
                              id="sort"
                              aria-expanded="true"
                              role="status"
                            >
                                
                                    <div class="content p-3 pl-4">
                                        <form>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="html" name="fav_language" value="HTML"></span>
                                         <span class="p-2">REJEE surveys and research
                                        Send me invitations to participate in occasional research such as surveys and focus groups to share feedback on my REJEE experience.
                                         </span>
                                        </p>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="html" name="fav_language" value="HTML"></span>
                                         <span class="p-2">
                                        General email promotions
                                        Send me emails about what's new and hot on REJEE, great deals, special events, discount coupons and other special offers.
                                         </span>
                                        </p>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="html" name="fav_language" value="HTML"></span>
                                         <span class="p-2">
                                        Seller email promotions
                                        Send me emails about seller specials like fee and listing discounts, selling tips and other ways to get started selling or get more from selling on REJEE
                                         </span>
                                        </p>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="html" name="fav_language" value="HTML"></span>
                                         <span class="p-2">
                                        Postal mail catalogs and promotions
                                        Send me postal mail catalogs, coupons, seller hotlists, holiday sales planners and newsletters. (If you're a seller, clearing this box means you may not receive some news, information, and invitations designed to help your sales on REJEE.)
                                         </span>
                                        </p>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="html" name="fav_language" value="HTML"></span>
                                         <span class="p-2">
                                        Phone updates and promotions
                                        Call me about REJEE programs like seller specials and other special events and opportunities. (If you're a seller, clearing this box means you may not receive some news, information, and invitations designed to help your sales on REJEE.)
                                         </span>
                                        </p>
                                        <span class="p-3 "><button class="btn border" type="">Cancel</button></span>
                                        <span class="p-3 "><button class="btn border border-primary text-primary" type="">Save</button></span>
                                        </form>
                                    </div>
                                <hr>
                            </div>
                    </div>
                </div>
                </div>
<!--Saved Seller-->
                <div
                  class="tab-pane fade"
                  id="v-pills-1Advertisement-Preferences"
                  role="tabpanel"
                  aria-labelledby="v-pills-1Advertisement-Preferences-tab"
                >
                  -------Saved-Seller
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
        