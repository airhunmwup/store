<template>
  <!-- main content -->
  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row justify-center">

<!--recently viewed-->
                <div class="row col-sm-12 col-xs-12 p-3 col-lg-6 col-md-6">
                    
                  
                      <div class="content">

              <p class="text-dark font-weight-bold h5 text-lg">Set payment preference</p>
                        <div class="tab-content">
                          <div
                            class="tab-pane fade in active show justify-content-center  col-sm-12 col-xs-12 p-3 col-lg-12 col-md-12"
                            id="checkout-guest-form"
                            role="tabpanel"
                          >
                            <div class="card ">
                            <div class="card-header">
                  <span class="text text-dark h6 font-weight-bold p-3">
                  Add a Payment Method

                  </span>
                  
                            </div>
                            <div class="card-body">

<form>

            <div class="row">

              <div class="mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="border-dark form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="mb-3">
                <label for="cc-number">Card number</label>
                <input type="text" class="border-dark form-control" id="cc-number" placeholder="xxxx xxxx xxxx xxxx" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="row col-md-6 col-sm-6 col-xs-12 mb-3">
                <label for="cc-expiration">Expiration</label>
              <div class="col mb-2">
                <select type="text" class="border-dark form-control" id="cc-expiration" placeholder="" required>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col mb-3">
                <select type="text" class="border-dark form-control" id="cc-expiration" placeholder="" required>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                    <option>2029</option>
                    <option>2030</option>
                </select>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              </div>
              <div class="col-4 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="border-dark col-xs-4 col-sm-5  form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
<hr>
              <div class="p-2 col-lg-6">
                <div class="card border-secondary border-dashed ">
                  <div class="card-header">
                    <p class="text-sm font-weight-bold text-dark">
                      Default: Billing Address
                    </p>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold text-dark">
                      John Maxwell
                    </h5>
                    <p class="text-dark">Address line 1</p>
                    <p class="text-dark">City, Postcode</p>
                    <p class="text-dark">Country</p>
                  </div>
                <router-link
                  to="/addnewaddress"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
                    <button type="button" class="btn-sm text-primary underline">
                      Change
                    </button>
                </router-link>
                </div>
              </div>
            <div class="d-block my-3">
              <div class="custom-control custom-checkbox">
                <input id="credit" name="" type="checkbox" class="custom-control-input">
                <label class="custom-control-label" for="credit">Set as default payment method</label>
              </div>
            </div>
            <hr class="mb-4">
                               <div class="p-2">
                                <button type="button" class="m-2 btn-sm border border-dark">cancel</button>
                                 
                                <button type="button" class="btn-sm btn-warning border border-dark">Add your card</button>
                                        </div>
</form>

                            </div>
                            </div>
                              <div>

                            
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
        