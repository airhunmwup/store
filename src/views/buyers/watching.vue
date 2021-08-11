<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>
      <div class="container justify-content-center content-bottom">

        <span class="p-3 text-right">Summary is your My REJEE 
          <router-link
            to="/Summary"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="text-primary"
            title="Home Page"
            >homepage</router-link></span>
      </div>

    </div>
        <div class="row pb-4">
          <div
            class="pl-4
              sidebar-3 
              col-lg-2 col-md-2
              d-xs-none
              pt-3
              font-weight-bold
            "
          >
            <!-- menu -->
            <div class="sidebar-block text-dark">
              <div class="block-content">
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/summary"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Summary"
                            >
                  Summary
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/recentlyviewed"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Recently viewed"
                            >
                  Recently
                    viewed
                </router-link>

                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/purchasehistory"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Purchase History"
                            >
                  Purchase History
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/watchingpage"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Watching"
                            >
                  Watching
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/savedsearch"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Saved Search"
                            >
                  Saved Search
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/savedseller"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Saved Seller"
                            >
                  Saved Seller
                </router-link>
              </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-lg-9 col-md-9 product-container">
            <div id="wrapper-site">

              <div class="tab-content" id="v-pills-tabContent">

<!--Watching-->
                <div class="row">
                  <span class="text text-dark h4 font-weight-bold p-4 font-weight-normal">
                  Watching
                  </span>
                                    <div class="cart-container">

        <div class="col-md-10 col-xs-12 col-sm-12 check-info">
          <div class="cart-container">
            <ul class="cart-items">
              <li class="cart-item">
                <div class="product-line-grid row p-2 justify-content-between">
                  <!--  product left content: image-->
                  <div
                    class="product-line-grid-center col-md-3 col-lg-3 col-sm-6 col-xs-6"
                  >
                    <img class="" src="img/product/16.jpg" />
                  </div>
                  <div
                    class="product-line-grid-body col-md-9 col-sm-6 col-xs-6"
                  >
                    <div class="product-line-info">
                      <p class="h4 text-dark">
                        Organic Strawberry Fruits
                      </p>
                    </div>
                    <div class="product-line-info">
                      <span class="label-atrr">New</span>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col text-dark">
                        <div class="quantity pt-2">
                          <p class="value text-lg text-dark font-weight-bold">
                            £20.00
                          </p>
                          <p class="value text-xs">2 days delivery</p>
                        </div>
                      </div>
                    </div>
                          <div class="p-3">
                            <p class="text-xs text-primary underline">
                              <span class="p-3">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              Remove
                              </span>
                            </p>
                          </div>
                  </div>
                </div>
              </li>
              <hr />
              <li class="cart-item">
                <div class="product-line-grid row p-2 justify-content-between">
                  <!--  product left content: image-->
                  <div
                    class="product-line-grid-center col-md-3 col-lg-3 col-sm-6 col-xs-6"
                  >
                    <img class="" src="img/product/12.jpg" />
                  </div>
                  <div
                    class="product-line-grid-body col-md-9 col-sm-6 col-xs-6"
                  >
                    <div class="product-line-info">
                      <p class="h4 text-dark">
                        Organic Strawberry Fruits
                      </p>
                    </div>
                    <div class="product-line-info">
                      <span class="label-atrr">New</span>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col text-dark">
                        <div class="quantity pt-2">
                          <p class="value text-lg text-dark font-weight-bold">
                            £20.00
                          </p>
                          <p class="value text-xs">2 days delivery</p>
                        </div>
                      </div>
                    </div>
                          <div class="p-3">
                            <p class="text-xs text-primary underline">
                              <span class="p-3">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              Remove
                              </span>
                            </p>
                          </div>
                  </div>
                </div>
              </li>
              <hr />
            </ul>
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
        