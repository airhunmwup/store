<template>
  <!-- main content -->
  <div class="box">
    <div class="row">
      <div class="container justify-content-center content-bottom">

                  <span class="p-2 text-primary font-weight-normal">
                  listing
                  </span>>
                  <span class="text pont-weight-normal">
                  Create listing
                  </span>
      </div>

    </div>

                <div class="content justify-content-center">
              <div class="pl-4 pr-4">
                  <p class="text p-2 h5 font-weight-bold">
                  Create Listing
                  </p>
                  
                  <!-- this should appear when order has been shipped-->
              <div class="card">

              <div class="row pl-4">
                <div class="container pl-3">
                  <div class="content text-dark p-2 font-weight-bold col-12  pl-2">
                  <router-link
                    to="/Overview"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Overview"
                    ><span>General</span></router-link
                  >
                  <router-link
                    to="/Orders"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="border-l-2 border-t-2 border-r-2 p-2"
                    title="Orders"
                    ><span class="text-primary">Photo</span></router-link>
                  <router-link
                    to="/Listing"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="listing"
                    ><span>Listing</span></router-link>
                  <router-link
                    to="/Account Page"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Account"
                    ><span>Account</span></router-link>
                  </div>
                  <hr>
                </div>
              </div>
                <div class="container pl-3">

          <div class="container justify-content-center col-9">
            <label for="formFileMultiple" class="p-3 text-dark h4 form-label"
              >Add Images</label
            >
            <div class="content border p-5">
              <div class="content box text-center border p-5">
                <label for="formFileMultiple" class="form-label"
                  >upload image files in JPG format only
                </label>
                <input
                  class="form-control"
                  type="file"
                  id="formFileMultiple"
                  multiple
                />
              </div>
            </div>
          </div>
                                <div class="row pl-5 pt-5">
                                  <span class="col-4">
                                    <router-link
                                      to="/Product Listing"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      title="cancel"
                                      ><div>
                                        <button class="form-control col-6">
                                          CANCEL
                                        </button>
                                      </div>
                                    </router-link></span
                                  >
                                  <span class="col-4">
                                  </span>
                                  <span class="col-4">
                                    <router-link
                                      to="/Upload Product Image"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      title="next"
                                    >
                                      <div>
                                        <button
                                          class="text-primary border-primary form-control col-6"
                                          data-link-action="sign-in"
                                          type="submit"
                                        >
                                          NEXT
                                        </button>
                                      </div></router-link
                                    ></span
                                  >
                                </div>
                </div>
                </div>
              </div>
              </div>

    <hr>
  </div>
</template>
        