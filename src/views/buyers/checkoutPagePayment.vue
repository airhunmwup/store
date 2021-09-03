<template>
  <div class="container">
    <p class="h6 p-3"><span class="text-primary"></span> <span class=" "></span>
</p>
    <!-- main content -->
    <!-- breadcrumb -->

    <!-- main -->
    <div class="row pt-4 pb-4 text-sm" style="height: 30rem;">
      <div class="">
        <p class="text-dark h4">Select a payment method</p>
        <hr />
        <div class="card-body">
          <div class="row">
              <p class="text-dark h6">Credit or debit cards</p>
              <p class="text-dark">
                REJEE Stores accepts major credit and debit cards.
              </p>
              <div class="p-2 col-4 col-xs-12">
                <div class="card rounded border border-success shadow text-sm">
            <router-link
              class=""
              to="/addnewaddress"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Pay now"
            >
                  <div class="card-body">
                      <div class="row">
                        <div class="col-4 border-r-2">
                    <p class="text-grey h3 m-3">
                      <i class="fa fa-credit-card fa-lg"></i>
                    </p>
                        </div>
                        <div class="col-8">
                    <p class="text-grey">
                      **** **** **** 2319
                    </p>
                    <p class="text-grey">
                      01/24
                    </p>
                    <p class="m-1 font-weight-bold text-grey">
                      JOHN MAXWELL .A
                    </p>
                        </div>
                        
                      </div>
                  </div>
            </router-link>
                </div>
              </div>
            <div class="col-6">

              <div class="col-8 pt-4">
                <p class="">
        <p class="card bg-light border">
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
              Pay with new Credit/Debit card
            </button>
          </router-link>
        </p>

              </div>
            </div>

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

      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
    </div>
  </div>
</template>
