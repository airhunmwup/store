<template>
  <!-- main content -->
  <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb text-xs">
    <li class="breadcrumb-item text-primary"><a href="#">Your Account</a></li>
    <li class="breadcrumb-item text-primary"><a href="#">Sellers hub</a></li>
    <li class="breadcrumb-item active" aria-current="page">Your Payout</li>
  </ol>
</nav>

        <div class="justify-content-center row pt-4 pb-4">
            

          <div class="col-sm-12 col-lg-12 col-md-12 product-container mb-4">

  <div class="row">
    <div class="col">
                  <p class="h4 text-dark text-left">Your payout manager</p>
                  <p class="text-dark text-sm text-left">Your default preferences are used for receiving payments.</p>
    </div>
    <div class="col-sm">
    </div>
  </div>


    <p class="p-3"></p>
  <div class="row">
    <div class="col-sm">
<div class="card m-1">
  <div class="card-body m-3">
    <p class="text-center text-success h1 font-weight-bold"><i class=" zmdi zmdi-balance-wallet"></i></p>
    <p class="text-dark text-center h5 font-weight-bold">£150.00</p>
    <p class="text-center text-xs">Available balance</p>
  </div>
  <div class="card-body border-t-2">
    <button type="button" class="btn btn-success btn-sm btn-block">Manage preference</button>
  </div>
</div>
    </div>
    <div class="col-8 col-xs-12">
<div class="card m-1">
  <div class="card-header">
    <p class="text-xs font-weight-bold"><span class="text-dark">Bank Accounts</span><span class=""> (for withdrawal)</span></p>
  </div>
  <div class="card-body shadow-inner">
    <div class="row">
              <div class="p-2 col-6 col-xs-12">
                <div class="card backdrop-brightness-100 shadow text-sm">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-4 border-r-2">
                    <p class="text-grey h1 m-3">
                      <i class="fa fa-university fa-lg"></i>
                    </p>
                        </div>
                        <div class="col-8">
                    <p class="text-grey">
                      Lloyds Bank
                    </p>
                    <p class="text-grey">
                      6118293018
                    </p>
                    <p class="text-grey">
                      30-03-01
                    </p>
                    <p>
                        <span class="alert-xs text-xs rounded-3 p-1 mt-4 alert-success" style="height: 2rem;" role="alert">
                          approved
                        </span>
                    </p>
                        </div>
                        
                      </div>
                  </div>
                  <div class="card">
                    <span class="p-2"><button type="button" class="text-xs underline border btn btn-sm btn-warning">Remove</button></span>
                  </div>
                </div>
              </div>
              <div class="p-2 col-4 col-xs-12">
                <div class="card border-dashed border-secondary">
            <router-link
              class=""
              to="/addpayout"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Add bank account"
            >
                  <div class="m-2 card-body">
                    <p class="text-center text-grey h1">
                      <i class="fa fa-plus"></i>
                    </p>
                  </div>
            </router-link>
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

  </div>
</template>
        