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
                  Change Your Name
                  </span>
                  <div class="card border">
      <p class="text-dark p-2">If you want to change the name associated with your REJEE Stores account, you may do so below. Make sure that you click the <b>Save Changes</b> button when you have finished.</p>
  <div class="card-body">
    <div class="row">
  <div class="col-8">
  <div class="form-group mx-sm-3 mb-2 pt-3">
      <p class="font-weight-bold text-dark">New name:</p>
    <input type="text" class="form-control border-dark" placeholder="John">
  </div>

                <p class="mx-sm-3 mb-2 ">
                  <router-link
                    class=""
                    to="/addcard"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    ><button type="button" class="btn border-dark btn-sm btn-warning">
                      Save changes
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
        