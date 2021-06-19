<template>
  <!-- this page automatically sends email containing the name, address, 
  tracking number, delivery date,  order date and delivery agent tracking
   weblink to the customer -->

  <!-- main content -->
  <div class="main-content">
    
    <div id="wrapper-site">

                  <div class="row pt-5">
                    <div class="pl-5 pb-3 col-lg-12 col-sm-12 col-md-12 pt-2">
                      <div id="content" class="page-content">
                          <div class="row justify-content-center">
                              <form class="col-10">
                            <div class="form-group col-9">
                      <h1 class="title-page">Delivery Details</h1>
                                    <hr>
                                <div class=" pb-2 pb-3 col-lg-6 col-md-6">
                                  <p class="p-2"> Select delivering agent</p>
                                  <select
                                    class="col-8
                                      form-control
                                      js-child-focus js-visible-password
                                    "
                                    name="password"
                                    type="password"
                                  >
                                    <option value="https://www.royalmail.com/track-your-item">Royal mail</option>
                                    <option value="https://www.dhl.com/us-en/home/tracking.html">DHL</option>
                                    <option value="https://www.parcelforce.com/track-trace">Parcel force </option>
                                    <option value="https://www.dpd.co.uk/service/"> DPD </option>
                                    <option value="https://www.ups.com/track?loc=en_GB&requester=ST/"> UPS </option>
                                  </select>
                                </div>
                              <div class="box border p-2 col-lg-6 col-md-6">
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder=" Add delivery tracking number"
                                />
                              </div>
                                <div class="row pt-5">

                                  <span class="col-4">
                                    <router-link
                                      to="/Seller Orderdetails"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      title="cancel"
                                      ><div>
                                        <button class="form-control">
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
                              </form>
                            <div class="form-group"></div>
                          </div>
                      </div>
                    </div>
                  </div>
        
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