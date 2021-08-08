<template>
  <!-- main content -->
  <div>
              <div class="row box pl-3">
                <div class="container pl-2">
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
<div class="dropdown p-2 d-lg-none h6 d-md-none justify-content-between">
  <a href="#" class="text-primary underline  dropdown-toggle" data-toggle="dropdown">
    Menu
  </a>
  <div class="dropdown-menu">
              
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


<!--Communication-Preferences-->
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

                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                              class="subCategory "
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
                                        
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                              class="subCategory"
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
                                        <div class="pt-5">
                                        <span class="p-3 "><button class="btn border" type="">Cancel</button></span>
                                        <span class="p-3 "><button class="btn border border-primary text-primary" type="">Save</button></span>
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

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        