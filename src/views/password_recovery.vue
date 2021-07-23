<template>
  <!-- main content -->

  <!-- main content -->

  <div class="">
    <div class="content pt-5 pb-5">
      <div class="row pt-2 pb-5">
        <div class="container align-content-center">
          <div class="register-form text-center">
            <div class="pb-5">
              <p class="h4 text-dark">Password Recovery</p>
              <p class="text-dark">Enter email address associated with your REJEE account.</p>

            </div>

            <div>
              <div class="container">
                <div class="form-group p-2">
                  <input
                    class="
                      col-lg-6 col-md-6 col-sm-6
                      border-b border-dark border-t-0 border-l-0 border-r-0
                    "
                    name="email"
                    type="email"
                    placeholder=" Email"
                  />
                </div>



                <div class="clearfix p-2">
                  <button
                    class="col-lg-6 col-md-6 col-sm-6 btn text-light"
                    style="background-color: rgb(209, 209, 208)"
                  >
                    Send
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr />

    <div v-if="loading" id="page-preloader" class="redit">
        <div class="page-loading">
            <div class="dot text-center text-danger font-italic font-extrabold">R</div>
            <div class="dot text-center text-danger font-italic font-extrabold">E</div>
            <div class="dot text-center text-danger font-italic font-extrabold">J</div>
            <div class="dot text-center text-danger font-italic font-extrabold">E</div>
            <div class="dot text-center text-danger font-italic font-extrabold">E</div>
        </div>
    </div>
  </div>
</template>
