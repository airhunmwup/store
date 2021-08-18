<template>
  <!-- main content -->
  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row justify-center">

<!--recently viewed-->
                <div class="row col-sm-12 p-3 col-lg-4 col-md-4">
                  <div class="card border">
  <div class="card-body">
                  <span class="text text-dark h4 font-weight-bold font-weight-normal">
                  Change your email address
                  </span>
      <p class="text-dark mx-sm-3 mb-2 ">Current email address:<br>
       john@example.com</p>
      <p class="text-dark pt-2 mx-sm-3 mb-2 "> Enter the new email address you would like to associate with your account below. We will send a One Time Password (OTP) to that address.</p>

  <div class="form-group mx-sm-3 mb-2 pt-3">
      <p class="font-weight-bold text-dark">New email address:</p>
    <input type="email" class="form-control border-dark" placeholder="" required>
  </div>

                <p class="mx-sm-3 mb-2 ">
                  <router-link
                    class=""
                    to="/addcard"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    ><button type="button" class="form-control btn-sm btn border-dark btn-warning">
                      continue
                    </button>
                  </router-link>
                </p>
  </div>
</div>
                </div>


          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        