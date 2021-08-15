<template>
  <div class="container">
    <!-- main content -->
    <!-- breadcrumb -->

    <!-- main -->
    <div class="row pt-4 pb-4">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p class="text-dark h4">Select a payment method</p>
        <hr />
        <div class="card-body">
          <div class="row">
            <div class="col-8">
              <p class="text-dark h6">Credit or debit cards</p>
              <p class="text-dark">
                REJEE Stores accepts major credit and debit cards.
              </p>

              <div class="col-8 pt-4">
                <p class="">
                  <router-link
                    class=""
                    to="/checkoutpayment"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    ><button type="button" class="btn border btn-sm btn-light">
                      Add credit or debit card
                    </button>
                  </router-link>
                </p>
              </div>
            </div>
            <div class="col"></div>
          </div>
        </div>

        <hr />
        <div class="card-body">
          <div class="row">
            <div class="col-8">
              <p class="text-dark h6">Gift Cards & Promotional Codes</p><p>
  <a class="text-primary text-sm underline" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    
                Enter a gift card, gift voucher or promotional code
  </a>
</p>
<div class="collapse" id="collapseExample">
  <form class="form-inline pt-4">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Enter Code</label>
    <input type="text" class="form-control-sm border shadow-inner" id="inputPassword2" placeholder="Enter Code">
  </div>
  <button type="submit" class="btn-light border btn-sm mb-2">Apply</button>
</form>
</div>

              <div class="col-8 pt-4">
              </div>
            </div>
            <div class="col">
                      <div
                        ><img
                          class="logo-mobile img-fluid p-3 border"
                          src="img/home/logo.png"
                          width="100px"
                          alt="REJEE COMPANY"
                      /></div>
            </div>
          </div>
        </div>
      </div>
      <!-- CONTINE TO PAYMENT BUTTON -->
      <div class="p-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <p class="p-2 card p-3 bg-light border">
          <router-link
            class=""
            to="/checkoutpayment"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
            ><button
              type="button"
              class="btn border btn-sm btn-warning btn-block"
            >
              Continue
            </button>
          </router-link>
        </p>
      </div>

      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
    </div>
  </div>
</template>
