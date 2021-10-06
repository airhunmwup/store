<template>
  <div>
              
                <!-- main content -->
                      <section class="text-sm">
                        <div class="container">
<nav aria-label="breadcrumb" class="d-xs-none">
  <ol class="breadcrumb text-xs">
    <li class="breadcrumb-item text-primary"><a href="#">Your Account</a></li>
    <li class="breadcrumb-item text-primary" aria-current="page">Help</li>
    <li class="breadcrumb-item active" aria-current="page">Resolution center</li>
  </ol>
</nav>
                            
                          <div class="row">
                            <div
                              class="col-lg-10col-md-10 pt-3 pl-5 col-sm-10"
                            >
                              <p class="text-dark  text-left h4 font-weight-bold">
                                Resolution Center
                              </p>
                            </div>
                        <div class="border-primary text-dark alert alert-primary">
                        <strong><i class="fa fa-info-circle fa-lg"></i></strong> <b>Upcoming updates to Resolution Center</b><br> Center will be going away soon. You will still be able to create and manage your requests and cases in Seller Hub, My REJEE Stores Sold and Purchase History.
                        </div>
                        <form>
                            <div class="row">
                              <div class="col-lg-8 p-3 col-md-8 col-sm-12">
                              <div class="border p-3">
                              <p class="text-dark  text-left h6 font-weight-bold">
                                    Resolve a problem
                              </p>
                              <hr>
                                <p class="text-dark">
                                  We always encourage our members to communicate with each other when there's a problem with a transaction. The first step is to contact the member through the Resolution Center and try to resolve the problem.
                                </p>
                                <div class="row p-3">
                                <p class="text-dark">
                                    To start the resolution process, please tell us what your problem is:
                                </p>
                              <div class="col-6 p-3">
                                <p class="text-dark font-weight-bold">
                                    I bought an item.
                                </p>
                                  <ul class="text-dark" style="list-style-type:disc;">
                                    <li><input type="checkbox"/> I haven't received it yet.</li>
                                    <li><input type="checkbox"/> I received an item that does not match the seller's description.</li>
                                   </ul>
                              </div>
                              <div class="col-6 p-3">
                                  <p class="text-dark font-weight-bold">
                                    I sold an item.
                                </p>
                                  <ul class="text-dark" style="list-style-type:disc;">
                                    <li><input type="checkbox"/> I haven't received my payment yet.</li>
                                    <li><input type="checkbox"/> I need to cancel a transaction.</li>
                                   </ul>
                              </div>
                                </div>
                              <div class="p-3">
                                <button class="btn-sm border text-primary border-primary" type="submit">Continue</button><span class="pl-3 text-xs text-primary">  My problem is not listed here</span>
                              </div>
                              </div>
                              </div>
                              <div class="col-lg-4 p-3 col-md-4 col-sm-12">
                              <div class="border p-3">
                              <p class="text-dark  text-left h6 font-weight-bold">
                                    Help
                              </p>
                              <hr>
                              <ul class="text-primary p-3">
                                  <li class="underline"><router-link
                                            to="/money back guarantee"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            title="Money Back Guarantee"
                                          >What is the REJEE Stores Money Back Guarantee?</router-link></li>
                                  <li class="underline"><router-link
                                            to="/Resolving unpaid item"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            title="Resolving unpaid item"
                                          >What to do when a buyer doesn't pay</router-link></li>
                                  <li class="underline"><router-link
                                            to="/cancel order"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            title="cancel order"
                                          >Canceling a transaction</router-link></li>
                                  <li class="underline"><router-link
                                            to="/Return missing item"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            title="Return"
                                          >What to do when you don't receive your item or it's not as described</router-link></li>
                                  <li class="underline"><router-link
                                            to="/Resolving with seller"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            title="Resolving with seller"
                                          >Resolving buying problems</router-link></li>
                                  <li class="underline"><router-link
                                            to="/Selling"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            title="Resolving selling problems"
                                          >Resolving selling problems</router-link></li>
                              </ul>
                              </div>
                              </div>
                            </div>
                        </form>
                          </div>
                        </div>
                      </section>
            <div class="pb-5 pt-5"></div>
  </div>
</template>