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
                        <h3 class="step-title info h5">
                          PERSONAL INFORMATION <i class="fa fa-check font-weight-normal text-success"></i>
                        </h3>
                      </div>
                        <div class="checkout-personal-step">
                          <h3 class="step-title text-dark  h5">
                            Addresses.
                          </h3>
                        </div>
                      <div class="content">
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
                                    placeholder="Address line 1"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="firstname"
                                    type="text"
                                    placeholder="Address line 2 (optional)"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="firstname"
                                    type="text"
                                    placeholder="Postcode"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="firstname"
                                    type="text"
                                    placeholder="Town/City"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="firstname"
                                    type="text"
                                    placeholder="Country"
                                  />
                                </div>
                                <div class="form-group row">
                                    <p class="text-dark text-lg"
                                      > Add delivery instructions (optional)
                                    </p>
                                      <p class="text-dark text-sm"
                                        >Do we need additional instructions to find this address?
                                      </p>

                                  <textarea
                                    class="form-control border-2 text-xs"
                                    name="firstname"
                                    type="text"
                                    row="10"
                                    placeholder="Provide details such as building description, a nearby landmark, or other navigation instruction"
                                  ></textarea>
                                </div>
                                <div class="form-group row">
                                      <p class="text-dark text-sm"
                                        >Do we need a security code or a call box number to access this building?
                                      </p>

                                  <input
                                    class="form-control border-b-2 border-t-0 border-l-0 border-r-0"
                                    name="firstname"
                                    type="text"
                                    placeholder="1234"
                                  />
                                </div>
                              </div>
                                            <div class="p-3">
                                            <router-link
                                to="/checkoutpayment"
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
                        </div>
                        <div class="checkout-personal-step p-2">
                          <h3 class="step-title h5">
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
