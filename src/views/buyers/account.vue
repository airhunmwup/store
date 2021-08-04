<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>
      <div class="container justify-content-center content-bottom">

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
        <div class="content sidebar-block">
          <div class="text-base">
            <div class="pt-2 pl-5">
              <span class="font-weight-bold text-dark h3">
                My REJEE</span
              >
              <span class="text-dark text-sm"> UserID (0)</span>
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
                                        <p class="p-3 justify-content-end text-right">
                                        
                            <a class="cateItem justify-content-end  border btn border-primary" 
                              data-toggle="collapse"
                              data-target="#editaddress" href="#"><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></a>
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                              class="subCategory collapse justify-content-center"
                              id="editaddress"
                              aria-expanded="true"
                              role="status"
                            >
                                    
                  <div class="register-form pl-5">
                    <p class="text-dark font-weight-bold">
                      Add Contact address
                    </p>
                    <form
                      action="#"
                      id="#"
                      class="col-lg-8"
                      method="post"
                    >
                      <div>
                        <div class="pt-3 form-group">
                    <p class="text-dark font-weight-bold">Email</p>
                              <input
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="answer_3"
                                type="email"
                                placeholder="Email address"
                              />
                        </div>
                        <div class="pt-3 form-group">
                    <p class="text-dark font-weight-bold">Phone</p>
                              <input
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                name="answer_3"
                                type="tel"
                                placeholder="Phone number"
                              />
                        </div>
                        <div class="pt-3 form-group">
                    <p class="text-dark font-weight-bold">Address</p>
                              <input
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="answer_1"
                                type="text"
                                placeholder="Address line 1"
                              />
                        </div>
                        <div class="pt-2 form-group">
                              <input
                                class="text-sm
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="answer_2"
                                type="text"
                                placeholder="Address line 2"
                              />
                        </div>
                        <div class="pt-3 form-group">
                    <p class="text-dark font-weight-bold">Postcode</p>
                              <input
                                class="text-sm
                                  form-control
                                  js-child-focus col-4 js-visible-password
                                "
                                name="answer_3"
                                type="text"
                                pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" 
                                placeholder="Postcode"
                              />
                        </div>
                        <div class="pt-3 form-group">
                    <p class="text-dark font-weight-bold">City</p>
                              <input
                                class="text-sm 
                                  form-control
                                  js-child-focus js-visible-password
                                "
                                name="answer_3"
                                type="text"
                                placeholder="City"
                              />
                        </div>
                        <div class="pt-3 form-group">
                    <p class="text-dark font-weight-bold">State</p>
                              <input
                                class="text-sm
                                  form-control 
                                  js-child-focus js-visible-password
                                "
                                name="answer_3"
                                type="text"
                                placeholder="State"
                              />
                        </div>
                        <div class="pt-3 form-group">
                    <p class="text-dark font-weight-bold">Country</p>
                              <select id="country" name="country" class="form-control">
                <option value="United Kingdom">United Kingdom</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
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
                            Save
                          </button></span>
                      </div>
                    </form>
                  </div>

                                <hr>
                            </div>
                            <table class="std table p-3" id="block-history">
                                <tbody>
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
                                        <p class="p-3 justify-content-end text-right">
                                        
                            <a class="cateItem justify-content-end  border btn border-primary" 
                              data-toggle="collapse"
                              data-target="#shippingaddress" href="#"><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></a>
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                              class="subCategory collapse justify-content-center"
                              id="shippingaddress"
                              aria-expanded="true"
                              role="status"
                            >
                        <form>            
                  <div class="register-form pl-5 card">
                  <div class="row p-3 col-12">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
                    <p class="pt-4"><input type="radio" id="" name="" value="" /></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 ">
                    <p class="text-dark font-weight-bold">David James</p>
                    <p class="text-dark">123 canberra Street, New York, USA</p>
                    <p class="text-dark">New York</p>
                    <p class="text-dark">100010123456789</p>
                    <p class="text-dark">United KingdomS</p>
                    <p class="text-dark">0123456789</p>

                  </div>
                  </div>
                    
                  </div>
                              
                  <div class="register-form pl-5 card">
                  <div class="row p-3 col-12">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
                    <p class="pt-4"><input type="radio" id="" name="" value="" /></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 ">
                    <p class="text-dark font-weight-bold">David James</p>
                    <p class="text-dark">123 canberra Street, New York, USA</p>
                    <p class="text-dark">New York</p>
                    <p class="text-dark">100010123456789</p>
                    <p class="text-dark">United KingdomS</p>
                    <p class="text-dark">0123456789</p>

                  </div>
                  </div>
                  </div>
                        </form>

                                <hr>
                            </div>
                            <table class="std table p-3" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="">
                                        <p class="font-weight-bold text-dark">
                                            Billing address
                                        </p>
                                        <p class="text-gray-400">
                                            Your main Billing address for payment. This is the address associated with your card.
                                        </p>
                                        </th>
                                        <td>
                                        <p class="p-3 justify-content-end text-right">
                                        
                            <a class="cateItem justify-content-end  border btn border-primary" 
                              data-toggle="collapse"
                              data-target="#billingaddress" href="#"><span class="text-primary underline justify-content-end"
                                            >Edit</span
                                            ></a>
                                        </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                              class="subCategory collapse justify-content-center"
                              id="billingaddress"
                              aria-expanded="true"
                              role="status"
                            >
                        <form>            
                  <div class="register-form pl-5 card">
                  <div class="row p-3 col-12">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
                    <p class="pt-4"><input type="radio" id="" name="" value="" /></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 ">
                    <p class="text-dark font-weight-bold">David James</p>
                    <p class="text-dark">123 canberra Street, New York, USA</p>
                    <p class="text-dark">New York</p>
                    <p class="text-dark">100010123456789</p>
                    <p class="text-dark">United KingdomS</p>
                    <p class="text-dark">0123456789</p>

                  </div>
                  </div>
                    
                  </div>
                              
                  <div class="register-form pl-5 card">
                  <div class="row p-3 col-12">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
                    <p class="pt-4"><input type="radio" id="" name="" value="" /></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 ">
                    <p class="text-dark font-weight-bold">David James</p>
                    <p class="text-dark">123 canberra Street, New York, USA</p>
                    <p class="text-dark">New York</p>
                    <p class="text-dark">100010123456789</p>
                    <p class="text-dark">United KingdomS</p>
                    <p class="text-dark">0123456789</p>

                  </div>
                  </div>
                    
                  </div>
                        </form>

                                <hr>
                            </div>
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
                                        <p class="p-2 text-dark font-weight-bold">
                                            Email Format
                                        </p>
                                            <form>     
                                        <p class="p-2 text-dark">
                                        <span class="pr-3"><input type="radio" id="" name="Email_Format" value=""> Include graphics</span> 
                                        <span><input type="radio" id="" name="Email_Format" value=""> Text-only</span>
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
                                        <span><input type="checkbox" id="" name="" value=""></span>
                                         <span class="p-2">REJEE surveys and research
                                        Send me invitations to participate in occasional research such as surveys and focus groups to share feedback on my REJEE experience.
                                         </span>
                                        </p>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="" name="" value=""></span>
                                         <span class="p-2">
                                        General email promotions
                                        Send me emails about what's new and hot on REJEE, great deals, special events, discount coupons and other special offers.
                                         </span>
                                        </p>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="" name="" value=""></span>
                                         <span class="p-2">
                                        Seller email promotions
                                        Send me emails about seller specials like fee and listing discounts, selling tips and other ways to get started selling or get more from selling on REJEE
                                         </span>
                                        </p>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="" name="" value=""></span>
                                         <span class="p-2">
                                        Postal mail catalogs and promotions
                                        Send me postal mail catalogs, coupons, seller hotlists, holiday sales planners and newsletters. (If you're a seller, clearing this box means you may not receive some news, information, and invitations designed to help your sales on REJEE.)
                                         </span>
                                        </p>
                                        <p class="p-2 text-dark">
                                        <span><input type="checkbox" id="" name="" value=""></span>
                                         <span class="p-2">
                                        Phone updates and promotions
                                        Call me about REJEE programs like seller specials and other special events and opportunities. (If you're a seller, clearing this box means you may not receive some news, information, and invitations designed to help your sales on REJEE.)
                                         </span>
                                        </p>
                                        <span class="p-3 "><button class="btn border" type="">Cancel</button></span>
                                        <span class="p-3 "><button class="btn border border-primary text-primary" type="submit">Save</button></span>
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
        