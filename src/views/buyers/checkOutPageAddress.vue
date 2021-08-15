<template>
  <div class="container">
    <!-- main content -->
        <!-- breadcrumb -->

        <!-- main -->
  <div class="row p-3">
    <div class="col-12">
     <p class="text-dark h4">Select a delivery address</p>
    </div>
    <div class="col-12">
     <p class="text-dark">Is the address you'd like to use displayed below? If so, click the corresponding "Deliver to this address" button. Or you can <a href="" class="text-primary underline">enter a new delivery address. </a></p>
    </div>
    <hr>

<div class="row p-3">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-dark h6">John Maxwell</h5>
        <p class="card-text text-dark">Address line 1</p>
        <p class="card-text text-dark">Address line 2</p>
        <p class="card-text text-dark">City, Postcode</p>
        <p class="card-text text-dark">Country</p>
      </div>
<p class="p-2"><button type="button" class="btn btn-sm btn-warning btn-block">Deliver to this address</button></p>
<p class="p-2"><button type="button" class="col-6 border btn-sm pr-3 btn btn-light">Edit</button> <button type="button" class="col-6 btn-sm border btn btn-light">Delete</button></p>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-dark h6">John Maxwell</h5>
        <p class="card-text text-dark">Address line 1</p>
        <p class="card-text text-dark">Address line 2</p>
        <p class="card-text text-dark">City, Postcode</p>
        <p class="card-text text-dark">Country</p>
      </div>
<p class="p-2"><button type="button" class="btn btn-sm btn-warning btn-block">Deliver to this address</button></p>
<p class="p-2"><button type="button" class="col-6 border btn-sm pr-3 btn btn-light">Edit</button> <button type="button" class="col-6 btn-sm border btn btn-light">Delete</button></p>
    </div>
  </div>
</div>
<hr>
  </div>
                  <div class="row">
                    <div class="col-md-8 check-info">
                        <div class="checkout-personal-step">
                          <h3 class="step-title text-dark  h5">
                            Add a new address
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
                                <div class="form-group row">
                                  <input
                                    class="form-control border"
                                    name="fullname"
                                    type="text"
                                    placeholder="Full name"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border"
                                    name="fullname"
                                    type="text"
                                    placeholder="Phone number"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border"
                                    name="firstname"
                                    type="text"
                                    placeholder="Address line 1"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border"
                                    name="firstname"
                                    type="text"
                                    placeholder="Address line 2 (optional)"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border"
                                    name="firstname"
                                    type="text"
                                    placeholder="Postcode"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border"
                                    name="firstname"
                                    type="text"
                                    placeholder="Town/City"
                                  />
                                </div>
                                <div class="form-group row">
                                  <input
                                    class="form-control border"
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
                                    class="form-control"
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
                                  Use this address
                                </button></router-link
                              >
                                        </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  </div>
</template>
