<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>
      <div class="container justify-content-center content-bottom">

        <span class="p-3 text-xs text-right">Summary is your My REJEE 
          <router-link
            to="/Summary"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="text-primary"
            title="Home Page"
            >homepage</router-link></span>
<div class="dropdown pt-2 d-lg-none text-right h6 d-md-none justify-content-between pl-5">
  <a href="#" class="text-primary  pr-4 underline  dropdown-toggle" data-toggle="dropdown">
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
              <!-- Payment   <button
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
            Information button ends/-->
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
              
        <div class="row">
          <div
            class="
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
                            to="/Resolut center"
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

              <div class="tab-content" id="v-pills-tabContent">

<!--Payments-->
                  
                <div class="row">
                  <span class="text text-dark h5 pl-4 font-weight-normal">
                    <h1 class="title-page">Payments</h1>
                  </span>
                  
                <div class="row pl-4  col-sm-12 col-md-12 col-lg-12 ">
                  <span class="text font-weight-bold text-dark h5 font-weight-normal">
                        Add Payment Option
                  </span>
                    <div class="row container pl-3 col-sm-6 col-md-6 col-lg-3 justify-content-center text-center text-primary">

                    <div class="card col-lg-6 col-sm-6 col-md-6 p-5" style="padding:20px">
                    <button onclick="on()"><i class="fa fa-lg fa-plus"></i></button>
                       <p class="">
                            Add Card Payment Option
                      </p>
                    </div>
                    </div>
                    <div id="overlay">
                    <div id="text" class="col-sm-12 pt-4 col-lg-6  col-md-6">
                <div class="content">
                <div class="d-flex" id="wrapper">
                    <div class="bg-light border-right" id="sidebar-wrapper">
                    <!-- payment Sidebar --> <!-- payment Page Content -->
                        <div class="card">
                                <div class="row justify-content-center">
                    <p class="text-primary text-right pr-3" onclick="off()"><i class="fa fa-close fa-lg"></i></p>
                
                            <span class="text text-center font-weight-bold text-dark h6 font-weight-normal">
                                    Add Card Payment
                            </span>
                                    <div class="col-12">
                            <span class="text p-3 font-weight-bold text-dark h6 font-weight-normal">
                                    Card Info
                            </span>
                                        <div class="form-card p-3">
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" id="" class="form-control" placeholder="Card number" minlength="19" maxlength="19"> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6"> 
                                                        <input type="text" name="exp" id="" class="form-control" placeholder="Expirtion date" minlength="5" maxlength="5">
                                                    </div>
                                                    <div class="col-6"> 
                                                      <input type="password" name="cvcpwd" class="form-control" placeholder="Security code" minlength="3" maxlength="3">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" id="" class="form-control" placeholder="First name" minlength="19" maxlength="19">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" id="" class="form-control" placeholder="Last name" minlength="19" maxlength="19">
                                                    </div>
                                                </div>
                                                <hr>
                                                      
                  <div class="row p-3 col-12">
                  <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 ">
                    <p class="text-dark font-weight-bold">Billing address <span class="popup" onclick="myFunction()"><i class="zmdi zmdi-info-outline"></i>
  <span class="popuptext p-3 text-sm-left" id="myPopup">To change billing address go to address on your REJEE account page and select the billing address associated with your payment card.</span>
</span></p>
                    <p class="text-dark">123 canberra Street, New York, USA</p>
                    <p class="text-dark">New York</p>
                    <p class="text-dark">100010123456789</p>
                    <p class="text-dark">United KingdomS</p>
                    <p class="text-dark">0123456789</p>

                                       
                  </div>
                  </div>
                            
                    
                                                <div class="row p-2 justify-content-end">
                                                   <button type="submit" class="btn border-primary text-primary placeicon">Continue</button>
                                                </div>
                                                    <div class="col-6">
                                                  <span class="text-success p-2"><i class="fa fa-lg fa-lock fa-sm"></i><span class="text-dark"> Secure and private </span></span>
                                            
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
                    <hr>

  
                </div>
                </div>


              </div>
            </div>
          </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        