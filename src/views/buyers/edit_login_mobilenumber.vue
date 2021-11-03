<template>
  <!-- main content -->
  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row justify-center">

<!--recently viewed-->
                <div class="row col-sm-12 p-3 col-lg-6 col-md-6">
                  <span class="text text-dark h4 font-weight-bold font-weight-normal">
                  Change Mobile Phone Number
                  </span>
                  <div class="card border">
  <div class="card-body">
    <div class="row">
  <div class="col-8">
      <p class="font-weight-bold text-dark">Old mobie phone number:</p>
      <p class="text-dark">GB +4479967586</p>
  </div>
  <div class="col-4 text-end">
      <p class="text-primary pt-2 underline text-sm">Delete</p>
  </div>
</div>
    <div class="row">
  <div class="col-12">
  <div class="form-group row mb-2 pt-3">
      <p class="font-weight-bold text-dark mb-2">Mobile number:</p>
  <div class="col-2">
    <select type="text" class="form-control form-control-sm border-dark" placeholder="John" disabled>
        <option>+44</option>
    </select>
  </div>
  <div class="col-6">
    <input type="number" class="form-control form-control-sm border-dark" placeholder="">
  </div>
    
  </div>

      <p class="text-xs mb-2 text-dark">By enrolling your mobile phone number, you consent to receiving automated security notifications via text message from REJEE Stores. You can opt out by removing your mobile number on the Login & Security page located in Your Account settings. Message and data rates may apply.</p>

                <p class="mb-2 mt-2">
                  <router-link
                    class=""
                    to="/buyersigninsecsetting"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    ><button type="button" class="form-control btn border-dark btn-sm btn-warning">
                      Continue
                    </button>
                  </router-link>
                </p>
                <p class="mb-2 mt-2">
                  <router-link
                    class=""
                    to="/"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    ><button type="button" class="form-control btn border-dark btn-sm btn-light">
                      Cancel
                    </button>
                  </router-link>
                </p>
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
        