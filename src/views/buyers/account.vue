<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="container text-xs justify-content-center content-bottom">

        <span class="p-3 text-right">Summary is your My REJEE 
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
                  Account
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
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/buyeraddresssetting"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Addresses"
                            >
                  Addresses
                </router-link>
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
                <router-link
                  class="text-left text-primary pl-4 text-xs pb-2  font-weight-bold"
                            to="/paymentsetting"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Product Listing"
                            >
                             Payment  
                </router-link>
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


<!--Sigin-and-security-->
                <div class="row">
                  <span class="text text-dark h5 pl-4 font-weight-normal">
                    <h1 class="title-page">Sign in and security</h1>
                  </span>

<!--Password modify-->
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
                                        
                            <a class="cateItem justify-content-end" 
                              data-toggle="collapse"
                              data-target="#passwordmodify" href="#"><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></a>
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div
                              class="subCategory collapse justify-content-center"
                              id="passwordmodify"
                              aria-expanded="true"
                              role="status"
                            >
                                    
                  <div class="register-form pl-5">
                    <p class="text-dark">Create a password or modify your existing one.</p>
                    <form
                      action="#"
                      id="#"
                      class="col-lg-6"
                      method="post"
                    >
                      <div>
                        <div class="pt-3 form-group">
                              <input
                                class="col-6 text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="Current password"
                                type="password"
                                placeholder="Current password"
                              />
                        </div>
                        <div class="pt-3 form-group">
                              <input
                                class="col-6 text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="password"
                                type="password"
                                placeholder="New password"
                              />
                        </div>
                        <div class="form-group">
                              <input
                                class="col-6 text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="password"
                                type="password"
                                placeholder="Reenter new password"
                              />
                        </div>
                      </div>
                      <div class="form-group row">
                        <span class="custom-checkbox d-inline-flex check-input">
                          <input
                            class="check"
                            name="newsletter"
                            type="checkbox"
                            value="1"
                            checked
                            disabled
                          />
                          <label class="pl-2 text-sm label-absolute"
                            > Password must be not less than 10 words</label
                          >
                        </span>
                      </div>
                      <div class="clearfix row pb-3 ">
                          <span class="col-6"><button
                      class="form-control"
                      data-link-action="sign-in"
                      type="submit"
                          >
                            Cancel
                          </button></span>
                          <span class="col-6"><button
                      class="btn border-primary text-primary form-control"
                      data-link-action="sign-in"
                      type="submit"
                          >
                            SAVE
                          </button></span>
                      </div>
                    </form>
                  </div>

                                <hr>
                            </div>
<!--Security question -->
                            <table class="std table p-3" id="block-history">
                                <tbody>
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
                                        
                            <a class="cateItem justify-content-end" 
                              data-toggle="collapse"
                              data-target="#securityquestion" href="#"><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></a>
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                              class="subCategory collapse justify-content-center"
                              id="securityquestion"
                              aria-expanded="true"
                              role="status"
                            >
                                    
                  <div class="register-form pl-5">
                    <p class="text-dark font-weight-bold">
                      PICK YOUR SECRET QUESTIONS
                    </p>
                    <p class="text-dark">
