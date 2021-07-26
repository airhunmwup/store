<template>
  <div class="">
    <!-- main content -->
    <!-- breadcrumb -->

    <!-- main -->
    <div class="container">
      <div id="main">
        <div class="row">
          <div class="col-md-8 check-info">
            <div class="checkout-personal-step">
              <h3 class="step-title info h5">
                PERSONAL INFORMATION
                <i class="fa fa-check font-weight-normal text-success"></i>
              </h3>
            </div>
            <div class="checkout-personal-step">
              <h3 class="step-title h5">
                Shipping Addresse.
                <i class="fa fa-check font-weight-normal text-success"></i>
              </h3>
            </div>
            <div class="checkout-personal-step text-dark h5">
              <h3 class="step-title h4">Payment.</h3>
            </div>
            <div class="content">
              <div class="tab-content row">
                <div
                  class="
                    tab-pane
                    fade
                    in
                    active
                    show
                    col-md-8 col-lg-8 col-sm-8
                  "
                  id="checkout-guest-form"
                  role="tabpanel"
                >
                  <form action="#" class="js-customer-form" method="post">
                    <div class="row pt-4">
                      <p class="text-dark text-sm">Billing address</p>
                      <div class="form-group">
                        <input
                          class="
                            form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="firstname"
                          type="text"
                          placeholder="Address"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          class="
                            form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="postcode"
                          type="text"
                          placeholder="Postcode"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          class="
                            form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="state/city"
                          type="text"
                          placeholder="State/City"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          class="
                            form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="country"
                          type="text"
                          placeholder="Country"
                        />
                      </div>
                      <p class="text-dark text-sm">Name</p>
                      <div class="form-group">
                        <input
                          class="
                            form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="name"
                          type="text"
                          placeholder="Name as show on card"
                        />
                      </div>
                      <p class="text-dark text-sm">Card number</p>
                      <div class="form-group">
                        <input
                          class="form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="cardnumber"
                          type="text"
                          placeholder="xxxx xxxxx xxxx xxxx"
                        />
                      </div>
                      <p class="text-dark text-sm">Expiry date</p>
                      <div
                        class="form-group text-left col-lg-4 col-md-4 col-sm-4"
                      >
                        <select
                          class="col-lg-12 col-md-12 col-sm-12
                            form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="month"
                          type="text"
                          value=""
                          placeholder="month"
                        >
                          <option>month</option>
                          <option value="01">Jan (01)</option>
                          <option value="02">Feb (02)</option>
                          <option value="03">Mar (03)</option>
                          <option value="04">Apr (04)</option>
                          <option value="05">May (05)</option>
                          <option value="06">June (06)</option>
                          <option value="07">July (07)</option>
                          <option value="08">Aug (08)</option>
                          <option value="09">Sep (09)</option>
                          <option value="10">Oct (10)</option>
                          <option value="11">Nov (11)</option>
                          <option value="12">Dec (12)</option>
                        </select>
                      </div>

                      <div
                        class="form-group text-left col-lg-4 col-md-4 col-sm-4"
                      >
                        <select
                          class="
                            col-lg-12 col-md-12 col-sm-12
                            form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="year"
                          type="text"
                          value=""
                          placeholder="year"
                        >
                          <option>Year</option>
                          <option value="21">2021</option>
                          <option value="22">2022</option>
                          <option value="23">2023</option>
                          <option value="14">2024</option>
                          <option value="15">2025</option>
                          <option value="16">2026</option>
                          <option value="17">2027</option>
                          <option value="18">2028</option>
                          <option value="19">2029</option>
                          <option value="20">2030</option>
                          <option value="20">2031</option>
                        </select>
                      </div>
                      <div
                        class="form-group text-left col-lg-4 col-md-4 col-sm-4"
                      >
                        <input
                          class="
                            col-lg-12 col-md-12 col-sm-12
                            form-control
                            border-b-2 border-t-0 border-l-0 border-r-0
                          "
                          name="cvv"
                          type="text"
                          value=""
                          placeholder="cvv"
                        />
                        <p class="text-dark text-sm">
                          Security code found on your card
                        </p>
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
                          class="
                            col-lg-12 col-md-12 col-sm-12
                            btn btn-warning
                            form-control
                            add-to-cart
                          "
                          data-button-action="add-to-cart"
                          type="submit"
                        >
                          Pay now
                        </button></router-link
                      >
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-lg-4">
            <div class="border p-3">
              <table class="std">
                <tbody>
                  <tr>
                    <td colspan="3">
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
                    <td colspan="3">
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
</template>
