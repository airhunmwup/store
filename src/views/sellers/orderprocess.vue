<template>
  <!-- main content -->

  <!-- main content -->
  <div class="main-content">
    
    <div id="wrapper-site">

              <section class="page-home">
                <div class="content">
                  <div class="row pt-5">
                    <div class="col-lg-12 col-sm-12 pl-5 pt-2">
                    </div>
                    <div class="pl-5 pb-3 col-12 pt-2">
                      <div id="content" class="page-content">
                        <div class="register-form">
                          <div class="row justify-content-center">
                            <div class="form-group col-9">
                      <h1 class="title-page">Process Delivery</h1>

                              <div class="clearfix">
                                <br />
                                <div class=" pb-2 pb-3 col-6">
                                  <p class="p-2"> Select delivery services product</p>
                                  <select
                                    class="col-8
                                      form-control
                                      js-child-focus js-visible-password
                                    "
                                    name="password"
                                    type="password"
                                  >
                                    <option>Royal mail</option>
                                    <option>DHL</option>
                                    <option>Hermes</option>
                                  </select>
                                </div>
                              <div class="box border pb-2 col-6">
                                  <p class=""> Add delivery tracking number</p>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder=""
                                />
                              </div>
                                <div class="row pt-5">

                                  <span class="col-4">
                                    <router-link
                                      to="/Product Listing"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      title="cancel"
                                      ><div>
                                        <button class="form-control">
                                          Cancel
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
                                          class="btn-success form-control"
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
                            <div class="form-group"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        
    </div>

    <!-- breadcrumb -->
    <nav class="breadcrumb-bg">
      <div class="container no-index">
        <div class="breadcrumb">
          <ol>
            <li></li>
          </ol>
        </div>
      </div>
    </nav>
  </div>
</template>