Give yourself another secure way to recover your account in case your information becomes outdated.</p>
                    <form
                      action="#"
                      id="#"
                      class="col-lg-6"
                      method="post"
                    >
                      <div>
                        <div class="form-group">
                    <p class="text-dark pt-3 font-weight-bold">Question 1</p>
                        </div>
                        <div class="form-group">
                              <select
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="Question_1"
                                type="text"
                              >
                              <option>Select an option</option>
                              <option value="First Company you worked for?">First Company you worked for?</option>
                              <option value="First Concert you attended?">First Concert you attended?</option>
                              <option value="Name of your first pet?">Name of your first pet?</option>
                              <option value="First foreign country you visited?">First foreign country you visited?</option>
                              <option value="Model of your first car?">Model of your first car?</option>
                              <option value="Your childhood nickname?">Your childhood nickname?</option>
                              <option value="Name of the street you grew up on?">Name of the street you grew up on?</option>
                              <option value="First snd last name of your best friend?">First snd last name of your best friend?</option>
                              <option value="Name of favorite book?">Name of favorite book?</option>
                              <option value="Mothers maiden name?">Mothers maiden name?</option>
                              </select>
                        </div>
                        <div class="pt-3 form-group">
                              <input
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="answer_1"
                                type="text"
                                placeholder="Answer"
                              />
                        </div>
                        <div class="form-group">
                    <p class="text-dark pt-3 font-weight-bold">Question 2</p>
                        </div>
                        <div class="form-group">
                              <select
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="Question_1"
                                type="text"
                              >
                              <option>Select an option</option>
                              <option value="First Company you worked for?">First Company you worked for?</option>
                              <option value="First Concert you attended?">First Concert you attended?</option>
                              <option value="Name of your first pet?">Name of your first pet?</option>
                              <option value="First foreign country you visited?">First foreign country you visited?</option>
                              <option value="Model of your first car?">Model of your first car?</option>
                              <option value="Your childhood nickname?">Your childhood nickname?</option>
                              <option value="Name of the street you grew up on?">Name of the street you grew up on?</option>
                              <option value="First snd last name of your best friend?">First snd last name of your best friend?</option>
                              <option value="Name of favorite book?">Name of favorite book?</option>
                              <option value="Mothers maiden name?">Mothers maiden name?</option>
                              </select>
                        </div>
                        <div class="pt-3 form-group">
                              <input
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="answer_2"
                                type="text"
                                placeholder="Answer"
                              />
                        </div>
                        <div class="form-group">
                    <p class="text-dark pt-3 font-weight-bold">Question 3</p>
                        </div>
                        <div class="form-group">
                              <select
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="Question_1"
                                type="text"
                              >
                              <option>Select an option</option>
                              <option value="First Company you worked for?">First Company you worked for?</option>
                              <option value="First Concert you attended?">First Concert you attended?</option>
                              <option value="Name of your first pet?">Name of your first pet?</option>
                              <option value="First foreign country you visited?">First foreign country you visited?</option>
                              <option value="Model of your first car?">Model of your first car?</option>
                              <option value="Your childhood nickname?">Your childhood nickname?</option>
                              <option value="Name of the street you grew up on?">Name of the street you grew up on?</option>
                              <option value="First snd last name of your best friend?">First snd last name of your best friend?</option>
                              <option value="Name of favorite book?">Name of favorite book?</option>
                              <option value="Mothers maiden name?">Mothers maiden name?</option>
                              </select>
                        </div>
                        <div class="pt-3 form-group">
                              <input
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="answer_3"
                                type="text"
                                placeholder="Answer"
                              />
                        </div>
                      </div>
                      <div class="clearfix row pb-3 ">
                          <span class="col-6"><button
                      class="form-control"
                      data-link-action="sign-in"
                      type="submit"
                          >
                            Cancel
                          </button></span>
                          <span class="col-6"><button
                      class="btn border-primary text-primary form-control"
                      data-link-action="sign-in"
                      type="submit"
                          >
                            Confirm
                          </button></span>
                      </div>
                    </form>
                  </div>

                                <hr>
                            </div>
<!--Social accounts-->
                            <table class="std table p-3" id="block-history">
                                <tbody>
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
                                </tbody>
                            </table>
                            <table class="std table p-3" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="">
                                        <p class="p-3 font-weight-bold text-dark">
                                            Facebook
                                        </p></th>
                                        <td>
                                        <p class="p-3">
                                            Unlinked
                                        </p>
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
                                </tbody>
                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                </div>

              </div>
            </div>
          </div>
          <!-- end col-md-9-1 -->
        </div>
  </div>
</template>
        