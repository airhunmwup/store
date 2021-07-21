<template>
  <div class="">
    <!-- main content -->
        <!-- breadcrumb -->

        <!-- main -->
          <div class="container">
            <div class="row">
                <div id="main">
                  <div class="row">
                    <div class="col-md-8 check-info">
                      <div class="checkout-personal-step">
                        <h3 class="step-title text-dark h4 p-2 info">
                          PERSONAL INFORMATION
                        </h3>
                      </div>
                      <div class="content">
                        <ul class="nav nav-inline">
                          <li class="nav-item">
                            <a
                              class="nav-link active underline text-dark font-weight-bold"
                              data-toggle="tab"
                              href="#checkout-guest-form"
                            >
                              ORDER AS A GUEST
                            </a>
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link underline text-dark font-weight-bold"
                              data-toggle="tab"
                              href="#checkout-login-form"
                            >
                              SIGN IN
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content">
                          <div
                            class="tab-pane fade in active show col-md-8 col-lg-8 col-sm-8"
                            id="checkout-guest-form"
                            role="tabpanel"
                          >
                            <form
                              action="#"
                              class="js-customer-form"
                              method="post"
                            >
                              <div>
                                <input
                                  type="hidden"
                                  name="id_customer"
                                  value=""
                                />
                                <div class="form-group row">
                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="firstname"
                                    type="text"
                                    placeholder="Full name"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="email"
                                    type="email"
                                    placeholder="Email"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="phone"
                                    type="number"
                                    placeholder="Phone"
                                  />
                                </div>
                                <div class="desc-password">
                                  <span class="text-dark font-weight-bold"
                                    >Create an account</span
                                  >
                                  <span>(optional)</span>
                                  <br />
                                  <span class="text-muted"
                                    >And save time on your next order!</span
                                  >
                                </div>
                                <div class="form-group row">
                                    <input
                                      class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                      name="password"
                                      type="password"
                                      placeholder=" Password"
                                    />
                                </div>
                                <div class="form-group row check-input">
                                  <p>
                                    <input
                                      class="check"
                                      name="optin"
                                      type="checkbox"
                                      value="1"
                                    />
                                  <span class="text-primary"> Receive offers from our partners</span>
                                  </p>
                                </div>
                                <div class="form-group row"><p>
                                    <input
                                      class="pt-2"
                                      name="newsletter"
                                      type="checkbox"
                                      value="1"
                                    />
                                    <span class="text-primary"
                                      > Sign up for our newsletter
                                      <br />
                                      <em
                                        >You may unsubscribe at any moment. For
                                        that purpose, please find our contact
                                        info in the legal notice.
                                      </em>
                                    </span>
                                    </p>
                                </div>
                              </div>
                                            <div class="p-3">
                                            <router-link
                                to="/checkoutAddress"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Continue"
                              >
                                <button
                                  class="col-lg-12 col-md-12 col-sm-12 btn btn-warning form-control add-to-cart"
                                  data-button-action="add-to-cart"
                                  type="submit"
                                >
                                  Continue
                                </button></router-link
                              >
                                        </div>
                            </form>
                          </div>
                          <div
                            class="tab-pane fade col-md-8 col-lg-8 col-sm-8"
                            id="checkout-login-form"
                            role="tabpanel"
                          >
                            <form
                              id="login-form"
                              action="#"
                              method="post"
                              class="customer-form"
                            >
                              <div>
                                <input type="hidden" name="back" value="" />
                                <div class="form-group row">
                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="email"
                                    type="email"
                                    placeholder="Email"
                                  />
                                </div>
                                <div class="form-group row">
                                    <input
                                      class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                      name="password"
                                      type="password"
                                      placeholder="Password"
                                    />
                                </div>
                                <div class="row p-2">
                                  <div class="forgot-password text-primary underline">
                                    <a
                                      href="user-reset-password.html"
                                      rel="nofollow"
                                    >
                                      Forgot your password?
                                    </a>
                                  </div>
                                </div>
                              </div>
                                            <div class="p-3">
                                            <router-link
                                to="/Checkout"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Home"
                              >
                                <button
                                  class="col-lg-12 col-md-12 col-sm-12 btn btn-warning form-control add-to-cart"
                                  data-button-action="add-to-cart"
                                  type="submit"
                                >
                                  Continue
                                </button></router-link
                              >
                                        </div>
                            </form>
                          </div>
                        </div>
                        <div class="checkout-personal-step p-2">
                          <h3 class="step-title h4">
                             Addresses.
                          </h3>
                        </div>
                        <div class="checkout-personal-step p-2">
                          <h3 class="step-title h4">
                             Payment.
                          </h3>
                        </div>
                      </div>
                    </div>
                                <div class="col-xs-12 col-lg-4">
                                        <div class="border p-3">
                                            
                                        <table class="std">
                                          <tbody>
                                            <tr>
                                              <td colspan="3" >
                                                <div class="text-dark font-weight-bold">
                                                  <a href="product-detail.html"
                                                    >Organic Strawberry Fruits</a
                                                  >
                                                </div>
                                                <div>
                                                  2 x
                                                  <span class="product-price">£28.98</span>
                                                </div>
                                                </td>
                                                <td class="action text-right">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                                </td>
                                            </tr>
                                            <tr>
                                              <td colspan="3" >
                                                <div class="text-dark font-weight-bold">
                                                  <a href="product-detail.html"
                                                    >Organic Strawberry Fruits</a
                                                  >
                                                </div>
                                                <div>
                                                  2 x
                                                  <span class="product-price">£28.98</span>
                                                </div>
                                                </td>
                                                <td class="action text-right">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                                </td>
                                            </tr>
                                            <tr class="total font-weight-bold h5 text-dark">
                                              <td class="p-3" colspan="2">Total:</td>
                                              <td class="p-3" colspan="2">£92.96</td>
                                            </tr>

                                          </tbody>
                                        </table>
                                        </div>
                                </div>
                  </div>
                </div>
            </div>
          </div>
  </div>
</template>
