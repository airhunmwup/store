<template>
  <!-- main content -->
  <div class="box">
    <div class="row">
      <div class="container justify-content-center content-bottom">

        <div class="content sidebar-block">
          <div class="text-base">
            <div class="pt-5 pl-3">
              <span class="font-weight-bold text-dark h3">
                Seller Hub</span
              >
              <span class="text-dark text-sm"> UserID (0)</span>
            </div>
          </div>
        </div>
      </div>

    </div>

        <div class="row">
          <div class="pl-3 col-sm-12 col-lg-12 col-md-12 product-container">
            <div id="wrapper-site">

              <div class="tab-content" id="v-pills-tabContent">

<!--All-Orders-->
                <div class="row">
                  <span class="text h5 pl-5 font-weight-bold  font-weight-normal">
                  Create Listings
                  </span>
                  <hr>
                  
                <div class="card">

              <div class="row pl-4">
                <div class="container pl-3">
                  <div class="content text-dark p-2 font-weight-bold col-12  pl-2">
                  <router-link
                    to="/Overview"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="border-l-2 border-t-2 border-r-2 p-2"
                    title="Overview"
                    ><span class="text-primary">General</span></router-link
                  >
                  <router-link
                    to="/Orders"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="p-2"
                    title="Orders"
                    ><span><i class="fa fa-image"></i> Photo</span></router-link>
                  <router-link
                    to="/Listing"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="listing"
                    ><span><i class="fa fa-folder"></i> Variation</span></router-link>
                  <router-link
                    to="/Account Page"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Account"
                    ><span><i class="fa fa-truck"></i> Shipping</span></router-link>
                  </div>
                  <hr>
                </div>
              </div>
                <div class="container pl-3">
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Title:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control" type="text"/>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Subtitle (£2.40):</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control" type="number" step="0.01" min="0.50"/>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Custom label (SKU):</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control col-10" type="text"/>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="font-weight-bold text-dark">Category:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <select class="underline pt-4 form-control-md col-6 text-primary select-auto border" type="text">
                        <option>Fashion</option>
                        <option>Electronics</option>
                        <option></option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="font-weight-bold text-dark">Sub-category:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <select class="col-6 text-primary underline sselect-auto border" type="text">
                        <option>male</option>
                        <option>female</option>
                        <option></option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="font-weight-bold text-dark">Condition:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <select class="col-3 text-primary underline select-auto border" type="text">
                        <option>New</option>
                        <option>Used</option>
                        <option>Any</option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Minimum Quantity:</p>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input class="form-control" type="text"/>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Maximum Quantity:</p>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input class="form-control" type="text"/>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Description:</p>
                    </div>
                    <div class="col-lg-10 col-md-10"> 
                    
                        <div class="form-group">
                        <textarea class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                                    <router-link
                                      to="/Product Listing"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      title="cancel"
                                      >
                                        <span class="form-control align-content-lg-start col-6">
                                          CANCEL
                                        </span>
                                    </router-link>
                    
                        
                                    <router-link
                                      to="/Upload Image"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      title="next"
                                    >
                                        <span
                                          class="text-primary align-content-lg-end border-primary form-control col-6"
                                          data-link-action="sign-in"
                                          type="submit"
                                        >
                                          NEXT
                                        </span></router-link
                                    >
                </div>
       
      
      
                </div>
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
        