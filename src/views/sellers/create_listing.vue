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
                    ><span>Photo</span></router-link>
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
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Title</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control" type="text"/>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Subtitle (£2.40)</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control col-4" type="text"/>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Custom label (SKU)</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control col-4" type="text"/>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Category</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <select class="form-control form-control-md col-6 text-primary select-auto border" type="text">
                        <option></option>
                        <option></option>
                        <option></option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Second category</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <select class="form-control form-control-md col-6 text-primary select-auto border" type="text">
                        <option></option>
                        <option></option>
                        <option></option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Condition</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <select class="form-control form-control-md col-3 text-primary select-auto border" type="text">
                        <option>New</option>
                        <option>Used</option>
                        <option>Any</option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Quantity in stock</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control col-3" type="text"/>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 font-weight-bold text-dark">Description</p>
                    </div>
                    <div class="col-lg-8 col-md-8"> 
                    <div class="row container ">  
                    <ul class="nav nav-tabs">
                        <li class="active border border-b-0 p-2 text-primary"><a data-toggle="tab" href="#home">Standard</a></li>
                        <li class="p-2 border border-b-0 text-primary"><a data-toggle="tab" href="#menu1">Html</a></li>
                    </ul>
                    <hr>

                    <div class="tab-content p-3">
                        <div id="home" class="tab-pane fade in show active">
                        <h3>Standard</h3>
                        <div class="form-group">
                        <textarea class="form-control" rows="10" id="comment"></textarea>
                        </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                        <h3>Html</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
       
      
      
                                <div class="row pt-5">
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
        